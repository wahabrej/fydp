<?php
   
   $error=0;


   if(isset($_POST['submit']))
   {
       include '../model/connect.php';
       $id=$_POST['id'];
       $password=$_POST['password'];

       $sql="select * from student where student_id='$id' and password='$password' ";

       $result=mysqli_query($conn,$sql);

       if($result)
       {   
             $num=mysqli_num_rows($result);
             if($num>0)
             {
              while($row = $result->fetch_assoc()) {
                  session_start();
                  $_SESSION['name']=$row['name'];
                  $_SESSION['id']=$row['student_id'];
                  header('location:home.php');
              }

                
              
             }
             else
               $error=1;
       }



   }




?>







<!DOCTYPE html>
<html>

<head>
  <title>UIU Career Assistan System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="icon" type="image/x-icon" href="images/faviconn.png"> -->
  <link rel="icon" href="https://uiu.ac.bd/wp-content/uploads/2015/10/favicon.png" />
  <link rel="stylesheet" href="css/login_page.css">

</head>




<body>
  <div class="container">



    <div class="left-box">
      <img src="images/CAS_logo.PNG" height="130px" width="90%">
      <p style="font-style: italic;font-size: 16px;margin-top: 0px;">Welcome to our Career Assistant platform!
        We are excited to connect you with fellow alumni and provide resources to help you further your career. Our
        website offers a variety of tools to help you stay connected with our alumni, including a directory of alumni,
        job listings, and career development resources. Whether you're looking to network, find a job, or advance in
        your current career,
        we're here to help. So why wait? Just login using University email and start taking advantage of all the
        benefits of being a part of our alumni community!</p>
    </div>









    <div class="right-box">
      <img class="logo" src="images/uiu_logo.png" alt="Logo" width="120px" height="100px">





      <form action="" style="max-width:500px;margin:auto" method="POST">

        <div class="input-container">
          <i class="fa fa-user icon"></i>
          <input class="input-field" type="text" placeholder="Student ID" name="id">
        </div>



        <div class="input-container">
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="password" placeholder="Password" name="password">
        </div>

        <button type="submit" class="btn" name="submit">Log in</button>
      </form>






      <br><br>
      <a href="recover_password.php">Forgot Password/ New User?</a>

      <br>

     
          <?php
          if($error==1)
          echo "<p style='color:red;background-color:#f4d6d2;padding:12px;'> Invalid Log in credentials !!! Please try again</p> ";
          

          ?>




    </div>




  </div>


  


 



 















</body>

</html>