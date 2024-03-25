<?php
require 'con.php';
$sql = "SELECT * FROM Staff ";

$blogData = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Meet the Team</title>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://magnifywellness.org/team-groups.html" />
  <link rel="stylesheet" href="team-assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />

  <!-- <link rel="stylesheet" href="team-assets/fonts/ionicons.min.css"> -->
  <!-- <link rel="stylesheet" href="team-assets/css/Article-Clean.css">
    <link rel="stylesheet" href="team-assets/css/Article-List.css">
    <link rel="stylesheet" href="team-assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="team-assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="team-assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="team-assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="team-assets/css/Scroll-To-Top.css"> -->
  <!-- <link rel="stylesheet" href="team-assets/css/styles.css"> -->
  <link rel="stylesheet" href="team-assets/css/team-groups.css" />
  <link rel="stylesheet" href="./navbar/navbar.css" />
  <link rel="stylesheet" href="./footer/footer.css" />
  <link rel="stylesheet" href="assets/css/h1.css" />
  <link rel="stylesheet" href="team-assets/css/Meet_the_team.css" />
  <link rel="icon" href="./home-assets/logo.png" />

  <meta name="twitter:card" content="Magnify Wellness | Meet the Team" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DHMLKFJKBE"></script>
  <!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-DHMLKFJKBE');
</script> -->
  <!-- google adsense script that lets it put ads wherever it thinks it's fine on the page -->
  <!-- <script data-ad-client="ca-pub-8468284461769741" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
</head>

