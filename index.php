<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">


</head>
<?php


   function load_posts() {
      $_SESSION["depth"] = $_SESSION["depth"] + 1;
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "user_info";
   
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);



      }
      
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "is anyone out there?", 3)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "Whats your favorite color?", 43)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "I love dogs", 4)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "whats your opinion on republicans?", 5)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "I have a craving for candy", 6)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "I have been up all night working on this project", 7)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "I really hope I get somewhere", 8)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "Hopefully the judges like our project", 15)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "3 redbulls later...", 3)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }
      $sql = 'INSERT INTO `posts` (`user-id`, `date`, `data`, `rating`) VALUES (1, 2021-03-07, "i love cats!", 21)';
      if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       }


      $sql = "SELECT `user-id`, `date`, `data`, `rating` FROM `posts` ";
      $result = $conn->query($sql);
      $i = 0;
      while($row = $result->fetch_assoc()) {  
         // goes through each post 1 by 1 in the right category
         if ($i > $_SESSION["depth"]) {
            return array($row[user-id], $row[date], $row[data], $row[rating]);
         }
         $i++;

      }
   }


?>


<body >

   <div class="header" >
      &nbsp;
  </div>

  <div class="mainBody">
      &nbsp;
      <div id="mySidenav" class="sidenav">
         <a href="signin.php"><h1>Profile</h1></a>
         <a href="#"><h1>Connect</h1></a>
         <a href="#"><h1>Messages</h1></a>
         <a href="#"><h1></h1></a>
         
      </div>
      <div class="content" >

         <div class="post" id=1 style="left: 10vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=2 style="left: 50vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=3 style="left: 90vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=4 style="left: 130vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=5 style="left: 170vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=6 style="left: 10vh; top: 50vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=7 style="left: 50vh; top: 50vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=8 style="left: 90vh; top: 50vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=9 style="left: 130vh; top: 50vh">
         <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                  ?>
               </div>
            </h3>
         </div>
         <div class="post" id=10 style="left: 170vh; top: 50vh">
            <h3 style="text-align: center">
               <?php
                  $temp = load_posts();
                  echo $temp[1], "<br><br>", $temp[2], "<br><br>";
               ?>
               <div class="post_likes">
                  <?php
                     echo "likes: ", $temp[3];
                     $conn->close();
                  ?>
               </div>
            </h3>
         </div>
            

            <img src="images\leftArrow.png" class = "scrollLeft" id = "LeftScroll" alt="leftArrow">
            <img src="images\rightArrow.png" class = "scrollRight" id = "RightScroll" alt="rightArrow">
            <img src="images\post.png" class = "post_bubble" alt="postBubble">   
         </div>
      </div>
   </div>



  <div class="footer">
      &nbsp;
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>

</body>

</html>