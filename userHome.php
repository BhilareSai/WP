<?php
require 'con.php';

if (isset($_COOKIE["email"])) {

    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    $sql = "SELECT * FROM Staff WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $userId = $row['id'];
    $sql = "SELECT * FROM Blogs WHERE userId = '$userId'";
    // echo $sql;
    $blogData = mysqli_query($con, $sql);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $name = $_POST['name'];
        $description = $_POST['discription'];




        // Handling file upload
        $targetDir = "banners/"; // Directory where images will be stored
        $fileExtension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

        $fileName = uniqid() . '.' . $fileExtension;
        $targetFilePath = $targetDir . $fileName;

        // Check if image file is a actual image or fake image



        // Allow certain file formats
        $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array(strtolower($fileExtension), $allowTypes)) {

            // Upload file to server
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {

                // Insert data into database

                $currentDate = date('Y-m-d H:i:s');

                $sql = "INSERT INTO `Blogs`( `name`, `userId`, `date`, `text`, `image`) VALUES  ('$name', '$userId', '$currentDate', '$description', '$fileName')";

                $result = mysqli_query($con, $sql);

                if ($result) {
                    $insert = true;
                    header("Location: userHome.php");
                } else {
                    echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.";
        }
    }
} else {
    header("Location: login.php");
}
?>



<!doctype html>
<html lang="en">
<style>
    strong {
        font-weight: bold;
    }

    em {
        font-style: italic;
    }

    table {
        background: #f5f5f5;
        border-collapse: separate;
        box-shadow: inset 0 1px 0 #fff;
        font-size: 12px;
        line-height: 24px;
        margin: 30px auto;
        text-align: left;
        width: 800px;
    }

    th {
        background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
        border-left: 1px solid #555;
        border-right: 1px solid #777;
        border-top: 1px solid #555;
        border-bottom: 1px solid #333;
        box-shadow: inset 0 1px 0 #999;
        color: #fff;
        font-weight: bold;
        padding: 10px 15px;
        position: relative;
        text-shadow: 0 1px 0 #000;
    }

    th:after {
        background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, .08));
        content: '';
        display: block;
        height: 25%;
        left: 0;
        margin: 1px 0 0 0;
        position: absolute;
        top: 25%;
        width: 100%;
    }

    th:first-child {
        border-left: 1px solid #777;
        box-shadow: inset 1px 1px 0 #999;
    }

    th:last-child {
        box-shadow: inset -1px 1px 0 #999;
    }

    td {
        border-right: 1px solid #fff;
        border-left: 1px solid #e8e8e8;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #e8e8e8;
        padding: 10px 15px;
        position: relative;
        transition: all 300ms;
    }

    td:first-child {
        box-shadow: inset 1px 0 0 #fff;
    }

    td:last-child {
        border-right: 1px solid #e8e8e8;
        box-shadow: inset -1px 0 0 #fff;
    }

    tr {
        background: url(https://jackrugile.com/images/misc/noise-diagonal.png);
    }

    tr:nth-child(odd) td {
        background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);
    }

    tr:last-of-type td {
        box-shadow: inset 0 -1px 0 #fff;
    }

    tr:last-of-type td:first-child {
        box-shadow: inset 1px -1px 0 #fff;
    }

    tr:last-of-type td:last-child {
        box-shadow: inset -1px -1px 0 #fff;
    }

    tbody:hover td {
        color: transparent;
        text-shadow: 0 0 3px #aaa;
    }

    tbody:hover tr:hover td {
        color: #444;
        text-shadow: 0 1px 0 #fff;
    }
</style>
<!-- <link rel="stylesheet" href="signup.css" /> -->

<style>
    /* Style for the preview image */
    #preview {

        width: 200px;
        height: 200px;
        border: 2px solid #ddd;
        border-radius: 50%;
        overflow: hidden;
    }

    #preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    * {
        box-sizing: border-box
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit/register button */
    .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Professionals Resume HTML Bootstrap Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="assets1/images/fav.jpg">
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets1/css/style.css" />
</head>

