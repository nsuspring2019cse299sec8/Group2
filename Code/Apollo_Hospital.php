﻿ 
 <?php

include "lib/connection.php";
$result ="";
//insert query
if(isset($_POST['add_data'])){
   $Name= $_POST['name'];
   $Department= $_POST['department'];
   $Email= $_POST['email'];
   $Hospital_name= $_POST['hospital_name'];
   $Details= $_POST['details'];
    
    
    $insert_sql= "INSERT INTO doctor(Name,Department,Email,Hospital_name,Details) values ('$Name','$Department','$Email','$Hospital_name','$Details')";
    
    if($conn->query($insert_sql)){
       $result= "Confirmed";
        
    }
    
    else{
           die($conn->error);
    }
    
    
    
    
}

$select_sql="SELECT * FROM doctor where Hospital_name='Apollo'";
    $select_query=$conn->query($select_sql);
   

if ($select_query->num_rows>0){ 


?>


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Apollo HOSPITAL</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,700|Lato:300,300i,400" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.css">
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
                        <a class="nav-link " href="home.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item custom_nav">
                        <a class="nav-link " href="Hospital.html">Doctor Profile</a>
                    </li>
                  
                    <li class="nav-item custom_nav">
                        <a class="nav-link " href="Surgeon.html">Surgeon</a>
                    </li>
                   
                    <li class="nav-item custom_nav">
                        <a class="nav-link " href="about.html">About</a>
                    </li>
                </ul>
            </div>
        </nav>

</div>


    
  <!--        2nd nav ends  -->

  
<!--  hospital start-->
<section id="hospital"   style="background-image: url(img/background.png);
    background-position: center;
    background-size: cover; 
    background-repeat: no-repeat;">
    <div class="container" style="margin-bottom: 40px;">
    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="hospial_content text-center" style="margin-top: 100px;">
                <h1 style="font-size: 30pt;
font-weight: bold;">Apollo Hospital</h1>
         
                </div>
            </div>
            
        </div>
         <div class="row">
                   
              <div class="col-md-12 col-lg-12">   
              
        <div class="row" style="margin: 40px 0px;">
            
 
          <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>General & Laparoscopic Surgeon</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Dr. Anisur Rahman</h4>
                       
                        <div class="card-text text-center">
                          MBBS (DMC), M.Sc (Canada), FCPS (Surgery), FRCS (Glasgow, UK)
                            Visiting Hours:
Location: Plot # 81, Block # E, Basudhara R/A, Dhaka – 1229
Phone: +880-2-8401661, 8845242, 01729-276556 Cell: +880 1841276556, Hotline: 10678


                        </div>
                   <br><br>
                          
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
               <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Kidney ( Nephrology )</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Krishna Mohan Sahu</h4>
                       
                        <div class="card-text text-center">
                            MBBS, MD (Med.), DNB (Nephrology), DM (Nephrology), Fellowship (Nephrology) Canada
                         Visiting Hours:
Location: Plot # 81, Block # E, Basudhara R/A, Dhaka – 1229
Phone: +880-2-8401661, 8845242,  01729-276556 Cell: +880 1841276556, Hotline: 10678



                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                     <span><a href="booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Burn & Plastic Surgeon</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. A.K.M Fazlul Haque</h4>
                       
                        <div class="card-text text-center">
                            MBBS, FRCS (UK)
                        Visiting Hours:
Location: Plot # 81, Block # E, Bashundhara R/A, Dhaka – 1229, Bangladesh
Phone: +880-2-8401661, Hotline – 10678, 01729-276556



                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Diabetes & Endocrine</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Abdul Mannan Sarker</h4>
                       
                        <div class="card-text text-center">
                        MBBS, DEM (DU), MD (Endocrinology)
                        Visiting Hours:
Location: Plot # 81, Block # E, Basudhara R/A, Dhaka – 1229
Phone: +880-2-8401661, 8845242, Cell: +880 1841276556, Hotline: 10678
    
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
               <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Internal Medicine</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Abdullah Al Mamun</h4>
                       
                        <div class="card-text text-center">
                       MBBS, FCPS (Medicine), MACP ( USA ), FACP
                       Visiting Hours:
Location: Plot # 81, Block # E, Basudhara R/A, Dhaka – 1229
Phone: +880-2-8401661, 8845242, Cell: +880 1841276556, Hotline: 10678,  01729-276556 
     

                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="booking.php">Book Now</a></span>       
                         <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
              <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Child – Pediatric</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Abu Sayeed Mohammad Iqbal</h4>
                       
                        <div class="card-text text-center">
                        MBBS, FCPS, MD, Fellow (Singapore), Neonatal Training in Singapore & Australia
Coordinator & Senior Consultant
Visiting Hours:
Location: Plot # 81, Block # E, Bashundhara R/A, Dhaka – 1229, Bangladesh
Phone: +880-2-8401661, Hotline – 10678

 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
			<span><a href="booking.php">Book Now</a></span>                       						<span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Neuromedicine</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Alim Akther Bhuiyan</h4>
                       
                        <div class="card-text text-center">
                      MBBS, DTM&H (UK), MD (USA), Post Doctoral Fellowship in Epilepsy and Clinical Neurophysiology (USA), US Board Certified in Neurology
Coordinator & Consultant
Visiting Hours:
Location: Plot # 81, Block # E, Bashundhara R/A, Dhaka – 1229, Bangladesh
Phone: +880-2-8401661, Hotline – 10678

 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
			<span><a href="booking.php">Book Now</a></span>                       								<span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>ENT-Ear, Nose & Throat</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">.Dr. Arun Dodhu Patole</h4>
                       
                        <div class="card-text text-center">
                     MBBS, MS, DORL (Mumbai), Fellow A.I.N.OT (Italy)
                            Visiting Hours:
Location: Plot # 81, Block # E, Basundhara R/A, Dhaka – 1229
Phone: +880-2-8401661, 8845242, Cell: +880 1841276556, Hotline: 10678

 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
			<span><a href="booking.php">Book Now</a></span>                      								 <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
                         <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Urology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Azfar Uddin Shaikh</h4>
                       
                        <div class="card-text text-center">
                      MBBS. MS (DMC), MS (Urology), FSUA (Singapore)
                        Visiting Hours:
Location: Plot # 81, Block # E, Basundhara R/A, Dhaka – 1229
Phone: +880-2-8401661, 8845242, Cell: +880 1841276556, Hotline: 10678

 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
			<span><a href="booking.php">Book Now</a></span>                       							<span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
                <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Rheumatology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Abdullah Al Mamun</h4>
                       
                        <div class="card-text text-center">
                     MBBS, FCPS (Medicine), MACP ( USA ), FACP
                       Visiting Hours:
Location: Plot # 81, Block # E, Basundhara R/A, Dhaka – 1229
Phone: +880-2-8401661, 8845242, Cell: +880 1841276556, Hotline: 10678
     
 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
			<span><a href="booking.php">Book Now</a></span>                       							<span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Gynecology & Obstetrics</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Gulshan Ara</h4>
                       
                        <div class="card-text text-center">
                    MBBS, MCPS, MS (Obs./Gynae.), FCPS, Trained in Advanced Laparoscopic Surgery (India)
                    Visiting Hours:
Location: Plot # 81, Block # E, Bashundhara R/A, Dhaka – 1229, Bangladesh
Phone: +880-2-8401661, Hotline – 10678

 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
			<span><a href="booking.php">Book Now</a></span>                       								<span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
               
                
<!--                          -->

 <?php while($data=$select_query->fetch_assoc()){ ?>
             <div class="col-md-3 col-lg-3">
                 <div class="card">
                    <div class="card-header card_custom_header2 text-center">
                     <span><?php echo $data['Department']; ?></span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;"><?php echo $data['Name']; ?></h4>
                       
                        <div class="card-text text-center">
                      <?php echo $data['Email']; ?>
                        </div>
                         <div class="card-text text-center">
                  <?php echo $data['Details']; ?>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       
                       <span><a href="booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                    <?php } ?>
                    <?php } else{  } ?> 
                </div>
                  
            </div>
                
          
            </div>
         
             </div></div>
        </div>
    </div>
  
    
</section>

<!--  hospital end-->

  
   <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
  
</body>

</html>
