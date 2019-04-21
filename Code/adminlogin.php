 
 <?php

include "lib/connection.php";
    if(isset($_POST['login'])){
    $uname=$_POST['username'];
    $password=$_POST['apassword'];
    
    $sql="select * from adminform where Username='".$uname."' AND Password='".$password."' limit 1";
    $result=$conn->query($sql);

    if($result->num_rows>0){
    header("Location:adminhome.php");
    }
    else{
        echo " You have entered incorrect password";
        exit();
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


    <!--    form starts   -->
    <div class="container-contact100">

        <div class="wrap-contact100">
            <form class="contact100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
               
                <span class="contact100-form-title bedonortitle">
                    Add more doctor
                </span>

                <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                    <input class="input100" type="text" name="username" placeholder="Name" required>
                    <span class="focus-input100"></span>
                </div>
              

                <div class="wrap-input100 validate-input" data-validate="Please enter department ">
                    <input class="input100" type="password" name="apassword" placeholder="password" required>
                    <span class="focus-input100"></span>
                </div>

               


                <div class="container-contact100-form-btn">
                    <button type="submit"  name="login" class="contact100-form-btn">
                        <span>
                            <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
     Confirm registeration
                        </span>
                    </button>
                </div>
            </form>
            
        </div>
        
    </div>
    <div class="result">
            <?php echo $result;
            
            ?>
        </div>

    <!--    form ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
