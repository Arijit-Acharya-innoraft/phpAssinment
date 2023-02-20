<?php
session_start();
if (!isset($_SESSION['U_name'])) {
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 1</title>
</head>
<link rel="stylesheet" href="form.css">

<body>
  <div class="form-section">
    <div class="container">
      <form action="a1_form.php" method="post" enctype="multipart/form-data">
        <h1>Registration Form</h1>
        <ul>
          <li class="form-item">
            <label for="Fname">First Name :</label>
            <input type="text" name="fname" id="fname" placeholder="First Name" onkeyup="callFunction1()" required>
            <span id="fname_error"></span>
          </li>
          <li class="form-item">
            <label for="Lname">Last Name :</label>
            <input type="text" name="lname" id="lname" placeholder="Last Name " onkeyup="callFunction2()" required>
            <span id="lname_error"></span>
          </li>
          <li class="form-item">
            <label for="Fullname">Full Name :</label>
            <input type="text" name="fullname" id="fullname" placeholder="Full Name" disabled>
          </li>
        </ul>
        <button type="submit" name="submit" id="submit" disabled>Submit</button>
      </form>
    </div>
  </div>
  <script src="form.js"></script>
</body>

</html>