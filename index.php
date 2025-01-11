<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JPTS Online Clearance System - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style.css">
    <style>
      /* General Styling for Modern Look */
      body {
          font-family: 'Roboto', sans-serif;
          background-color: #f9f9f9;
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          animation: fadeIn 1s ease-in-out;
      }

      .container {
          background: #ffffff;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
          border-radius: 8px;
          padding: 20px 30px;
          max-width: 400px;
          width: 100%;
          box-sizing: border-box;
          animation: fadeIn 1.2s ease-in-out;
      }

      header {
          text-align: center;
          margin-bottom: 20px;
          animation: fadeIn 1.5s ease-in-out;
          background-color: #D1005E;
          padding: 10px;
      }

      header h1 {
          color: #fff;
      }

      .content h2 {
          text-align: center;
          margin-bottom: 20px;
      }

      .form-group {
          margin-bottom: 15px;
      }

      .form-group label {
          display: block;
          margin-bottom: 5px;
      }

      .form-group input {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
      }

      .form-group input:focus {
          border-color: #D1005E;
          outline: none;
      }

      .btn {
          width: 100%;
          padding: 10px;
          background-color: #D1005E;
          color: #fff;
          border: none;
          border-radius: 4px;
          cursor: pointer;
      }

      .btn:hover {
          background-color: #a8004a;
      }

      .forgot-password {
          text-align: center;
          margin-top: 10px;
      }

      .forgot-password a {
          color: #D1005E;
          text-decoration: none;
      }

      .forgot-password a:hover {
          text-decoration: underline;
      }

      footer {
          text-align: center;
          margin-top: 20px;
      }

      /* Animation Keyframes */
      @keyframes fadeIn {
          from {
              opacity: 0;
          }
          to {
              opacity: 1;
          }
      }
    </style>
</head>
<body>
    <div class="container">
      <header>
        <h1>JPTS Clearance System</h1>
      </header>

      <div class="content">
        <h2>Login</h2>
        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="student-id">Student ID</label>
            <input type="text" id="student-id" name="student-id" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
          </div>
          <button type="submit" name="submit" class="btn">Login</button>
        </form>
        <div class="forgot-password">
          <a href="#">Forgot Password?</a>
        </div>
      </div>

      <footer>
        <p>&copy; 2025 JPTS Clearance System</p>
      </footer>
    </div>
</body>
</html>