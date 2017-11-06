

jQuery(document).ready(function($){




     function createWaypoint (triggerElementId, animatedElement, className, offsetVal, functionName) {
            var waypoint = new Waypoint({
                element: document.getElementById(triggerElementId),
                handler: function(direction) {
                    if (direction === 'down') {
                        $(animatedElement).addClass(className);
    
                        if(typeof functionName === 'function') {
                            functionName.call();
                        }
                    }
    
                    else {
                        $(animatedElement).removeClass(className);
    
                        if(typeof functionName === 'function') {
                            functionName.call();
                        }
                    }
                },
                offset: offsetVal
            });
        }
        
       
       createWaypoint("header_trigger", ".sticky_clone, .nav_dropdown", "active", "-157px", null);
    
       createWaypoint("sec_two", ".free_consultation_desktop, .free_consultation_tablet", "active", "0%", null);
			 
			 createWaypoint("footer", ".free_consultation_desktop, .free_consultation_tablet", "hide", "70%", null);
			 
			 
			
			
			// one time
			 
			 
			var waypointfirst = new Waypoint({
				element: document.getElementById('banner_trigger'),
				handler: function(direction) {
   
   
						jQuery('#banner_trigger').addClass('animate');
  
 				
 				},
  			
				offset: 0
			}) // waypoint
			
			
			
			var waypointtwo = new Waypoint({
				element: document.getElementById('sec_two'),
				handler: function(direction) {
   
   
						jQuery('#sec_two').addClass('animate');
  
 				
 				},
  			
				offset: 100
			}) // waypoint
			
			
			
			
			
			var waypointthree = new Waypoint({
				element: document.getElementById('sec_three_trigger'),
				handler: function(direction) {
   
   
						jQuery('#sec_three_trigger').addClass('animate');
  
 				
 				},
  			
				offset: 100
			}) // waypoint
			
			
			
			var waypointfour = new Waypoint({
				element: document.getElementById('video_trigger'),
				handler: function(direction) {
   
   
						jQuery('#video_trigger').addClass('animate');
  
 				
 				},
  			
				offset: 500
			}) // waypoint
			
			
			
			
			var waypointfive = new Waypoint({
				element: document.getElementById('sec_four'),
				handler: function(direction) {
   
   
						jQuery('#sec_four').addClass('animate');
  
 				
 				},
  			
				offset: -500
			}) // waypoint
			
			
			
			var waypointfive = new Waypoint({
				element: document.getElementById('sec_five_trigger'),
				handler: function(direction) {
   
   
						jQuery('#sec_five_trigger').addClass('animate');
  
 				
 				},
  			
				offset:50
			}) // waypoint
			
			
			
			
			var waypointfive = new Waypoint({
				element: document.getElementById('sec_six_trigger'),
				handler: function(direction) {
   
   
						jQuery('#sec_six_trigger').addClass('animate');
  
 				
 				},
  			
				offset:70
			}) // waypoint
			
			
			
			
			
		
		
		
		
		
		
		
		
			 
			 
			 


}); // Document Ready

