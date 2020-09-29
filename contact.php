<!doctype html>
<html lang="en">
  <head><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171248095-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171248095-1');
</script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="index-styles.css" type="text/css">
 <!--remove this one-->
    <link rel="stylesheet" href="index-mobile-styles.css" type="text/css">
    <!--investment page stylesheet-->
    <link rel="stylesheet" href="css/contact-style.css" type="text/css"> 

    <!--meta info-->
    <title>Bains Horticulture | Investment | Orchard Managment</title>
    <meta name="description" content="Bains Horticulture is here to help the Investers to invest in right Kiwifruit Orchards & the Growers to easly manage their Kiwifruit Orchards to achieve maximum Yield. Buy G3 on Bruno and M33 on Bruno from our nursery">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
          $("form").submit(function(event) {
              event.preventDefault();
              var name = $("#mail-name").val(); 
              var email = $("#mail-email").val(); 
              var phoneNumber = $("#mail-phone-number").val(); 
              var company = $("#mail-company").val(); 
              var reason = $("#reason").val();
              var message = $("#message").val(); 
              var submit = $("#mail-submit").val();  
            
              $(".form-message").load("mail.php",{
                  name: name,
                  email: email,
                  phoneNumber: phoneNumber,
                  company: company,
                  reason: reason, 
                  message: message,
                  submit: submit
              });
          })
      })
      
      </script>
  </head>
  <body>
    <div class="overflow">

      <div class="navbar-background">
        <nav class="bains-navbar">
          <!--navbar image-->
          <div class="navbar-img"> 
            <a href="index.html">
              <img src="images/Bains-Hort-Logo.png" alt="logo">
            </a>
          </div>
          <!--navbar menu-->
          <div class="navbar-menu">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="investment.html">Investment</a></li>
              <li><a href="development.html">Development</a></li>
              <li><a href="nursery.html">Nursery</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          <!--social-media-->
          <div class="navbar-social-media">

            <a href="employment.html" class="red-button button-style">
              Employment
            </a>
          </div>
        </nav>
      </div>
       <!---mobile navbar-->
      <nav class="navbar mobile-navbar navbar-expand-lg navbar-light dark-yellow-background">
        <a class="navbar-brand" href="index.html">
          <img src="images/Bains-Hort-Logo.png" alt="logo" width="70px" height="auto">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="investment.html">Investment</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="development.html" tabindex="-1" aria-disabled="true">Development</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nursery.html" tabindex="-1" aria-disabled="true">Nursery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html" tabindex="-1" aria-disabled="true">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employment.html" tabindex="-1" aria-disabled="true">Employment</a>
            </li>
          </ul>
         
        </div>
      </nav>

      <!--hero section-->
      <div class="hero-section" id="hero-section">
        <div class="hero-container"> 
            <div class="background-overlay"></div>
            <h1 class="hero-section-heading center-align bold white-font center-align">
                Contact Us
            </h1>
            <h2 class="section-subheading white-font light center-align">
                Contact us at Bains Horticulture for additional information 
                regarding the various ways to invest in Kiwifruit orchard opportunities & 
                Develop Orchards.
            </h2>
        </div>
      </div>

      <!--contact us form-->
      <div class="form-section">
          <div class="form-container">
              <form action="php/form-processor.php" method="POST" class="form">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="mail-name" name="name" placeholder="John Doe">
                   
                  <label for="email">Email</label>
                  <input type="email" id="mail-email" name="email" placeholder="example@mail.com">

                  <label for="phone-number">Phone Number</label>
                  <input type="number" id="mail-phone-number" name="phone-number">

                  <label for="company">Company</label>
                  <input type="text" id="mail-company" name="company" placeholder="Example Ltd.">

                
                  <label for="reason-for-contacting">Reason For Contacting</label>
                  <select class="form-control form-control-lg" name="reason" id="reason">
                    <option value="investment">Investment Opportunities</option>
                    <option value="develop">Development</option>
                    <option value="lease">Lease</option>
                    <option value="harvesting">Harvesting</option>
                    <option value="employment">Employment</option>
                  </select>

                  <label for="message">Message</label>
                  <textarea id="message" name="message" placeholder="Write your message here..." rows="3" cols="50"></textarea>

                  <button class="red-button button-style" id="mail-submit" type="submit"  name="submit" > Send e-mail</button>
                  <p class="form-message"></p>
              </form>
          </div>
        </div>

       

      <!--footer------------------------------------------------>
      <div class="footer-section grey-background" id="footer-section">
        <div class="footer-container">
          <div class="quick-links">
            <p class="paragraph bold dark-yellow-font">Quick Links</p>
            <div class="anchor-links-footer">
                <a href="investment.html">Invest In Kiwifruit</a>
                <a href="development.html">Develop Orchards</a>
                <a href="nursery.html">Buy Plants</a>
                <a href="about.html">About Us</a>
                <a href="https://employment.bainshorticulture.co.nz/" target="_blank">Job Vacancy</a>
                <a href="portfolio.html">Portfolio</a>
              </div>
          </div>

          <div class="more-information">
            <p class="paragraph bold dark-yellow-font">
              More Information
            </p>
            <div class="anchor-links-footer">
                <a href="development.html#technology-section">Our Technology</a>                <a href="blogs.html">Blogs</a>
                <a href="pdf/privacy-policy.pdf" target="_blank">Privacy Policy</a>
                <a href="pdf/terms-conditions.pdf" target="_blank">Terms & Conditions</a>
                <a href="#">FAQ's</a>
            </div>
          </div>

          <div class="contact">
            <p class="paragraph bold dark-yellow-font">
              Contact
            </p>
            <div class="contact-content-section anchor-links-footer">
              <div>
                <a href="tel:+64278202011">
                  <div class="background"></div>
                  <object data="svg/phone.svg" alt="phone-icon"></object>
                  <span>027 820 2011</span>
                </a>
                <a href="mailto:info@bainshorticulture.co.nz">
                  <div class="background"></div>
                  <object data="svg/mail.svg" alt="phone-icon"></object>
                  <span>info@bainshorticulture.co.nz</span>
                </a>
                <a href="#">
                  <div class="background"></div>
                  <object data="svg/location.svg" alt="phone-icon"></object>
                  <span>10A Oxford St., Te Puke, New Zealand 3119
                </a>
              </div>
              <div class="footer-social-media"> 
                <p class="paragraph bold dark-yellow-font">
                  Follow Us
                </p>
                <a href="tel:+64278202011">
                  <div class="background"></div>
                  <img src="svg/facebook-footer.svg" alt="phone-icon"></img>
                  
                </a>
                <a href="mailto:info@bainshorticulture.co.nz">
                  <div class="background"></div>
                  <img src="svg/instagram-sketch.svg" alt="phone-icon"></img>
                  
                </a>
                <a href="#">
                  <div class="background"></div>
                  <img src="svg/linkedin.svg" alt="phone-icon"></img>
                </a>

              </div>
            </div>
          </div>




        </div>
          
      </div>
      <!--copyright-->
      <div class="copyright-section">
        <div class="copyright-container">
          <a href="#">Copyright © Bains Hort Group Limited&nbsp;|&nbsp; </a>
          <a href="https://webduel.co.nz" rel="nofollow">Developed By Web<span>DUEL</span></a>
        </div>
      </div>
      
    </div>
      

      
   
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="main.js"></script>
   
  </body>
</html>