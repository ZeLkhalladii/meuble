<?php
$hostname = "localhost";
$username = "root";
$password = "mysql";
$dbname = "meuble";

$conn = new mysqli($hostname, $username, $password, $dbname);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="page.css">
</head>
<body>
    <div id="container">  
        <div class="mockup">
        <div class="top" style="display: flex; justify-content: space-between;">
            <img class="logo" src="https://www.uplabs.com/logos/uplabs/default--color.svg">
            <div id="notification" style=" margin-right: 20px;">
                <button style="height: 40px; width: 100px;border: none; background-color: black;"><a href="login.php" style="color: white; text-decoration: none;">Signin</a></button>
                <button style="height: 40px; width: 100px;border: none; background-color: black;"><a href="login.php" style="color: white; text-decoration: none;">Signup</a></button> 
            </div>
          </div>
          <div class="outer-search">
            <div class="search-filter">
            <div class="search-container">
              <i class="fa fa-search" style="padding: 10px; font-size: 20px;"></i>
              <input type="text" id="search" placeholder="Search"/>
            </div>
            
          </div>
          </div>
          <div class="feeds" id="feeds">

            <div class="today s-2">
              <h1>Today</h1>
            <!-- =======  start card image =============-->
         
             
              <?php
              $posts = "SELECT * FROM login;";
              $all_posts = mysqli_query($conn, $posts);
                while ($row = mysqli_fetch_array($all_posts)) {
                //  <!-- if ($row['written_by'] == $username){ -->
                    //  echo "Username: " . $username;
                     echo "
                     <div class='card'>
                      <img src='".$row['image']."'  height='300px'/>
                      <div class='card-footer'>
                        <div class='card-info'>
                          <h4>'".$row['username']."'</h4>
                          <span class='card-maker'></span>
                        </div>
                      </div>
                    </div>";
                }
                 ?>
            <!-- ======= end card image =============-->
            </div>
          </div>
        </div>
      </div>
    
</body>
</html>