<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bangku Taman</title>
<!--
Pipeline
http://www.templatemo.com/tm-496-pipeline
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">   <!-- Google web font "Open Sans", https://fonts.google.com/ -->
    <link rel="stylesheet" href="{{ asset('font-awesome-4.6.3/css/font-awesome.min.css') }}">           <!-- Font Awesome, http://fontawesome.io/ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">                                 <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">                              <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>

      <body>
        <div class="container-fluid">

            <section id="welcome" class="tm-content-box tm-banner margin-b-10">
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Bangku Taman</h1>                        
                </div>                    
            </section>

            <div class="tm-body">
                <div class="tm-sidebar">
                    <nav class="tm-main-nav">
                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item"><a href="#about" class="tm-nav-item-link tm-button">
                                <i class="fa fa-book tm-nav-fa"></i>Penjelasan </a>
                            </li>
                            <li class="tm-nav-item"><a href="#services" class="tm-nav-item-link tm-button">
                                <i class="fa fa-map tm-nav-fa"></i>Peta Lokal</a>
                            </li>
                            <li class="tm-nav-item"><a href="#gallery" class="tm-nav-item-link tm-button">
                                <i class="fa fa-image tm-nav-fa"></i>Galeri Foto</a>
                            </li>
                            
                            <!-- <li class="tm-nav-item"><a href="#about" class="tm-nav-item-link tm-button">
                                <i class="fa fa-sitemap tm-nav-fa"></i>About Company</a>
                            </li> -->
                            <!-- <li class="tm-nav-item"><a href="#contact" class="tm-nav-item-link tm-button">
                                <i class="fa fa-envelope-o tm-nav-fa"></i>Contact Us</a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
                
                <div class="tm-main-content">
                    
                    <div class="tm-content-box tm-content-box-home">                        
                        <img src="{{ asset('assets/img/objek/bangku.jpg') }}" alt="Image 1" class="img-fluid tm-welcome-img">                       
                   
                        
                    

                    <div id="#" class="tm-content-box tm-gray-bg tm-services">

                      <!-- <div class="tm-services-img-container"> -->
                          <!-- <img src="{{ asset('assets/img/objek/asking.jpg') }}" alt="Green Field" class="img-fluid tm-services-img">     -->
                      <!-- </div>  -->
                          
                      <div id="about" class="tm-content-box">
                        <div class="tm-box-pad tm-bordered-box">
                            <h2 class="tm-section-title">Bangku Taman</h2>
                            <p>Terdapat 3 Bangku Taman yang di sediakan oleh pihak alif stone yang berfungsi untuk tempat duduk pengunjung luar atau tamu hotel untuk bersantai. Bisa juga digunakan sebagai bangku untuk acara apa saja, seperti untuk BBQ , familily gathering serba guna, camping dan lain - lain.</p>
                            <!-- <a href="#" class="tm-button tm-button-normal">Read More</a> -->
                        </div> 
                        
                        </div>
                    </div>
                    
                    <div id="services" class="tm-content-box tm-light-bg tm-services">

                    <div class="tm-services-img-container">
                        <img src="{{ asset('assets/img/p.jpg') }}" alt="Green Field" class="img-fluid tm-services-img">    
                    </div> 

                    <div class="tm-services-img-container">
                        <img src="{{ asset('assets/img/450x900-01.jpg') }}" alt="Green Field" class="img-fluid tm-services-img">    
                    </div> 
                        
                    <!-- <div class="tm-box-pad tm-services-description-container"> -->
                        <!-- <h2 class="tm-section-title">Peta Lokal</h2> -->
                        <!-- <p class="tm-section-description">Pipeline Bootstrap 4.0 Template is provided by <a href="http://templatemo.com" target="_parent">templatemo</a> website. You may use this HTML CSS template and also share it to friends. Thank you for visiting our site.</p>
                    <p class="tm-section-description">Duis vel elit eu eros dapibus vestibulum vel vel nibh. Morbi efficitur erat nulla, id tempor mi accumsan sed. Suspendisse sollicitudin condimentum interdum. <span class="tm-blue-text">BG #F4F4F4 Button BG #936</span> <span class="tm-red-text">Button Hover BG #C33</span></p> 
                        <p class="tm-section-description">Nulla id ornare eros, at efficitur risus. Fusce sodales lorem magna, id tempor justo mattis eget. Aenean accumsan semper commodo. Aliquam ante sapien, tincidunt sed vaius et, luctus condimentum sapien.</p>    -->
                    <!-- </div>                                               -->

                    </div>

                    <div id="#" class="tm-content-box tm-gray-bg tm-services">
                        
                        <div id="about" class="tm-content-box">
                        <div class="tm-box-pad tm-bordered-box">
                            <p>Foto - foto di bawah bisa anda tekan. </p>
                        </div> 
                        
                        </div>
                        </div>
    
                          <div id="gallery" class="tm-content-box">                        
                            <div class="grid tm-gallery">
                                <figure class="effect-bubba">
                                    <img src="{{ asset('assets/img/bangku/1.jpg') }}" alt="Image 8" class="img-fluid">
                                    <figcaption>
                                        <a href="{{ asset('assets/img/bangku/1full.jpg') }}">View more</a>
                                    </figcaption>
                                </figure>
    
                                <figure class="effect-bubba">
                                    <img src="{{ asset('assets/img/bangku/2.jpg') }}" alt="Image 7" class="img-fluid">
                                    <figcaption>
                                        <a href="{{ asset('assets/img/bangku/2full.jpg') }}">View more</a>
                                    </figcaption>
                                </figure>
    
                                <figure class="effect-bubba">
                                    <img src="{{ asset('assets/img/bangku/3.jpg') }}" alt="Image 5" class="img-fluid">
                                    <figcaption>
                                        <a href="{{ asset('assets/img/bangku/3full.jpg') }}">View more</a>
                                    </figcaption>
                                </figure>
    
                                <figure class="effect-bubba">
                                    <img src="{{ asset('assets/img/bangku/4.jpg') }}" alt="Image 3" class="img-fluid">
                                    <figcaption>
                                        <a href="{{ asset('assets/img/bangku/4full.jpg') }}">View more</a>
                                    </figcaption>
                                </figure>
    
                                <figure class="effect-bubba">
                                    <img src="{{ asset('assets/img/bangku/5.jpg') }}" alt="Image 2" class="img-fluid">
                                    <figcaption>
                                        <a href="{{ asset('assets/img/bangku/5full.jpg') }}">View more</a>
                                    </figcaption>
                                </figure>
    
                                <figure class="effect-bubba">
                                    <img src="{{ asset('assets/img/bangku/6.jpg') }}" alt="Image 4" class="img-fluid">
                                    <figcaption>
                                        <a href="{{ asset('assets/img/bangku/6full.jpg') }}">View more</a>
                                    </figcaption>
                                </figure>                                
                            </div>
                        </div>

                    <!-- slider -->
                    

                    <section id="contact" class="tm-content-box">

                        <!-- <div class="tm-flex">
                            <div class="tm-contact-left-half tm-gray-bg">
                                <div class="tm-contact-inner-pad">
                                    <h2 class="tm-section-title">Contact Us</h2>
                                    <form action="#contact" method="post" class="contact-form">

                                        <div class="form-group">
                                            <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-xs-right tm-button tm-button-normal">Submit</button>

                                    </form>
                                </div>                                
                            </div>

                            <div class="tm-contact-right-half tm-purple-bg">
                                <div class="tm-address-box">
                                    <h2 class="tm-section-title">Our Location</h2>
                                    <address>110 tellus ut fringilla ornare,<br>
                                             velit arcu rutrum metus<br>
                                             id elementum 10990
                                    </address>    
                                </div>                                
                                <div id="google-map"></div>
                            </div>
                        </div> -->
                        
                    </section>  

                    <!-- <footer class="tm-footer">
                        <p class="text-xs-center">Copyright &copy; 2016 Your Company | Design: <a href="http://templatemo.com" target="_parent">Templatemo</a></p>
                    </footer> -->

                </div>
            </div>             
        </div>
        
        <!-- load JS files -->
        
        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
        <!-- Templatemo scripts -->
        <script>  

        /* Google map
        ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(37.769725, -122.462154),
                scrollwheel: false
            };
        
            map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
            });
        
            google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
            });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        } 

        function setNavbar() {
            if ($(document).scrollTop() > 160) {
                $('.tm-sidebar').addClass('sticky');
            } else {
                $('.tm-sidebar').removeClass('sticky');
            }
        }                   
    
        $(document).ready(function(){
            
            // Single page nav
            $('.tm-main-nav').singlePageNav({
                'currentClass' : "active",
                offset : 20
            });

            // Detect window scroll and change navbar
            setNavbar();
            
            $(window).scroll(function() {
              setNavbar();
            });

            // Magnific pop up
            $('.tm-gallery').magnificPopup({
              delegate: 'a', // child items selector, by clicking on it popup will open
              type: 'image',
              gallery: {enabled:true}
              // other options
            });

            // Google Map
            loadGoogleMap();            
        });
    
        </script>             

    </body>
    </html>