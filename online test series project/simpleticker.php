
    <link rel="stylesheet" type="text/css" href="simpleTicker.css">
 
    <div id="tickerContainer">
	
      <dl id="ticker">
        <dt class="heading">This is a news title!</dt><dd class="text">This is a snippet of the news. It could be the whole news item or it could link to another page containing...</dd>
        <dt class="heading">News Heading 2</dt><dd class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
        <dt class="heading">News Heading 3</dt><dd class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
        <dt class="heading">News Heading 4</dt><dd class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
        <dt class="heading">This item is long!</dt><dd class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
      </dl>
    </div>
    
    <script type="text/javascript">
	  $(function() {
	  
		//cache the ticker
		var ticker = $("#ticker");
		  
		//wrap dt:dd pairs in divs
		ticker.children().filter("dt").each(function() {
		  
		  var dt = $(this),
		    container = $("<div>");
		  
		  dt.next().appendTo(container);
		  dt.prependTo(container);
		  
		  container.appendTo(ticker);
		});
				
		//hide the scrollbar
		ticker.css("overflow", "hidden");
		
		//animator function
		function animator(currentItem) {
		    
		  //work out new anim duration
		  var distance = currentItem.height();
			duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.025;

		  //animate the first child of the ticker
		  currentItem.animate({ marginTop: -distance }, duration, "linear", function() {
		    
			//move current item to the bottom
			currentItem.appendTo(currentItem.parent()).css("marginTop", 0);

			//recurse
			animator(currentItem.parent().children(":first"));
		  }); 
		};
		
		//start the ticker
		animator(ticker.children(":first"));
				
		//set mouseenter
		ticker.mouseenter(function() {
		  
		  //stop current animation
		  ticker.children().stop();
		  
		});
		
		//set mouseleave
		ticker.mouseleave(function() {
		          
          //resume animation
		  animator(ticker.children(":first"));
		  
		});
	  });
    </script>
 