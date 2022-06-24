<?php
$conn = new mysqli("localhost", "root", "", "project int");
if($conn->connect_errno){
  echo "Failed to connect to MySQL: " . $conn->connect_error;
  exit();
}
$requestType = $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $admin_id = $_POST['admin_id'];
  $password = $_POST['password'];    
  $query =  "INSERT INTO admin VALUES('" . $admin_id . "', '" . $password . "')";
  $data = mysqli_query($conn,$query);
  if ($data) {
    ?>
    <script>
    alert("Details Uploaded Succesfuly")  
    </script>    
    <?php
       header("location: login.php");  
        }
        else{
            ?>
            <script>
                alert("Error Accoured While Uploading Details")
            </script>
            <?php
            }   
          }                  
     ?>