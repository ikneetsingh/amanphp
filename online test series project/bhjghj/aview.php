<?php
include_once("db.php");

class times_counter {

	private $hou = 0;
	private $min = 0;
	private $sec = 0;
	private $totaltime = '00:00:00';

	public function __construct($times){
		
		if(is_array($times)){

			$length = sizeof($times);

			for($x=0; $x <= $length; $x++){
			        $split = explode(":", @$times[$x]); 
			        $this->hou += @$split[0];
			        $this->min += @$split[1];
			        $this->sec += @$split[2];
			}

			$seconds = $this->sec % 60;
			$minutes = $this->sec / 60;
			$minutes = (integer)$minutes;
			$minutes += $this->min;
			$hours = $minutes / 60;
			$minutes = $minutes % 60;
			$hours = (integer)$hours;
			$hours += $this->hou % 24;
			$this->totaltime = $hours.":".$minutes.":".$seconds;
		}
	}

	public function get_total_time(){
		return $this->totaltime;
	}
}

$str=mysql_query("select * from tbl_assign where s_display='1' order by s_combo");
?>
<table border="1" align="center" width="800px">
<tr bgcolor="lightblue">
<th>Sno</th>
<th>combo</th>
<th>test</th>
<th>fees</th>
<th>timing</th>
<th>Action</th>
</tr>
<?php
$i=1;
while($combo_row=mysql_fetch_array($str))
{
	$ttl_tests=substr($combo_row['s_test'],0,-1);
	$tests=explode(",",$ttl_tests);
	$test_n="";
	$test_f=0;
	$test_t=0;
		
	$com_row=mysql_fetch_array(mysql_query("select s_combo from tbl_combo where s_sno='$combo_row[s_combo]'"));
	foreach($tests as $test)
	{
		$test_row=mysql_fetch_array(mysql_query("select * from tbl_test where s_sno='$test'"));
		$test_n.=$test_row['s_test'].",";
		$test_f=$test_f+$test_row['s_fees'];
		
		$test_t.=$test_row['s_timing'].",";
	}
		$tests=substr($test_t,0,-1);
		$times=explode(",",$tests);
		$counter = new times_counter($times);

	echo"<tr>";
	echo "<td>$i</td>";
	echo"<td>$com_row[s_combo]</td>";
	echo"<td>$test_n</td>";
	echo"<td>$test_f</td>";
	echo"<td>".$counter->get_total_time()."</td>";
	echo "<td><a href='admin1.php?value=5&edt=1&sno=$combo_row[s_sno]'>Edit</a> &nbsp;
	 			<a href='adelete.php?sno=$combo_row[s_sno]&display=$combo_row[s_display]'>Delete</a></td>";
				echo "</tr>";
				$i++;
			}
	
?>
	</table>


