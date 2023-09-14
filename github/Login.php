<?php

// ITS FOR SECTION START
session_start();
if ($_SESSION['email']!=NULL){
    header('location: profile2.php');
}
// $emil = S_SEE

?>
<?php
    // FOR SQL CONN CREATE
    $servername="localhost";
    $username="root";
    $password="";
    $database="forms";
    $con=mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        echo "Connection is failed".mysqli_error($con);
    }
    // else{
    //    echo "<script>alert('Connection is successful')</script>";
    // }
?>
     
     <!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>forms</title> 

  <link rel="stylesheet" href="./styles.css"> 

 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

     <h2>Sign In</h2> 

     <div class="form">
        <form action="#" method="post">

      <div class="inputBox"> 
            
       <input type="email" name="email" required> <i>Username</i> 

      </div> 

      <div class="inputBox"> 

       <input type="password" name="pass" required> <i>Password</i> 

      </div> 

      <div class="links"><a href="change.php">Forgot Password</a> <a href="register.php">Signup</a> 

      </div> 

      <div class="inputBox"> 

       <input type="submit" name="submit" value="Login"> 

      </div> 
</form>
     </div> 
 
    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

 </html>
 <!-- FOR LOGIN SECTION CREATE -->

<?php
 if(isset($_POST['submit'])){
    $username=$_POST['email'];
    $password=$_POST['pass'];
    //sql query to check whether the username and password are correct or not
    $sql="SELECT * FROM `codec` WHERE Email='$username' and Password= '$password'";
    $que=mysqli_query($con,$sql);
if(mysqli_num_rows($que)>0){
    $_SESSION['email']=$_POST['email'];
    $_SESSION['pass']=$_POST['pass'];
    // echo "<script>alert('login ok')</script>";
//  header("Location: profile2.php"); /* Redirect browser */
 
?>
<script>
    window.location = "profile2.php";//here double curly bracket
</script>
<?php
 }
 }

?>
















































<!-- 
<?php

error_reporting(0);
$query= "SELECT * FROM `codec`";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
//$result=mysqli_fetch_assoc($data);
 

//echo $total."<br>";
if($total >0){
    ?>
    <center>
    <table border="2">
        <tr>
        <th>Name</th>
        <th>Father_Name</th>
        <th>Mother_Name</th>
        <th>Phone_Number</th>
        <th>Country</th>
        <th>State</th>
        </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
    echo "
          <tr>
            <td>".$result['Name']."</td>
            <td>".$result['Father_Name']."</td>
            <td>".$result['Mother_Name']."</td>
            <td>".$result['MNumber']."</td>
            <td>".$result['Country']." </td>
            <td>".$result['State']."</td>    
        </tr>
    
    
 ";
    }
}else{
    echo "Table has no record";
}


    ?>
    </table>
</center>
 -->

