<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'intern_project');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form

      $admin_id = mysqli_real_escape_string($db,$_POST['admin_id']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM admin WHERE admin_id = '$admin_id' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      if ($row) {
          header("location: Home1.html");
?>

  <?php
      }
      else{
          ?>
          <script>
              alert("Failed to Login");
          </script>
  <?php
      }
  }
  ?>