<body>
  <div id="top"></div>
  <header>
    <div id="navbar"></div>
  </header>
  <div id="team-groups-content" class="container">
    <h1>Meet the Team</h1>



    <?php



    if (mysqli_num_rows($blogData) > 0) {
      $i = 0;
      while ($row = mysqli_fetch_assoc($blogData)) {
        $name = $row['name'];
        $phone = $row['phone'];
        $discription = $row['discription'];
        $profile = $row['profile'];
        $email = $row['email'] . " | " . $phone;

        if ($i % 2 == 0) {
          echo "<div class='officer row mb-4'>
      <div class='col-lg-3 d-flex justify-content-center align-items-center'>
        <img src='http://localhost/metalHealth/MindWell/Profiles/$profile' alt='Abigayle Peterson, Founder and CEO' class='officer-photo' />
      </div>
      <div class='col-lg-9 text'>
        <div class='big'>$name</div>
        <div class='bigitalic'>$email</div>
        <div class='smalll'>
          $discription
        </div>
      </div>
    </div>";
        } else {
          echo "   <div class='officer row mb-5'>
      <div class='col-lg-9 text' id='aditi'>
        <div class='big'>$name</div>
        <div class='bigitalic'>$email</div>
        <div class='smalll'>
          $discription
        </div>
      </div>
      <div class='col-lg-3 d-flex justify-content-center align-items-center'>
        <img src='http://localhost/metalHealth/MindWell/Profiles/$profile' class='officer-photo' />
      </div>
    </div>";
        }
        $i = $i + 1;
      }
    } ?>


    <div class="row text-center mb-4">
      <h2 class="w-100">Click on a team to learn more</h2>
    </div>
    <div class="row d-flex">
      <div class="col-sm col-card">
        <a class="d-flex align-items-center justify-content-center" href="Tech_team.html">
          <div class="card">
            <img src="team-assets/Team-photos/Tech team.png" alt="Tech Team" class="team-img" />
            <div class="name">Tech</div>
          </div>
        </a>
      </div>

      <div class="col-md col-card">
        <a class="d-flex align-items-center justify-content-center" href="Mental_health_changemakers.html">
          <div class="card">
            <img src="team-assets/Team-photos/mental health changemakers team(1).png" alt="Change Makers Team" class="team-img" />
            <div class="name">Mental Health Changemakers</div>
          </div>
        </a>
      </div>
      <div class="col-md col-card">
        <a class="d-flex align-items-center justify-content-center" href="Art.html">
          <div class="card">
            <img src="team-assets/Team-photos/Art Team.png" alt="Art Team" class="team-img" />
            <div class="name">Art</div>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm col-card">
        <a class="d-flex align-items-center justify-content-center" href="Finance.html">
          <div class="card">
            <img src="team-assets/Team-photos/finance team.jpeg" alt="Finance Team" class="team-img" />
            <div class="name">Finance</div>
          </div>
        </a>
      </div>
      <div class="col-md col-card">
        <a class="d-flex align-items-center justify-content-center" href="partnerships.html">
          <div class="card">
            <img src="team-assets/Team-photos/partnerships.png" alt="Partnerships" class="team-img" />
            <div class="name">Partnerships</div>
          </div>
        </a>
      </div>
      <div class="col-md col-card">
        <a class="d-flex align-items-center justify-content-center" href="Marketing.html">
          <div class="card">
            <img src="team-assets/Team-photos/marketing team.png" alt="Marketing Team" class="team-img" />
            <div class="name">Marketing</div>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm col-card">
        <a class="d-flex align-items-center justify-content-center" href="Events-team.html">
          <div class="card">
            <img src="team-assets/Team-photos/events team.png" alt="Events Team" class="team-img" />
            <div class="name">Events</div>
          </div>
        </a>
      </div>
      <div class="col-md col-card">
        <a class="d-flex align-items-center justify-content-center" href="Social_Media.html">
          <div class="card">
            <img src="team-assets/Team-photos/social media team.png" alt="Social Media Team" class="team-img" />
            <div class="name">Social Media</div>
          </div>
        </a>
      </div>
      <div class="col-md col-card">
        <a class="d-flex align-items-center justify-content-center" href="Writing.html">
          <div class="card">
            <img src="team-assets/Team-photos/writing team.PNG" alt="Writing Team" class="team-img" />
            <div class="name">Writing</div>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm col-card">
        <a class="d-flex align-items-center justify-content-center" href="mentorship.html">
          <div class="card">
            <img src="team-assets/Team-photos/mentor.png" alt="Mentors" class="team-img" />
            <div class="name">Mentorship</div>
          </div>
        </a>
      </div>
      <div class="col-md col-card">
        <a class="d-flex align-items-center justify-content-center" href="research.html">
          <div class="card">
            <img src="team-assets/Team-photos/Research.png" alt="Research" class="team-img" />
            <div class="name">Research and Development</div>
          </div>
        </a>
      </div>
      <div class="col-md col-card">
        <a class="d-flex align-items-center justify-content-center" href="Logistics.html">
          <div class="card">
            <img src="team-assets/Team-photos/Logistics.png" alt="Logistics" class="team-img" />
            <div class="name">Logistics</div>
          </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm col-card">
        <a class="d-flex align-items-center justify-content-center" href="communityteam.html">
          <div class="card">
            <img src="team-assets/Headshots/head.png" alt="Community Engagment" class="team-img" />
            <div class="name">Community Engagement</div>
          </div>
        </a>
      </div>

      <div class="col-sm col-card">
        <a class="d-flex align-items-center justify-content-center" href="ex-members.html">
          <div class="card">
            <img src="team-assets/Headshots/head.png" alt="Community Engagment" class="team-img" />
            <div class="name">Previous Members</div>
          </div>
        </a>
      </div>

      <div class="col-md col-card">
        <! class="d-flex align-items-center justify-content-center" --empty-->
      </div>
    </div>

    <div class="row">
      <div class="col align-self-end">
        <a href="#top">
          <button class="btn up">&#8682;</button>
        </a>
      </div>
    </div>
  </div>

  <footer id="footer" class="footer"></footer>
</body>
<script type="text/javascript">
  $(document).ready(function() {
    // LOAD THE HEADER AND FOOTER
    $("#navbar").load("./navbar/navbar.php");
    $("#footer").load("./footer/footer.html");
  });
</script>

</html>