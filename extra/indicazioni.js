 $(document).live("pageshow", "#map_page", function() {
                initialize();
            });

            $(document).live("pagecreate", "#map_page", function() {
                $('#submit').click(function() {
                    calculateRoute();
                    return false;
                });
            });

            var directionDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;

            function initialize() 
            {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var mapCenter = new google.maps.LatLng(46.071325, 11.622913);

                var myOptions = {
                    zoom:13,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    center: mapCenter
                }

                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                directionsDisplay.setMap(map);
                directionsDisplay.setPanel(document.getElementById("directions"));  
            }

            function calculateRoute() 
            {
                var selectedMode = $("#mode").val();
                var start = $("#from").val();
                var end = $("#to").val();

                if(start == '' || end == '')
                {
                    // cannot calculate route
                    $("#results").hide();
                    return;
                }
                else
                {
                    var request = {
                        origin:start, 
                        destination:end,
                        travelMode: TravelMode.DRIVING
                    };

                    directionsService.route(request, function(response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response); 
                            $("#results").show();
                            /*
                                var myRoute = response.routes[0].legs[0];
                                for (var i = 0; i < myRoute.steps.length; i++) {
                                    alert(myRoute.steps[i].instructions);
                                }
                            */
                        }
                        else {
                            $("#results").hide();
                        }
                    });

                }
            }