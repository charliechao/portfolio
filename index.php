<?php include "includes/formcheck.php"; ?>


 <!DOCTYPE html>

    <head>
  <?php include "includes/head.php";?>
        
    </head>

    <body id="skrollr-body" data-spy="scroll" data-target=".navbarspy" data-offset="80">

       <!-- facebook API -->
  <script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  
  <!-- Navbar -->
  <?php include "includes/nav.php";?>  

        <!-- Landing Page -->
  <?php include "includes/landingpage.php";?> <br> 

      <!-- profile continues -->
    <div class="container">

      <div class="row" id="aboutme">
          <!-- about me section -->
    <?php include "includes/aboutme.php";?>
      </div> <br>

         <!-- works section -->
    <div class="row" id="works">     
    <?php include "includes/works.php";?>
    </div> <br>

      <!-- Skills -->
      <div class="row" id="skills">
      <?php include "includes/skills.php";?>
      </div> <br>

      <!-- contact form and api google map -->
      <div class="row" id="contacts">
      <!-- Contact form -->
      <?php include "includes/contactform.php" ;?>

      <!-- Google Api Map -->
       <?php include "includes/apimap.php" ;?> 
      </div> <br>

  </div> <!-- end of container    --> 

  <!-- footer -->
  <?php include "includes/footer.php" ;?>     

 <!-- Scripts with analytics -->
    <?php include "includes/scriptswithanalytics.php" ;?>

     
    </body>
</html>