<body>
    <div class="container-fluid overcover">
        <div class="container profile-box">
            <div class="top-cover">
                <div class="covwe-inn">
                    <div class="row no-margin">
                        <div class="col-md-3 img-c">

                            <img src=<?php echo "http://localhost/metalHealth/MindWell/profiles/" . $row['profile']; ?> alt="">
                        </div>
                        <div class="col-md-9 tit-det">
                            <h2><?php echo  $row['name'] . " | BLOG WRITTER";  ?></h2>
                            <h6>
                                <?php echo $row['discription']; ?>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Add BLOG</a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


                    <table>
                        <thead>

                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Text</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            if (mysqli_num_rows($blogData) > 0) {

                                while ($row = mysqli_fetch_assoc($blogData)) {
                                    $name = $row['name'];
                                    $des = $row['text'];
                                    $date = $row['date'];
                                    $image = $row['image'];

                                    echo "  <tr>
                                <td><strong>$name</strong></td>
                                <td>$date</td>
                                <td>$des</td>
                                <td> <a href='http://localhost/metalHealth/MindWell/banners/$image' target='_blank'>Image </a> </td>
                            </tr>";
                                }
                            } else {
                                echo " <tr>
                                <td><strong></strong></td>
                                <td></td>
                                <td>/reveal</td>
                                <td></td>
                            </tr>";
                            }

                            ?>



                        </tbody>
                    </table>

                </div>
                <div class="tab-pane fade exp-cover" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="" class="form" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <h1>BLOG Details</h1>

                            <hr>

                            <label for="name"><b>Name</b></label>
                            <input type="text" placeholder="Enter Blog name" name="name" id="name" required>

                            <label for="psw"><b>Discription</b></label>
                            <input type="text" placeholder="Enter Blog details" name="discription" id="psw" required>

                            <hr>

                            <h2>Upload Your Blog Banner</h2>

                            <div>
                                <!-- Input for choosing a file -->
                                <input type="file" id="profile" name="image" accept="image/*" required />
                            </div>

                            <div id="preview" style="height: 200px">
                                <!-- Preview of the uploaded image will be displayed here -->
                            </div>
                        </div>

                        <button type="submit" class="registerbtn">Submit</button>
                    </form>
                </div>
                <div class="tab-pane fade exp-cover" id="resume" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="sec-title">
                        <h2>Education Details</h2>
                    </div>
                    <div class="service no-margin row">
                        <div class="col-sm-3 resume-dat serv-logo">
                            <h6>2013-2015</h6>
                            <p>Master Degree</p>
                        </div>
                        <div class="col-sm-9 rgbf">
                            <h5>Cambridg University</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="service no-margin row">
                        <div class="col-sm-3 resume-dat serv-logo">
                            <h6>2013-2015</h6>
                            <p>Bacholers Degree</p>
                        </div>
                        <div class="col-sm-9 rgbf">
                            <h5>Anna University</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="service no-margin row">
                        <div class="col-sm-3 resume-dat serv-logo">
                            <h6>2013-2015</h6>
                            <p>High School</p>
                        </div>
                        <div class="col-sm-9 rgbf">
                            <h5>A.M.H.S.S</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="service no-margin row">
                        <div class="col-sm-3 resume-dat serv-logo">
                            <h6>2013-2015</h6>
                            <p>School</p>
                        </div>
                        <div class="col-sm-9 rgbf">
                            <h5>Anna University</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade gallcoo" id="gallery" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row no-margin gallery">
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_01.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_02.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_03.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_04.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_05.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_06.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_10.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_08.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img src="assets1/images/gallery/gallery_09.jpg" alt="">
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade contact-tab" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row no-margin">
                        <div class="col-md-6 no-padding">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176144.0450019627!2d-107.79423426090409!3d38.97644533805396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874014749b1856b7%3A0xc75483314990a7ff!2sColorado%2C+USA!5e0!3m2!1sen!2sin!4v1547222354537" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-6">
                            <div class="row cont-row no-margin">
                                <div class="col-sm-6">
                                    <input placeholder="Enter Full Name" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="col-sm-6">
                                    <input placeholder="Enter Email Address" type="text" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="row cont-row no-margin">
                                <div class="col-sm-6">
                                    <input placeholder="Enter Mobile Number" type="text" class="form-control form-control-sm">
                                </div>

                            </div>
                            <div class="row cont-row no-margin">
                                <div class="col-sm-12">
                                    <textarea placeholder="Enter your Message" class="form-control form-control-sm" rows="10"></textarea>
                                </div>

                            </div>
                            <div class="row cont-row no-margin">
                                <div class="col-sm-6">
                                    <button class="btn btn-sm btn-primary">Send Message</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="assets1/js/jquery-3.2.1.min.js"></script>
<script src="assets1/js/popper.min.js"></script>
<script src="assets1/js/bootstrap.min.js"></script>
<script src="assets1/js/script.js"></script>

<script>
    // JavaScript for previewing the selected image
    document
        .getElementById("profile")
        .addEventListener("change", function(event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var preview = document.getElementById("preview");
                preview.innerHTML = ""; // Clear previous preview
                var img = new Image();
                img.src = e.target.result;
                preview.appendChild(img);
            };

            reader.readAsDataURL(file);
        });
</script>

</html>