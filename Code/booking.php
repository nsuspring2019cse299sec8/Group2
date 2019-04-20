<?php

 include "lib/connection.php";
 $result ="";
 if(isset($_POST['add_data'])){
    $name= $_POST['name'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $ammount_payment= $_POST['ammount_payment'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    


    $insert_sql = "INSERT INTO payment(bname, bage, bemail, bamount, bphone, baddress) values('$name', $age, '$email', $ammount_payment, $phone, '$address')";

    if($conn->query($insert_sql)){
        $result = "data added";
}
    else{
        die($conn->error);
}
    }

 

?>

<!DOCTYPE html>

<html lang="en">

<head>

   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="FOLLOW, INDEX">

    <title>Online Hospital</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  

</head>

<body>
 <!--        1st nav ends   --> 
      
        <div class="container-fluid custom_top">
        <div class="row cover_img">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="pro_icon">
                    <img src="img/doctorologo.jpg" alt="">
                </div>


            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                  <nav class="global-header__nav global-nav visually-hidden js-global-nav" role="navigation">
                        <ul class="global-nav_list">
                            <li class="global-nav__item"><a class="global-nav_link" href="#" target="_top">Which hospital you are looking for?? </a></li>
             
                        </ul>
                    </nav>


            </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                  <nav class="global-header__nav global-nav visually-hidden js-global-nav" role="navigation">
                        <ul class="global-nav__list">
                        
                            <li class="global-nav__item"><a class="global-nav_link" href="#" target="_top">Which city you are from?</a></li>
                        </ul>
                    </nav>


            </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
              


            </div>


        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light custom_menu">
          
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse custom_navbar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item custom_nav active">
                        <a class="nav-link " href="home.html">Home</a>
                    </li>
                    <li class="nav-item custom_nav">
                        <a class="nav-link " href="Hospital.html">Doctor Profile</a>
                    </li>
                   
                     <li class="nav-item custom_nav">
                        <a class="nav-link " href="Surgeon.html">Surgeon</a>
                    </li>
                   
                    <li class="nav-item custom_nav">
                        <a class="nav-link " href="about.html">About  <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

</div>
    <!--    header ends  -->

    <!--    form starts   -->
    <div class="container-contact100">

        <div class="wrap-contact100">
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
                <span class="contact100-form-title bedonortitle">
                    Get Booking of doctors easily
                </span>

                <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="input100" type="text" name="name" placeholder="Full Name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter your Blood Group">
                    <input class="input100" type="text" name="age" placeholder="Age">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter your email: e@a.x">
                    <input class="input100" type="text" name="email" placeholder="E-mail">
                    <span class="focus-input100"></span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="number" name="ammount_payment" id="password" placeholder="Ammount of Payment">
					<span class="focus-input100"></span>
				</div>
               
               
                <div>
                    <span id="confirmMessage" class="confirmMessage"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter your phone">
                    <input class="input100" type="number" name="phone" placeholder="Phone">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Please enter your Address">
                    <textarea class="input100" name="address" placeholder="Address"></textarea>
                    <span class="focus-input100"></span>
                </div>


                <div class="container-contact100-form-btn">
                    <button type="submit"  name="add_data" class="contact100-form-btn">
                        
                        <span>
                            <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
        Book Now
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
                 <div class="result">
                 <?php echo $result?>
                 </div>

    <!--    form ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
