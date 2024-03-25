<?php
require 'con.php'; // Or use require_once 'connection.php' if you want to ensure it's included only once


if (!$con) {
    die("sorry Failed to connect." . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="home-assets/maggie1.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://magnifywellness.org/index.html" />
    <link rel="stylesheet" href="navbar/navbar.css">
    <link rel="stylesheet" href="./footer/footer.css">

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="homebackground.css"> -->
    <script data-ad-client="ca-pub-8468284461769741" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <!-- Canonical link -->
    <link rel="canonical" href="https://magnifywellness.org/index.html">

    <meta name="twitter:card" content="Magnify Wellness, your Mental Health Hub">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Magnify Wellness is a nonprofit on a mission to ensure that everyone gains equal access to mental health support through outreach programs and technology." />
    <!-- Schema Json Ld for SEO 
    <script type='application/ld+json'> 
        {
          "@context": "http://www.schema.org",
          "@type": "NGO",
          "name": "Magnify Wellness",
          "url": "https://magnifywellness.org/",
          "sameAs": [
            "https://www.magnifywellness.org/index.html",
            "https://www.magnifywellness.org/",
            "https://magnifywellness.org/index.html"
          ],
          "logo": "https://magnifywellness.org/app-assets/Clearer%20Maggie.png",
          "description": "Your Mental Health  Hub",
          "openingHours": "Mo, Tu, We, Th, Fr -"
        }
         </script>-->
    <!-- Limbaj de markup JSON-LD generat de Asistent de markup pentru date structurate Google. -->
    <!-- Schema Json Ld for SEO -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NGO",
            "name": "Magnify Wellness",
            "url": "https://magnifywellness.org/",
            "sameAs": [
                "https://www.magnifywellness.org/index.html",
                "https://www.magnifywellness.org/",
                "https://magnifywellness.org/index.html"
            ],
            "logo": "https://magnifywellness.org/app-assets/Clearer%20Maggie.png",
            "description": "Your Mental Health  Hub",
            "openingHours": "Mo, Tu, We, Th, Fr -"
            "image": "https://magnifywellness.org/home-assets/tilt-logo.png",
            "email": "info@magnifywellness.org",
            "address": {
                "@type": "PostalAddress",
                "addressRegion": "Washington",
                "addressCountry": "US"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "bestRating": "1000+ users 54k+ youth impacted 100+ active leaders 10+ countries reached"
            },
            "review": {
                "@type": "Review",
                "author": {
                    "@type": "Person",
                    "name": "Magnify Wellness App User"
                },
                "reviewBody": "Magnify Wellness has helped me prioritize my mental health through the app&#39;s many helpful features such as journaling or talking to Maggie."
            }
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Edens Hall #308, 519 High Street",
                "addressLocality": "Bellingham",
                "addressRegion": "Wa",
                "postalCode": "98225",
                "addressCountry": "US"
            }
            "telephone": "3609006840"
        },
        "member": [{
                "@type": "Organization"
            },
            {
                "@type": "Organization"
            }
        ],
        "alumni": [{
                "@type": "Person",
                "name": "Abigayle Peterson"
            },
            {
                "@type": "Person",
                "name": "Andrei Munteanu"
            }
        ],
    </script>

    <title>MindWell</title>
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
    <meta property="og:title" content="Magnify Wellness" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://magnifywellness.org" />
    <meta property="og:image" content="" />
    <meta property="og:locale" content="en_US" />
</head>
<header>
    <div id='navbar'></div>
</header>

<section id="home">


    <div class="content">

        <!-- <div class="wrap">
                <img src="./home-assets/maggie-_2_.svg" alt="" srcset="" class="svg"><img
                    src="./home-assets/maggie-_2_.svg" alt="" srcset="" class="svg"><img
                    src="./home-assets/maggie-_2_.svg" alt="" srcset="" class="svg"><img
                    src="./home-assets/maggie-_2_.svg" alt="" srcset="" class="svg"><img
                    src="./home-assets/maggie-_2_.svg" alt="" srcset="" class="svg"><img
                    src="./home-assets/maggie-_2_.svg" alt="" srcset="" class="svg">
                    
                    
                   
            </div> -->


        <div class="text">

            <img src="./home-assets/maggie1.png" alt="Magnify Wellness Logo" id="logo">



            <h1>MindWell</h1>
            <h2>your mental health hub</h2>
            <p>Welcome to MindWell, a completely free app dedicated to helping improve your mental health.
            </p>
            <div>
                <a href="get-involved.html"><button style="background-color: yellowgreen; color: #333333; border: 1px solid #cccccc; padding: 10px 20px; border-radius: 20px; cursor: pointer;">Go to Home</button></a>
            </div>
            <h3>MindWell 2.0 is available for Android and IOS!</h3>
        </div>

        <div class="image">
            <img src="./home-assets/phones.png">
            <h3>MindWell 2.0 is available for your Android or IOS!</h3>
        </div>
    </div>
    <div>

    </div>
