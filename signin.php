<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
</head>
<body >

    <?php
    function saveProfile($phone, $profile_password) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_info";
        
        $phone = strval( $phone );
      
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      
        $newProfile = TRUE;
        $sql = "SELECT `user-id`, `phone`, `password` FROM `profile info` ";
      
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {  
          //checks if the phone number already exists
          if ($row['phone'] == $phone) {
            $newProfile = FALSE;
          }
      
        }
      
        if ($newProfile == TRUE) {

          // adds new profile to DB
          $sql = "INSERT INTO `profile info` (`user-id`, `phone`, `password`) VALUES (NULL, '$phone', '$profile_password')";
          if ($conn->query($sql) === TRUE) {
      
            //Logs into personal account
            $sql = "SELECT `user-id`, `phone`, `password` FROM `profile info` ";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {  
              //finds matching ID
              if ($row['phone'] == $phone) {
                session_start();
                $_SESSION["profileID"] = $row['user-id'];
                header("Location: index.php");
              }
            }
          }
        } 
      
      
        $conn->close();
      }
    ?>





    <?php?>

        <div class="mainBody">
        
        <div class = "signIn">
            <h1>&nbsp;&nbsp;&nbsp;</h1>
            <h1>&nbsp;&nbsp;&nbsp;Sign in</h1>
            <div>
                <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <input class="signInInput" type="text" id="phone" name="phone" placeholder="Phone: 123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    <input class="signInInput" type="text" id="password" name="password" placeholder="Password" required>
                    </div>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No account? <a href="signup.php">Create account</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href="signup.php">forgot password</a></p>
                    <input class ="signInButton" type="submit" value="Next" name= "signup">
                </form>

            </div>

        </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['signup'])) {
            // collect value of input fields
            $phone = $_POST['phone'];
            $profile_password = $_POST['password'];
            saveProfile($phone, $profile_password);
        }
    ?>

    <div class="footer">
        &nbsp;
    </div>

    </body>

</html>