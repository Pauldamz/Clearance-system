<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Clearance System - Dashboard</title>
    <link rel="stylesheet" href="src/style.css" />
    <style>
    header {
          text-align: center;
          margin-bottom: 20px;
          animation: fadeIn 1.5s ease-in-out;
          background-color: #D1005E;
          padding: 10px;
          border-radius: 8px;
      }
      
</style>
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Dashboard</h1>
      </header>

      <nav>
        <a href="dashboard.html" class="active">Dashboard</a>
        <a href="departments.html">Departments</a>
        <a href="profile.html">Profile</a>
        <a href="index.php">Logout</a>
        <a href="https://www.jptsportal.com/login.php">Official Dashboard</a>
      </nav>

      <div class="content">
        <h2>Welcome, Student!</h2>
        <p>Here's your clearance progress:</p>

        <div class="progress-bar">
          <div class="progress" style="width: 80%;">80%</div>
        </div>

        <h3>Clearance Status:</h3>
        <ul class="status-list">
          <li class="completed">Maintenace Fee - Cleared</li>
          <li class="completed">Admin Fee - Cleared</li>
          <li class="pending">Tuition Fee - Pending</li>
          <li class="not-started">Course Fee - Not Started</li>
          <li class="not-started">Hostel Fee - Not Started</li>
          <li class="completed">Graduation Fee - Cleared</li>
        </ul>

        <a href="departments.html" class="btn">Continue Clearance Process</a>
      </div>

      <footer>
        <p>&copy; JPTS 2023</p>
      </footer>
    </div>
  </body>
</html>