</section>
<!-- ! Empty curve div -->
<div class="spacer"></div>
<!-- !-->
<section id="mission">
    <img id="target" src="./home-assets/top-target.png" alt="" loading="lazy">
    <img id="mag" src="./home-assets/tilt-logo.png" alt="" loading="lazy">
    <img id="blob" src="./home-assets/blob.png" alt="">
    <h1>Our Mission</h1>
    <h2>Our mission is to ensure that everyone gains <span>equal access</span> to mental health support through
        <span>outreach programs and technology.
    </h2>
    <!-- <div class="back-to-top"><i class="fas fa-arrow-up"></i></div> -->

</section>

<section id="about">
    <h1>Our Award-Winning App</h1>
    <div class="features-container">
        <div class="feature">
            <img src="./home-assets/about/talk.svg" alt="" loading="lazy">
            <h3>Chatbot</h3>
            <p>Talk one-on-one with our chatbot, Maggie</p>
        </div>
        <div class="feature">
            <img src="./home-assets/about/breathe.svg" alt="" loading="lazy">
            <h3>Breathe</h3>
            <p>Take time to relax with a guided breathing exercise</p>
        </div>
        <div class="feature">
            <img src="./home-assets/about/people.svg" alt="" loading="lazy">
            <h3>Connect</h3>
            <p>Connect with and speak to a counselor</p>
        </div>
        <div class="feature">
            <img src="./home-assets/about/game.svg" alt="" loading="lazy">
            <h3>Play</h3>
            <p>De-stress with Maggie’s Adventure Game</p>
        </div>
        <div class="feature">
            <img src="./home-assets/about/book.svg" alt="" loading="lazy">
            <h3>Write</h3>
            <p>Create journal entries using guided prompts</p>
        </div>
        <div class="feature">
            <img src="./home-assets/about/feelings.svg" alt="" loading="lazy">
            <h3>Check-in</h3>
            <p>Check-in with your feelings and emotions</p>
        </div>
    </div>
    <a href="App.html" class="btn">Learn More</a>
</section>

<section id="app-testimonials">
    <!-- <div class="container"> -->
    <div id="app-testimonials-carousel" class="carousel slide" data-ride="app-testimonials-carousel">
        <h1 id="app-testimonials-title">Why everyone loves MindWell</h1>

        <!-- content generated dynamically w/ javascript -->
        <div class="carousel-inner"></div>

        <ol class="carousel-indicators">
        </ol>

        <a class="carousel-control-prev" href="#app-testimonials-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#app-testimonials-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- </div> -->

    </div>
</section>

<section id="press">
    <h1>Press</h1>
    <div class="articles-container">
        <div class="article">
            <div class="img-container">
                <img src="./home-assets/press/press1.png" alt="">
            </div>

            <h2>STEAMChangers: Abigayle Peterson</h2>
            <a href="https://steampowerca.org/steamchangers/abbypeterson " class="btn">Go to article</a>
        </div>
        <div class="article">
            <div class="img-container">
                <img src="./home-assets/press/press2.png" alt="">
            </div>
            <h2>Mental Health during the Pandemic: STEM Spotlight</h2>
            <a href="https://stemlights.stemchats.org/edition/21.html" class="btn">Go to article</a>
        </div>
        <div class="article">
            <div class="img-container">
                <img src="./home-assets/press/press3.png" alt="">
            </div>
            <h2>Magnifying the Importance of Mental Health</h2>
            <a href="https://www.channelkindness.org/magnifying-mental-health/?fbclid=IwAR1jUr6PQaTw6RQZBXeizKq6OmQiSjfbq1YSWrTj8rJpgUVybBNeKf1QErs" class="btn">Go to article</a>
        </div>
    </div>
    <a href="press.html" class="btn blog-btn">View more articles</a>
