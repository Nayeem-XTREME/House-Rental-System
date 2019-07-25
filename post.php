<?php
	session_start();
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
	$_SESSION['message'] = '';


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  $head = $_POST['heading'];
	  $room = $_POST['room'];
	  $bed = $_POST['bed'];
	  $dining = $_POST['dining'];
    $bath = $_POST['bath'];
    $des = $_POST['des'];
    $rent = $_POST['rent'];
    $add = $_POST['add'];
    $latitude = $_POST['lat'];
    $longitude = $_POST['lng'];


	  $db = mysqli_connect('localhost', 'root', '', 'house_rental');


	    $query = "INSERT INTO ADDS (Heading, Room, Bed, Dining, Bath, Description, Rent, Address, Latitude, Longitude) VALUES ('$head', '$room', '$bed', '$dining', '$bath', '$des', '$rent', '$add', '$latitude', '$longitude')";
	    $result = mysqli_query($db, $query);

			$_SESSION['name'] = $name;
			$_SESSION['email'] = $mail;

	    header("Location: Main.php");

	}
?>









<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseRental.bsdesign1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/post.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-1.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" id="top">
        <div class="container" id="Hi">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html"><strong>House Rental</strong> System</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right" id="Hello">
                    <li class="dropdown">
                        <a class="text-uppercase dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img src="assets/img/gzypyldoqaxjhvtyyhei.png" id="pic"><?php echo $name; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Profile </a></li>
                            <li role="presentation"><a href="#">Settings </a></li>
                            <li role="presentation"><a href="#">Log out</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form" id="searchbar">
                    <input class="form-control AAA" type="search" placeholder="Search">
                    <button class="btn btn-default AAA" type="button"><img src="assets/img/gzypyldoqaxjhvtyyhei.png" id="searchicon"> </button>
                </form>
            </div>
        </div>
    </nav>
    <div id="main-post">
        <h1 class="text-center text-muted" id="posthead">POST YOUR AD.</h1>
        <div class="row" id="postrow">
            <div class="col-md-6" id="postleft">
                <div class="row register-form" id="post1">
                    <div class="col-md-8 col-md-offset-2" id="post2">
                        <form class="form-horizontal custom-form" id="post3" action="post.php" method="POST" enctype="multipart/form-data">
                            <h1>INFORMATION </h1>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">Heading of your ad.</label>
                                </div>
                                <div class="col-sm-7 input-column">
                                    <input class="form-control" type="text" placeholder="Heading" name="heading" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Total no. of room(s)</label>
                                </div>
                                <div class="col-sm-4 input-column">
                                    <div class="dropdown">
                                        <!-- <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Room(s) <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="#">1 </a></li>
                                            <li role="presentation"><a href="#">2 </a></li>
                                            <li role="presentation"><a href="#">3 </a></li>
                                        </ul> -->

                                        <select class="btn btn-default dropdown-toggle" name="room">
                                          <option value="" selected>No. of Room(s)</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">No. of bed(s)</label>
                                </div>
                                <div class="col-sm-4 input-column">
                                    <div class="dropdown">
                                        <!-- <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Bed(s) <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="#">1 </a></li>
                                            <li role="presentation"><a href="#">2 </a></li>
                                            <li role="presentation"><a href="#">3 </a></li>
                                        </ul> -->

                                        <select class="btn btn-default dropdown-toggle" name="bed">
                                          <option value="">No. of Bed(s)</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">No. of dining(s)</label>
                                </div>
                                <div class="col-sm-4 input-column">
                                    <div class="dropdown">
                                        <!-- <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dining(s) <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="#">1 </a></li>
                                            <li role="presentation"><a href="#">2 </a></li>
                                            <li role="presentation"><a href="#">3 </a></li>
                                        </ul> -->

                                        <select class="btn btn-default dropdown-toggle" name="dining">
                                          <option value="">No. of Dining(s)</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">No. of bath(s)</label>
                                </div>
                                <div class="col-sm-4 input-column">
                                    <div class="dropdown">
                                        <!-- <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Bath(s) <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li role="presentation"><a href="#">1 </a></li>
                                            <li role="presentation"><a href="#">2 </a></li>
                                            <li role="presentation"><a href="#">3 </a></li>
                                        </ul> -->

                                        <select class="btn btn-default dropdown-toggle" name="bath">
                                          <option value="">No. of Bath(s)</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">Description</label>
                                </div>
                                <div class="col-sm-7 input-column">
                                    <input class="form-control" type="text" placeholder="(Max 500 word)" name="des" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">Monthly rent (BDT)</label>
                                </div>
                                <div class="col-sm-7 input-column">
                                    <input class="form-control" type="text" placeholder="Amount" name="rent" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">Address </label>
                                </div>
                                <div class="col-sm-7 input-column">
                                    <input class="form-control" type="text" placeholder="Address" name="add" required>
                                </div>
                            </div>
                            <h3 id="select-from-map">Select the location from the map</h3>
                            <div class="checkbox">
                                <label id="postlabel1">
                                    <input type="checkbox" required>I've read and accept the terms and conditions</label>
                            </div>


                            <input type="hidden" name="lat" id="lat">
                            <input type="hidden" name="lng" id="lng">


                            <button class="btn btn-default submit-button" type="submit" name="register">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6" id="postright">
                <div id="pac-card" class="pac-card">
                    <div>
                        <!-- <div id="title">
                            <h3>Autocomplete</h3>
                          </div> -->
                        <div id="type-selector" class="pac-controls">
                            <input type="radio" name="type" checked="checked" id="changetype-all">
                            <label for="changetype-all">All</label>

                            <input type="radio" name="type" id="changetype-establishment">
                            <label for="changetype-establishment">Establishments</label>

                            <input type="radio" name="type" id="changetype-address">
                            <label for="changetype-address">Addresses</label>

                            <input type="radio" name="type" id="changetype-geocode">
                            <label for="changetype-geocode">Geocodes</label>
                        </div>
                        <div id="strict-bounds-selector" class="pac-controls">
                            <input type="checkbox" id="use-strict-bounds" value="">
                            <label for="use-strict-bounds">Strict Bounds</label>
                        </div>
                    </div>
                    <div id="pac-container">
                        <input type="text" placeholder="Enter a location" id="pac-input">
                    </div>
                </div>
                <div id="map"></div>
                <div id="infowindow-content">
                  <img width="16" height="16" id="place-icon">
                  <span id="place-name" class="title">Text</span><br>
                  <span id="place-address">Text</span></div>
            </div>
        </div>
    </div>
    <footer id="post-footer">
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Smart<span> HouseRental</span></a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">Smart House Rental System© 2017 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@houserental.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>




    <script>

      function initMap() {

        var pos;
          var options = {
             zoom: 14,
             center: {lat:24.3636, lng:88.6241}
          }
          var map = new google.maps.Map(document.getElementById('map'), options);

          var marker = new google.maps.Marker({
              position:{
                  lat: 24.3636,
                  lng: 88.6241
              },
              map: map,
              draggable: true
          });

          //draggend event
          google.maps.event.addListener(marker, 'dragend', function() {
              // console.log(marker.getPosition().lat());
              // console.log(marker.getPosition().lng());

              var lat = marker.getPosition().lat();
              var lng = marker.getPosition().lng();

              $('#lat').val(lat);
              $('#lng').val(lng);
          });


        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        }
        else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

        //end of geolocation





        //autocomplete
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

//        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infoWindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infoWindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infoWindow.open(map, marker);


          var latitude = place.geometry.location.lat();
          var longitude = place.geometry.location.lng();
          var address = place.formatted_address;
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });


            // //marker
            // var marker = new google.maps.Marker({
            //     position:{
            //         lat: 24.3636,
            //         lng: 88.6241
            //     },
            //     map: map,
            //     draggable: true
            // });
            //
            // //draggend event
            // google.maps.event.addListener(marker, 'dragend', function() {
            //     console.log(marker.getPosition().lat());
            //     console.log(marker.getPosition().lng());
            // });
      }


        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

    </script>




    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF-htDFq8drkM93GDjuuWmiXbFqTuf1yU&libraries=places&callback=initMap" async defer></script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
