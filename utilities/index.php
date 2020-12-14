
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudle | Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div id="loginPopupdiv" class="overlay-background">
        <div class="main-container">
            <section class="greeting-section">
               
<img src="../graphicResources/cancel.svg" alt="" srcset="" id="cancel" onclick="closeLogin()">



                <h1 id="greeting">Hello Old Friend</h1>
                <h3 id="welcome">Welcome Back to </h3>
                <img src="../graphicResources/logo.svg" alt="" srcset="" id="logo">
                <button id="signup/login" onclick="signinUpToggler()">signup</button>
               <img src="../graphicResources/character 3.svg" alt="" srcset="" id="svg">
            </section>
            
            <section class="form-container" id="f">
                <section class="sign-up-form slide-out" id="s">
                <h1>Sign Up</h1>
                    <form action="http://localhost/smoothle/utilities/register.php" method="POST">
                        
                        
                        <input type="text" name="first_name" placeholder="first_name">
                        <input type="text" name="last_name" placeholder="last_name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="text" name="contact" placeholder="+254712345678">
                        <input type="password" name="password" id="password" placeholder="Password">
                        <input type="password" id="confirm-password" placeholder="Password">
                        <button type="submit" class="submit-button" id="signup">Sign Up</button>
                    </form>
                </section>
                <section class="login-form slide-in" id="l">
                <h1>login</H1>
                       
                    <form action="login.php" method="POST">
                    <h6>Login as:</h6>
                        <label for="customer">customer</label>
                        <input type="radio" name="typeOfUser" value="customer"  class="radio" id="customer" required>
                        <label for="employee">employee</label>
                        <input type="radio" name="typeOfUser" value="Employee" class="radio" id="employee" required>
                        
                        
                        <input type="email" name="email" placeholder="Email" id="lemail" required>
                       
                        <input type="password" name="password" id="lpassword" placeholder="password" required>
                        <button type="submit" class="submit-button" id="login">Sign in</button>

                    </form>
                </section>
            </section>
        </div>
    </div>
    
    <div class="first-division">
      <?php
      include '..\Customer\main-nav.php';
    
       ?>
        <div class="promptArea">
            <h3>Dont know what to drink?</h3>
            <h1>Order A Healthy Smoothie !</h1>
            <button class="submit-button">Check out Menu</button>
        </div>


    </div>
    
    <div class="advertise-section">
        
        <div class="cardBox">
            <a href=""><i class="fa fa-bell" aria-hidden="true"></i></a>
            <h3>Truly Tasteful</h3>
            <h5>You might think that there couldn't be anything easier than a carbonated– but you'd be wrong to assume <br> it's as simple as that.</h5>

        </div>
        <div class="cardBox">
            <a href=""><i class="fa fa-map-marker"></i></a>
            <h3>8 cities</h3>
            <h5>Outside of our restaurants, fans can access Smoothle through our mobile app, desktop on Ta.co and delivery through our partnership with Grubhub. Taco Bell became the first QSR to launch a mobile app in Kenya. restaurants for both drive-thru and dining orders. In 2016, we were named as one of Fast Company’s Top 10 Most Innovative Companies in the World.</h5>
        </div>
        <div class="cardBox">
            <a href=""><i class="fa fa-child"></i></a>
            <h3>healthy</h3>
            <h5>smoothies are the perfect meal or snack no matter what the weather. It is never too cold to have an awesome smoothie! Since smoothies are such a tasty way to pack in a ton of nutrients, I put on a big sweater and happily drink them even when the temps are frigid.</h5>
        </div>
        <div class="cardBox">
            <a href=""><i class="fa fa-truck"></i></a>
            <h3>we deliver</h3>
            <h5>There's nothing standard when it comes to doing business in New York City. To meet the fast-paced lifestyle of our urban customers, we created a new and quicker way to serve them by using iPads to take orders in line. We call it "upstream ordering."</h5>
        </div>

    </div>
    
    <div class="fixed"><div class="expand"></div>
    <section class="page-intro-text">

    <h1>
                About the hotel
                </h1>
                    <p>Stepping into The Connaught feels a little like entering another world. Elegant, yet effortless. Set apart from the bustle of London, yet immersed in its culture. Dedicated to fine art, as well as the finer things in life.<br><br>Every guest receives our world-famous levels of service. Leave the bags to your butler and take in your surroundings. As you ascend the historic staircase, let The Connaught work its magic. Your wish is our command.</p>
                
    </section>
    <div class="fixed"><div class="expand"></div>
    <section class=" trust-indicators">
        <h2>In Partnership With </h2>
        <div class="partners-list">
            <img src="../graphicResources/partners/24hour.png" alt="">
            <img src="../graphicResources/partners/crunch.svg" alt="">
            <img src="../graphicResources/partners/partneres.svg" alt="" srcset="">
            <img src="../graphicResources/partners/gray.svg" alt="">
             <img src="../graphicResources/partners/planet.webp" alt="">
             <img src="../graphicResources/partners/peloton.png" alt="">
        </div>

    </section>
<footer id="contact">
    <div class="contact">
        <h6>contact us</h6>
        <p class="one">Hi, we are always open for cooperation and suggestions,<br> contact us in one of the ways below</p>
        <div class="details">
          <div>
            <p>phone number</p>
            <span><a href="">+1 (800)060-07-30</a></span>
          </div> 
          <div> 
            <p>email address</p>
            <span><a href=""> mohamed@smoothle.com</a></span>
          </div>
          <div>
            <p>our location</p>
            <span>751 Fake Street,New York<br> 10021 USA</span>
          </div> 
          <div>
            <p>working hours</p>
            <span>Mon-Sat 10.00am-7.00pm</span>
          </div> 
        </div>  
      </div>
      <div class="information">
        <h6>information</h6>
        <p>about us</p>
        <p>delivery information</p>
        <p>privacy policy</p>
        <p>brands</p>
        <p>contact us</p>
        <p>returns</p>
        <p>site map</p>
      </div>
      <div class="account">
        <h6>my account</h6>
        <p>store location</p>
        <p>order history</p>
        <p>wish list</p>
        <p>newsletter</p>
        <p>special offers</p>
        <p>gift certificates</p>
        <p>affiliate</p>
      </div>
      <div class="newsletter">
        <h6>newsletter</h6>
       
        <p>follow us on social networks</p>
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-youtube"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fas fa-rss"></i></a>
      </div>
    </footer>
    
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>

</body>

</html>