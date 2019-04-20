<?php
 include "lib/connection.php";
 $result ="";
 if(isset($_POST['add_data'])){
    $first_name= $_POST['patient_first_name'];
    $last_name= $_POST['patient_last_name'];
    $gender= $_POST['patient_gender'];
    $date_of_birth= $_POST['patient_date_of_birth'];
    $location= $_POST['patient_location'];
    $email= $_POST['patient_email'];
    $password= $_POST['User_password'];
    $pass= $_POST['confirm_password'];
    
 if($password==$pass){
    $insert_sql = "INSERT INTO patient(first_name, last_name, gender, date_of_birth, location, email, password) values('$first_name', '$last_name', $gender, '$date_of_birth', '$location', '$email', '$password')";
    if($conn->query($insert_sql)){
        $result = "data added";
}
    else{
        die($conn->error);
}
    }
 else{
    $result="password did not match";
  }
 }





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <title>LOGIN</title>

  <link href="https://fonts.googleapis.com/css?family=Dosis:400,700|Lato:300,300i,400" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
   <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/style.css">

</head>
<body style="    background-image: url(img/computer-desk-doctor-48604.jpg);   background-size: cover;
    background-color: white;
  padding: 0px;">
<div class="">
    <div class="container fluid main">

       <div class="row">
       <div data-aos="fade-down" class="welcome_text">
           <h1>WELCOME ONLINE HOSPITAL</h1>
       </div>

      </div>
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

             <h2 style="text-align: center">Sign Up Here</h2>
             <div class="signup " data-aos="fade-right">
              <form action="" class="signup_form">   
            </form>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post" class="signup_form">

        <label for="first_name">First Name</label> <br>
        <input type="text" name="patient_first_name" placeholder="First Name " required> 
        <br>
        <br>

        <label for="last_name">Last Name</label> <br>
        <input type="text" name="patient_last_name" placeholder="Last Name" required>
        <br>
        <br>

        <label for="gender">Gender</label> <br>

       <select name="patient_gender">
        <option value="0">Male</option>
        <option value="1">Female</option>
        </select>
        <br>
        <br>

        <label for="date_of_birth">Date of Birth</label> <br>
        <input type="date" name="patient_date_of_birth" style="margin-right: 114px;" required>
        <br>
        <br>

        <label for="location">Location</label> <br>
         <input type="text" name="patient_location" placeholder="Location" name="Location"> 
        <br>
        <br>

        <label for="email">Email</label> <br>
        <input type="email" name="patient_email" placeholder="Email address" required> 
        <br>
        <br>

        <label for="password">Password</label> <br>
         <input type="password" name="User_password" placeholder="Password">
        <br>
        <br>

         <label for="password">Password</label> <br>
         <input type="password" name="confirm_password" placeholder="Password">
        <br>
        <br>

        <input type="submit" name="add_data" value="Sign In">

    </form>
    </div>
                 <div class="result">
                 <?php echo $result?>
                 </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="log_in" data-aos="fade-left">
            <h2>Log In</h2>
            <form action="" class="login_form">

                <label for="email">Email</label> <br>
                 <input type="email" placeholder="Email address" name="User_id">
                  <br>
                  <br>
                <label for="password">Password</label> <br>
                 <input type="password" placeholder="Password" name="User_password">
                 <br>
                 <br>

                 <input type="submit" name="add_data" value="Log In">
            </form>
        </div>



       </div>



    </div>

    </div>
        </div>



    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>

</body>

</html>