<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">

</head>
<body>


<?php


function savePost($userId, $data) {
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
  $date = date("Y-m-d");
  $sql = "INSERT INTO posts (`user-id`, `date`, `data`) VALUES ($userId, $date, $data)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $comment = $_POST['comment'];
  if (empty($comment)) {
      echo "post is empty";
  } else {
      savePost(1, $data);
  }
}
?>

  
<header>
  
  
  <h2>Posting Example</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>
</header>

<footer>
  <a href=home.html>New user? Sign Up</a>
  <?php
  echo "<p>Copyright &copy; 2021-" . date("Y") . "_______.com</p>";
  ?>
</footer>

<script src="login-form.js"></script>

</body>
</html>