</section>

<section id="impact">
    <div class="custom-shape-divider-top-1608248637">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="custom-shape-divider-bottom-1608248687">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>




    <div class="metrics-container">
        <div class="metric">
            <h2><span class="counter">1000</span><span>+</span> users</h2>
        </div>
        <div class="metric">
            <h2><span class="counter">54</span><span>k+</span> youth impacted</h2>
        </div>
        <div class="metric">
            <h2><span span class="counter">100</span><span>+</span> active leaders</h2>
        </div>
        <div class="metric">
            <h2><span span class="counter">10</span><span>+</span> countries reached</h2>
        </div>
    </div>
</section>

<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->


<section id="blog">
    <h1>Blog</h1>
    <div class="articles-container">
        <div class="article">
            <div class="img-container">
                <img src="/home-assets/press/meet-the-writers.png" alt="" loading="lazy">
            </div>

            <h2>Meet the Writers</h2>
            <a href="blog.html" class="btn">View Article</a>
        </div>
        <div class="article">
            <div class="img-container">
                <img src="/home-assets/press/spotlight.png" alt="Abigayle Peterson" width="100%" loading="lazy">

            </div>
            <h2>Spotlight on MindWell's Founder: Abigayle Peterson</h2>
            <a href=" https://magnifywellnessblog.wordpress.com/2020/12/07/spotlight-abigayle-peterson-the-stories-within-magnifys-code/" class="btn">View Article</a>
        </div>

    </div>
    <a href="blog.html" class="btn blog-btn">View Blog</a>


</section>




<section id="join-us">
    <h1>More than just an app... Join the MindWell Movement</h1>
    <a href="get-involved.html" class="btn">Get Involved</a>
</section>
<footer id="footer" class="footer"></footer>
</body>

<script src="./home-assets/jquery.counterup.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="jquery.counterup.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // LOAD THE HEADER AND FOOTER
        $('#navbar').load('/navbar/navbar.php');
        $('#footer').load('/footer/footer.html');

        // $('.counter').counterUp({
        //     delay: 10,
        //     time: 1000
        // });

        // set text in carousel
        // set text + maggie in carousel
        const quotes = [
            `"Magnify Wellness has helped me prioritize my mental health through the app's many helpful features such as journaling or talking to Maggie."`,
            `"The journal on the app is really helpful just to write down my thoughts and process some emotions, and the game is really helpful to relax when I am stressed or overwhelmed."`,
            `"This app is amazing, I love how I can write down whatever's on my mind, I love the app overall and the best thing is that it's free. I love that this is a great tool for people who struggle with their mental health."`,
            `"Having the app and the Magnify community at my disposal always made me feel a bit safer. I knew that if I ever felt really bad I could turn to the app or to other members of Magnify. It has also given me a positive environment to enjoy myself in. I have always felt loved and supported throughout my time at Magnify."`
        ];
        const quoteAuthorText = '-  Magnify Wellness App User';

        for (let i = 0; i < quotes.length; i++) {
            $('.carousel-indicators').append(
                `<li class='indicator' data-target="#app-testimonials-carousel" data-slide-to="${i}"></li>`
            );
            $('.carousel-inner').append(
                `<div class="carousel-item">
                <div class="carousel-content">
                    <h2 class="quote">${quotes[i]}</h2>
                    <p class="quote-author">${quoteAuthorText}</p>
                </div>
            </div>`
            );
        }

        $('.carousel-inner').append(
            '<img id="maggie" src="home-assets/app-testimonials-maggie.png" class="d-block" alt="2 Maggies holding hands">'
        );

        $(".indicator").first().addClass("active");
        $(".carousel-item").first().addClass("active");

        function setCarouselHeight(id) {
            var slideHeight = [];
            $(id + ' .carousel-item').each(function() {
                // add all slide heights to an array
                slideHeight.push($(this).height());
            });

            // find the tallest item
            max = Math.max.apply(null, slideHeight);

            // set the slide's height
            $(id + ' .carousel-inner').each(function() {
                $(this).css('height', max + 10 + 'px');
            });
        }

        setCarouselHeight('#app-testimonials-carousel');
    })
</script>

</html>