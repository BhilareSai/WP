<?php

require 'con.php';
$sql = "SELECT * FROM Blogs ";

$blogData = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="blog.css">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://magnifywellness.org/blog.html" />
  <meta name="description" content="Learn more about mental health and Magnify Wellness through our blog." />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./navbar/navbar.css">
  <link rel="stylesheet" href="./footer/footer.css">
  <link rel="stylesheet" href="assets/css/h1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" href="./home-assets/logo.png" />

  <!-- Canonical link -->
  <link rel="canonical" href="https://magnifywellness.org/blog.html">

  <title>Blog</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DHMLKFJKBE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-DHMLKFJKBE');
  </script>
  <!-- google adsense script that lets it put ads wherever it thinks it's fine on the page -->
  <script data-ad-client="ca-pub-8468284461769741" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta name="keywords" content="Mental Health Current Events, Health Advice
Mental Health Writing, 
Publishing Opportunity, 
Healthy Living Blogs, 
Mental Health Inspiration, 
Motivational Blog, 
Magnify Wellness Blog, 
">
  <meta name="apple-mobile-web-app-capable" content="yes">
</head>

<body>
  <!-- header code -->
  <header>
    <div id="navbar"></div>
  </header>

  <div class="container">
    <h1>MindWell Wellness Blog</h1>
    <p class="text-center">Check out more posts on our blog! We write about mental health in the media, motivation,
      Magnify Mondays, lifestyle, and more!</p>
    <a href="https://magnifywellnessblog.wordpress.com/"><button class="button">Read More</button></a><br>

    <div class="container">
      <h2>Meet the Writers</h2>
    </div>
    <div class="container">
      <div class="row">
        <?php



        if (mysqli_num_rows($blogData) > 0) {

          while ($row = mysqli_fetch_assoc($blogData)) {
            // echo $name;
            $name = $row['name'];
            $des = $row['text'];
            $date = $row['date'];
            $image = $row['image'];

            echo "<div class='col-md-4'>
          <div class='card'>
            <div class='mik-card'>
              <img src='http://localhost/metalHealth/MindWell/banners/$image' alt='meet Mikaela' style='width:100%' loading='lazy'>
              <div class='container'>
                <h4 class='text-center'><b>$name </b></h4><br>
                <p>$des</p>
             
              </div>
            </div>
          </div>
        </div>";
          }
        } else {
          echo " No Blogs Uploded";
        }

        ?>








      </div>
    </div>
  </div>


  <br><br>

  <div class="container">
    <h2>Spotlight on our founder: Abigayle!</h2>
  </div> <br><br>

  <div class="spotlight">
    <div class="director-card">
      <img src="https://magnifywellnessblog.files.wordpress.com/2020/12/abby-feature.png" alt="Abigayle Peterson" width="100%" loading="lazy">
      <div class="container">
        <p class="text-center">Magnify Wellness was coded using a JavaScript library called
          React, but there is another language embedded into the story that Magnify Wellness’s code portrays.
          It is a familiar language, which conveys the challenging story of learning how to best
          use our gifts through the experiences we gain. Abigayle’s story is one that
          reminds us that </p>
        <a href="https://magnifywellnessblog.wordpress.com/2020/12/07/spotlight-abigayle-peterson-the-stories-within-magnifys-code/"><button class="button" style="vertical-align:middle"><span>Continue Reading...</span></button></a>
      </div>
    </div>
  </div> <br> <br> <br> <br>

  <!-- footer code -->
  <footer id="footer" class="footer"></footer>

</body>

<script src="./home-assets/jquery.counterup.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // LOAD THE HEADER AND FOOTER
    $('#navbar').load('./navbar/navbar.php');
    $('#footer').load('./footer/footer.html');
  })
</script>

</html>