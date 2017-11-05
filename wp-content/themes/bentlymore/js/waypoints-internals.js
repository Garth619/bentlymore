
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
    
       createWaypoint("inner_main_trigger", ".free_consultation_desktop", "active", "0%", null);
        
       createWaypoint("footer", ".free_consultation_desktop", "hide", "100%", null);
       



}); // Document Ready

