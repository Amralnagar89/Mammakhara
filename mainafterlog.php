<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <title>Mamma Mia restaurant</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">

    

        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">

  </head>

  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
        <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
                <div class="container">
                  <a class="navbar-brand" href="main.html">Mamma Mia</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                  </button>
          
                  <div class="collapse navbar-collapse" id="site-nav">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
                      <li class="nav-item"><a href="#section-specials" class="nav-link">Specials</a></li>
                      <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
                      <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
                      <li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
                      <li class="nav-item"><a href="#" class="nav-link"><?php echo $_SESSION["name1"]; ?></a></li>    
                      <li class="nav-item"><a href="selecttable.html" class="nav-link">In Restaurant</a></li>
      
                    </ul>
                  </div>
                </div>
                </li>
              </nav>

              <section class="site-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
                <div class="container">
                  <div class="row align-items-center justify-content-center text-center site-vh-100">
                    <div class="col-md-12">
                      <h1 class="site-heading site-animate mb-3">Welcome To Mamma Mia restaurant</h1>
                      <h2 class="h5 site-subheading mb-5 site-animate">Enjoy our classic italian recipes here with us!</h2>    
                      <p><a target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p>
                    </div>
                  </div>
                </div>
              </section>

              <section class="site-section" id="section-about">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-5 site-animate mb-5">
                          <h4 class="site-sub-title">Who are we?</h4>
                          <h2 class="site-primary-title display-4">Welcome to Mamma Mia Restaurant</h2>
                          <p>*Write text here*</p>
              
                          <p class="mb-4">*Write secondry text here*</p>
                          <p><a href="#" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
                          <img src="images/about_img_1.jpg" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </section>

                  <section class="site-section bg-light" id="section-specials">
                        <div class="container">
                          
                          <div class="row">
                            <div class="col-md-12 text-center mb-5 site-animate">
                              <h4 class="site-sub-title">Mamma Mia Specials!</h4>
                              <h2 class="display-4">Check out these amazing specials in our restaurant</h2>
                            </div>
                            <div class="col-md-12">
                              <div class="owl-carousel site-owl">
                  
                                <div class="item">
                                  <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                    <img src="images/offer_1.jpg" class="img-fluid">
                                    <div class="media-body p-md-5 p-4">
                                      <h5 class="text-primary">$19.50</h5>
                                      <h5 class="mt-0 h4">*Write name of special here*</h5>
                                      <p class="mb-4">*Write description here*</p>
                  
                                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                    </div>
                                  </div>
                                </div>
                  
                                <div class="item">
                                  <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                    <img src="images/offer_2.jpg" class="img-fluid">
                                    <div class="media-body p-md-5 p-4">
                                      <h5 class="text-primary">$29.50</h5>
                                      <h5 class="mt-0 h4">*Write name of special here*</h5>
                                      <p class="mb-4">*Write description here*</p>
                  
                                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="item">
                                  <div class="media d-block mb-4 text-center site-media site-animate border-0">
                                    <img src="images/offer_3.jpg" class="img-fluid">
                                    <div class="media-body p-md-5 p-4">
                                      <h5 class="text-primary">$11.50</h5>
                                      <h5 class="mt-0 h4">*Write name of special here*</h5>
                                      <p class="mb-4">*Write description here*</p>
                  
                                      <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Order Now!</a></p>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div> 
                          </div>
                        </div>
                      </section>

                      <section class="site-section" id="section-menu">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12 text-center mb-5 site-animate">
                                  <h2 class="display-4">Delicious Menu</h2>
                                  <div class="row justify-content-center">
                                    <div class="col-md-7">
                                      <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    </div>
                                  </div>
                                </div>
                      
                                <div class="col-md-12 text-center">
                      
                                  <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                                    <li class="nav-item site-animate">
                                      <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</a>
                                    </li>
                                    <li class="nav-item site-animate">
                                      <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Lunch</a>
                                    </li>
                                    <li class="nav-item site-animate">
                                      <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
                                    </li>
                                  </ul>
                      
                                  <div class="tab-content text-left">
                                    <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                                      <div class="row">
                                        <div class="col-md-6 site-animate">
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Salted Fried Chicken</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$35.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$24.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$14.50</h6>
                                            </div>
                                          </div>
                      
                                        </div>
                                        <div class="col-md-6 site-animate">
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$35.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Salted Fried Chicken</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$12.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$18.50</h6>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                                      <div class="row">
                                        <div class="col-md-6 site-animate">
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$14.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Salted Fried Chicken</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$35.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$24.50</h6>
                                            </div>
                                          </div>
                      
                                        </div>
                                        <div class="col-md-6 site-animate">
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$18.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$35.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Salted Fried Chicken</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$12.50</h6>
                                            </div>
                                          </div>
                      
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                                      <div class="row">
                                        <div class="col-md-6 site-animate">
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$24.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Salted Fried Chicken</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$35.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$14.50</h6>
                                            </div>
                                          </div>
                      
                                        </div>
                                        <div class="col-md-6 site-animate">
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Fried Potato w/ Garlic</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$18.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_2.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Italian Sauce Mushroom</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$35.50</h6>
                                            </div>
                                          </div>
                      
                                          <div class="media menu-item">
                                            <img class="mr-3" src="images/menu_1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                                            <div class="media-body">
                                              <h5 class="mt-0">Salted Fried Chicken</h5>
                                              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                              <h6 class="text-primary menu-price">$12.50</h6>
                                            </div>
                                          </div>
                      
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                      
                                </div>
                              </div>
                            </div>
                          </section>

                          

                              <section class="site-section bg-light" id="section-contact">
                                    <div class="container">
                                      <div class="row">
                              
                                        <div class="col-md-12 text-center mb-5 site-animate">
                                          <h2 class="display-4">Get In Touch</h2>
                                          <div class="row justify-content-center">
                                            <div class="col-md-7">
                                              <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            </div>
                                          </div>
                                        </div>
                              
                                        <div class="col-md-7 mb-5 site-animate">
                                          <form action="" method="post">
                                            <div class="form-group">
                                              <label for="name" class="sr-only">Name</label>
                                              <input type="text" class="form-control" id="name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                              <label for="email" class="sr-only">Email</label>
                                              <input type="text" class="form-control" id="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                              <label for="message" class="sr-only">Message</label>
                                              <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
                                            </div>
                                            <div class="form-group">
                                              <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
                                            </div>
                                          </form>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4 site-animate">
                                          <p><img src="images/about_img_1.jpg" alt="" class="img-fluid"></p>
                                          <p class="text-black">
                                            Address: <br> 121 Street, Melbourne Victoria <br> 3000 Australia <br> <br>
                                            Phone: <br> 90 987 65 44 <br> <br>
                                            Email: <br> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                          </p>
                              
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </section>
                                  <footer class="site-footer site-bg-dark site-section">
                                        <div class="container">
                                          <div class="row mb-5">
                                            <div class="col-md-12">
                                              <div class="row">
                                                <div class="col-md-4 site-animate">
                                                  <h2 class="site-heading-2">About Us</h2>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-3 site-animate">
                                                  <div class="site-footer-widget mb-4">
                                                    <h2 class="site-heading-2">The Restaurant</h2>
                                                    <ul class="list-unstyled">
                                                      <li><a href="#section-about" class="py-2 d-block">About Us</a></li>
                                                      <li><a href="#section-specials" class="py-2 d-block">Specials</a></li>
                                                      <li><a href="#section-menu" class="py-2 d-block">Menu</a></li>
                                                      <li><a href="#section-contact" class="py-2 d-block">Contact</a></li>
                                                    </ul>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                           
                                          </div>
                                          <div class="row site-animate">
                                             <div class="col-md-12 text-center">
                                              <div class="site-footer-widget mb-4">
                                                <ul class="site-footer-social list-unstyled ">
                                                  <li class="site-animate"><a href="https://www.twitter.com/?lang=en"><span class="icon-twitter"></span></a></li>
                                                  <li class="site-animate"><a href="https://www.facebook.com"><span class="icon-facebook"></span></a></li>
                                                  <li class="site-animate"><a href="https://www.instagram.com"><span class="icon-instagram"></span></a></li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </footer>


                                      <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                              <div class="modal-content">
                                                <div class="modal-body">
                                                  <div class="row">
                                                    <div class="col-lg-12">
                                                      <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
                                                    </div>
                                                    <div class="col-lg-12 p-5">
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <small>CLOSE </small><span aria-hidden="true">&times;</span>
                                                      </button>
                                                      <h1 class="mb-4">Reserve A Table</h1>  
                                                      <form action="#" method="post">
                                                        <div class="row">
                                                          <div class="col-md-6 form-group">
                                                            <label for="m_fname">First Name</label>
                                                            <input type="text" class="form-control" id="m_fname"/required/>
                                                          </div>
                                                          <div class="col-md-6 form-group">
                                                            <label for="m_lname">Last Name</label>
                                                            <input type="text" class="form-control" id="m_lname"/required/>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-12 form-group">
                                                            <label for="m_email">Email</label>
                                                            <input type="email" class="form-control" id="m_email"/required/>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-6 form-group">
                                                            <label for="m_people">How Many People</label>
                                                            <select name="" id="m_people" class="form-control"/required/>
                                                              <option value="1">1 People</option>
                                                              <option value="2">2 People</option>
                                                              <option value="3">3 People</option>
                                                              <option value="4+">4+ People</option>
                                                            </select>
                                                          </div>
                                                          <div class="col-md-6 form-group">
                                                            <label for="m_phone">Phone</label>
                                                            <input type="text" class="form-control" id="m_phone"/required/>
                                                          </div>
                                                        </div>
                                      
                                                        <div class="row">
                                                          <div class="col-md-6 form-group">
                                                            <label for="m_date">Date</label>
                                                            <input type="text" class="form-control" id="m_date"/required/>
                                                          </div>
                                                          <div class="col-md-6 form-group">
                                                            <label for="m_time">Time</label>
                                                            <input type="text" class="form-control" id="m_time"/required/>
                                                          </div>
                                                        </div>
                                      
                                                    
                                                        <div class="row">
                                                          <div class="col-md-12 form-group">
                                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                                                          </div>
                                                        </div>
                                      
                                                      </form>
                                                    </div>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>




                  <script src="js/jquery.min.js"></script>
                  <script src="js/popper.min.js"></script>
                  <script src="js/bootstrap.min.js"></script>
                  <script src="js/jquery.easing.1.3.js"></script>
                  <script src="js/jquery.waypoints.min.js"></script>
                  <script src="js/owl.carousel.min.js"></script>
                  <script src="js/jquery.magnific-popup.min.js"></script>
              
                  <script src="js/bootstrap-datepicker.js"></script>
                  <script src="js/jquery.timepicker.min.js"></script>
                  
                  <script src="js/jquery.animateNumber.min.js"></script>
                  <script src="js/main.js"></script>

  </body>