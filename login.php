<?php
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

   session_start();
   include("connection.php");

   if(isset($_POST['submit'])){
      $username = trim($_POST['student-id']); // Remove spaces
      $password = trim($_POST['password']);  // Remove spaces

      // Prepare the SQL statement
      $stmt = $conn->prepare("SELECT * FROM login WHERE username = ?");
      if ($stmt === false) {
          die('Prepare failed: ' . htmlspecialchars($conn->error));
      }

      // Bind parameters and execute
      $stmt->bind_param("s", $username);
      if (!$stmt->execute()) {
          die('Execute failed: ' . htmlspecialchars($stmt->error));
      }

      // Fetch the result
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
          $row = $result->fetch_array(MYSQLI_ASSOC);

          // Verify the password
          if (password_verify($password, $row['password'])) {
              $_SESSION['username'] = $username;
              header("Location: welcome.php");
              exit;
          } else {
              echo '<script>
                 alert("Login failed. Invalid username or password!");
                 window.location.href = "index.php";
              </script>';
              exit;
          }
      } else {
          echo '<script>
             alert("No user found with that username.");
             window.location.href = "index.php";
          </script>';
      }

      $stmt->close();
   }
?>