<?php 
include('head.php');
include('navbar.php');
?>    
<!---------------------------banner Section----------------------------------->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="com-md-6">
                <p id="ved" class="text middle"> 
                    <span>V</span>
                    <span>E</span>
                    <span>D</span>
                    <span class="hidden">ACADEMY</span>

                </p>
                <p class="para1">YOU HAVE A BRIGHT FUTURE
                </p>
                        <div class="enquiry-btn text-center">   
                    <a href="#contact" class="btn-3" target="_blank" rel="nofollow" class="hvr-sweep-to-right"> Enquire Now <i class="fa fa-location-arrow"></i><div class="eff-1"></div></a>
                        </div>
            </div>
            <div id="ban-img" class="col-md-6 ml-auto">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/coaching.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/creative.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                    <img class="d-block w-100" src="img/classroom.jpg" alt="third slide">
                                  </div>
                                  <div class="carousel-item">
                                        <img class="d-block w-100" src="img/mind2.jpg" alt="third slide">
                                      </div>
                                      
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
            </div>
        </div>
    </div>
</section>
<section id="services">
    
    <div class="container text-center">
            <p id="ser-title" class="text-center">What We Do ?</p>
        <div class="row text-center">
            <div id="ser-card" class="col-md-3 ml-auto">
                <img id="ser-g1" src="img/growth.jpg" alt="image">
                <h4 class="h4">Growth</h4>
                <p class="ser">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus eos totam voluptates, placeat dignissimos pariatur sit hic molestiae sunt? Soluta fugiat dolor maxime nam odit minus quam architecto repudiandae in.
                </p>
            </div>
            <div id="ser-card" class="col-md-3">
                    <img id="ser-g1" src="img/growth.jpg" alt="image">
                    <h4 class="h4">Online Branding</h4>
                    <p class="ser">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus eos totam voluptates, placeat dignissimos pariatur sit hic molestiae sunt? Soluta fugiat dolor maxime nam odit minus quam architecto repudiandae in.
                    </p>
                </div>
                <div id="ser-card" class="col-md-3">
                        <img id="ser-g1" src="img/growth.jpg" alt="image">
                        <h4 class="h4">Animated Ads</h4>
                        <p class="ser">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus eos totam voluptates, placeat dignissimos pariatur sit hic molestiae sunt? Soluta fugiat dolor maxime nam odit minus quam architecto repudiandae in.
                        </p>
                    </div>
        </div>
    </div>

</section>
<!---------------------About us----------------------------->
<section id="aboutus">
        <p id="abt-title" class="text-center">Why Choose Us ?</p>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="abt-p">Why we're different</p>
            <ul id="abt-ul">
                <li>Believe in doing business with honestly</li>
                <li>Believe in doing business with honestly</li>
                <li>Believe in doing business with honestly</li>
                <li>Believe in doing business with honestly</li>
                <li>Believe in doing business with honestly</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img id="abt-img" src="img/classroom.jpg" alt="image">
        </div>
    </div>
</div>
</section>
<section id="contact">
        <div class="section-content">
            <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
        </div>
        <div class="contact-section">
        <div class="container">
            <form id="myform" method="POST" action="enquirydata.php">
                <div class="row">
                <div class="col-md-6 form-line">
                      <div class="form-group">
                          <label for="exampleInputUsername">Your name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder=" Enter Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Email Address</label>
                        <input type="email" class="form-control" id="emailid" name="emailid" placeholder=" Enter Email id" required>
                      </div>	
                      <div class="form-group">
                        <label for="telephone">Mobile No.</label>
                        <input type="tel" class="form-control" id="phoneno" name="phoneno" placeholder=" Enter 10-digit mobile no."required>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for ="description"> Message</label>
                           <textarea  class="form-control" id="msg" name="msg" placeholder="Enter Your Message"required></textarea>
                      </div>
                      <div>
                            <input type="submit" id="submit" name="submit" class="btn btn-default submit" value="Send Message">
                      </div>
                      
                </div>
            </div>
            </form>
        </div>
       
    </section>
    <section id="location">
        <div class="container">
        <h1 id="loc" class="text-center">OUR LOCATION</h1>
            <div class="row">

                <div class="col-md-12">
                    
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.2088055349955!2d73.85312961420405!3d18.519463974043248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c065144d8edf%3A0x3703b8095866c54b!2sShaniwar%20Wada!5e0!3m2!1sen!2sin!4v1570855815962!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
<footer>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                            <p><h2>About Us</h2></p>
                    <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Maiores quam officia voluptatibus. At odio ipsum voluptates 
                    </p>
                </div>
                <div class="col-md-4">
                    <p><h2>Address  </h2></p>
                    <p><i class="fa fa-map-marker"></i> VED Educational Acadmey ,Pune</p>
                    <p><i class="fa fa-mobile"></i> +91-1234567890</p>
                    <p><i class="fa fa-envelope-o"></i> abc@gmail.com</p>

                </div>
                    <div class="col-md-4">
                            <p>
                                <h4 id="sb">Subscribe Now</h4>
                                <input type="email" class="form-control" placeholder="Your Email Address">
                                <button id="btn-sb" class="btn btn-primary">Subscribe</button>
                            </p>
                        </div>                            
            </div>
        </div>
        <p id="copy" class="text-center">&copy Copyrights Reserved by Ved Educational Acadmey</p>
    </section>
</footer>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script>
$(document).ready(function(){
    var scroll = new SmoothScroll('a[href*="#"]');
    var form = $('#myform');
    $('#submit').click(function(){
        $.ajax({
                url: form.attr("action"),
                type: 'post',
                data: $("#myform input").serialize(),
                success: function(data){
                    console.log(data);
                }
        });
    });

});

</script>
</body>
</html>