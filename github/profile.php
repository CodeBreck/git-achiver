<?php
session_start();

?>
<?php 
$servername="localhost";
$username="root";
$password="";
$database="forms";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
echo "connection is not done";
}
?>
<html><body>
<?php
if(isset($_SESSION['email'])){
//echo "session is sucessful";
//echo "<br>".$_SESSION['email'];
$email= $_SESSION['email'];
$query= "SELECT * FROM `codec` WHERE Email= '$email'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
while ($result = mysqli_fetch_assoc($data)) {
$place=$result['image'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>India</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">

<style>

  .front {
  background-position: center;  
  background-size: cover; 
  color: #fff;
  background-image: url("<?php echo $result['image']; ?>");
  background-size: cover;
  background-position: center;
  padding:  40px 40px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  
  font-family: 'Black Ops One', cursive;
}

.container ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #5C8374;
  position: fixed;
  top: 0;
  width: 100%;
}

 .container li {
  float: left;
  border-right: 1px solid #bbb;
}

.container li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.container li h3 {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
.container li a:hover {
  background-color: #111;
}

.container,.active {
  background-color: #4CAF50;
}
.container .left{
    float : right ;
    border-right: 1px solid #bbb
}
</style>

</head>
<body >
    
    <div class="container" >
    <ul>
       <li><h3><u>Web Genisis</u></h3></li>
      <li><a href="#">Home</a></li>
      <li><a href="#">Edit</a></li>
      <li><a href="#">Love</a></li>
      <li><a href="#">Smile</a></li>
      <!-- <li class="left"><input type="submit" value="LogOut" name="logout"></li> -->
      <!-- <li class="lefts"><i class="fa fa-search"></i></li> -->
    </ul>
           <div class="card">
           
        
            <div class="card-inner">

              
                   <div class="front"  background="<?php echo $result['image']; ?>" style="background-position: center;  background-size: cover; color: #fff;">
                   <background:url></background:url>
                   <h2><?php echo $result['Name'] ?></h2>
                    <p>UI-UX desiner</p>
                    <button>Know-me</button>
                </div>
              
                <div class="back">
                    <!-- <img src="/images/waving-hand.png" alt=""> -->
                    <h1>About<span>Me?</span></h1>
                    <p>Name: <span><?php echo $result['Name'] ?></span></p><br>
                    <p>Gender: <span><?php echo $result['Gender'] ?></span></p><br>
                    <p> Fathers Name: <span><?php echo $result['Father_Name'] ?></span></p><br>
                    <p>Mother's Name: <span><?php echo $result['Mother_Name'] ?></span></p><br>
                    <p>Email: <span><?php echo $result['Email'] ?></span></p><br>
                    <p>Mobile Number: <span><?php echo $result['MNumber'] ?></span></p><br>
                    <p>Country: <span><?php echo $result['Country'] ?> </span> &nbsp; State: <span> <?php echo $result['State']?></span></p>
                    <!-- <p>State: <span><?php echo $result['State'] ?></span></p> -->
                     <div class="row">
                        <div class="col">
                            <h2>12k</h2>
                            <p>followers</p>
                        </div>
                        <div class="col">
                            <h2>120</h2>
                            <p>following</p>
                        </div>
                        <div class="col">
                            <h2>12k</h2>
                            <p>likes</p>
                        </div>
                     </div>
                     <div class="row">
                        <button><a href="Session2.0.php" style="color: white"><?php echo "Logout"; session_unset(); session_destroy(); ?> </a></button>
                        <a href="https://www.instagram.com/"><img src=".\images\instagram.png" alt=""></a>
                        <a href="#"><img src=".\images\pinterest.png" alt=""></a>   
                          

                    </div>
                    </div>
            </div>
        </div>
    </div>
    <script>
      window.addEventListener("beforeunload", function() {
    if (Event.preventDefault) {
      Event.preventDefault();
    } else {
      Event.returnValue = false;
    }
    window.location = "Session2.0.php";
  });
    </script>
   
</body>
</html>
<?php }   ?>

<?php die(); } ?>
<!-- <div class="centered"><h1 class="ml8">
    <span class="letters-container">
      <span class="letters letters-left">Hi！</span>
      <span class="letters bang"></span>
    </span>
    <span class="circle circle-white"></span>
    <span class="circle circle-dark"></span>
    <span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
  </h1>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script></div>
  
</div> -->

