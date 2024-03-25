<?php

require 'con.php'; // Or use require_once 'connection.php' if you want to ensure it's included only once
$email = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  $name = $_POST["name"];

  $phone = $_POST['phone'];
  $description = $_POST["description"];
  $password = $_POST['password'];

  $address = $_POST['address'];
  $email = $_POST['email'];


  // Prepare and execute the SQL query
  $sql = "SELECT * FROM staff WHERE email = '$email'";
  $result = mysqli_query($con, $sql);

  // Check if any rows are returned
  if (mysqli_num_rows($result) > 0) {
    $email = true;
  } else {




    // Handling file upload
    $targetDir = "profiles/"; // Directory where images will be stored
    $fileExtension = pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION);

    $fileName = uniqid() . '.' . $fileExtension;
    $targetFilePath = $targetDir . $fileName;

    // Check if image file is a actual image or fake image



    // Allow certain file formats
    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array(strtolower($fileExtension), $allowTypes)) {

      // Upload file to server
      if (move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFilePath)) {

        // Insert data into database
        $email = $_POST['email'];

        $sql = "INSERT INTO `Staff`( `name`, `address`, `profile`, `discription`, `phone`, `email`, `password`) VALUES  ('$name', '$address', '$fileName', '$description', '$phone','$email','$password')";
        echo $sql;
        $result = mysqli_query($con, $sql);

        if ($result) {
          $insert = true;

          header("Location: login.php");
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
}


if ($email) {
  // If true, output JavaScript code to show the alert box
  echo "<script>alert('This Emial already Exist!');</script>";
}
?>


<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!--<title>Registration Form in HTML CSS</title>-->
  <!---Custom CSS File--->
  <link rel="stylesheet" href="signup.css" />
</head>
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
</style>

<body>
  <section class="container">
    <header>Registration Form</header>
    <h6 style="text-align: center">Join us</h6>

    <form action="" class="form" method="POST" enctype="multipart/form-data">
      <h2>Upload Your Profile Photo</h2>

      <div>
        <!-- Input for choosing a file -->
        <input type="file" id="profile" name="profile" accept="image/*" required />
      </div>

      <div id="preview" style="height: 200px">
        <!-- Preview of the uploaded image will be displayed here -->
      </div>
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter full name" required />
      </div>

      <div class="input-box">
        <label>Email Address</label>
        <input type="text" name="email" placeholder="Enter email address" required />
      </div>
      <div class="input-box">
        <label>Password </label>
        <input type='password' name="password" placeholder="****" required />
      </div>
      <div class="input-box">
        <label>Address </label>
        <input type='text' name="address" placeholder="address" required />
      </div>
      <div class="input-box">
        <label>Description </label>
        <input type="text" name="description" placeholder="Discription" required />
      </div>
      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" name="phone" placeholder="Enter phone number" required />
        </div>

      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" checked />
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" />
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-other" name="gender" />
            <label for="check-other">prefer not to say</label>
          </div>
        </div>
      </div>

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
      <button>Submit</button>
    </form>
  </section>
</body>

</html>