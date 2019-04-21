<?php 
    
    include "lib/connect.php";

    include "header.php";

    //select query
    if (isset($_POST['submit-search'])){

        $search = mysqli_real_escape_string($conn, $_POST['name']);
        $select_sql="SELECT * FROM doctor WHERE Name LIKE '%$search%'";
        $select_query=$conn->query($select_sql);
        
       }elseif (isset($_POST['submit-location'])){

        $search_location = mysqli_real_escape_string($conn, $_POST['department']);
        $select_sql="SELECT * FROM doctor WHERE Department LIKE '%$search_location%'";
        $select_query=$conn->query($select_sql);

    } 
    else{
        echo "Could Not Connect To Database!";
    }


?>


        <!--    banner part starts   -->
    <div class="col-md-12 banner">
<!--
    <span id="info1">See All Donors</span>
    <div id="info" class="col-md-12">
-->
           
            <!--=====================
          Content
======================-->
     <!--  hospital start-->
<section id="hospital"   style="background-image: url(images/background.png);
    background-position: center;
    background-size: cover; 
    background-repeat: no-repeat;">
    <div class="container" style="margin-bottom: 40px;">
    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="hospial_content text-center" style="margin-top: 100px;">
                <h1 style="font-size: 30pt;
                 font-weight: bold;">All Available Doctors</h1>
         
                </div>
            </div>
        </div>
        
        <div class="row">
                   
              <div class="col-md-12 col-lg-12">      

                 <div class="row" style="margin: 40px 0px;">
                    
             
                    <?php   if($select_query->num_rows>0){
                    while($data=$select_query->fetch_assoc()){ ?>
                    <div class="col-md-3 col-lg-3">
                    <div class="card">
                     <div class="card-header card_custom_header2 text-center" style="background-color:#8B0D32;">
                     <span style="color:white;"><?php echo $data['Department']; ?></span><span class="card_img"> <img src="img/card_logo1.png" class="img-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                    
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #8B0D32 !important;"><?php echo $data['Name']; ?></h4>
                       
                        <div class="card-text text-center">
                      <?php echo $data['Email']; ?>
                        </div>  
                        
                         <div class="card-text text-center">
                  <?php echo $data['Details']; ?>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       
                       <span>|</span>
                       <span class="float-right rightone"></span>
                    </div>
                    
                </div>
                    
            </div>
            <?php 
        }
    } else{ 
        echo "No records found!";

 } ?>
         
            </div>
            </div></div>
            
        </div>
    </div>
  
    
</section>
    </div>
      
   
        
        
        <!--    banner part ends   -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
