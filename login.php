<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musication - Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom CSS -->
  <link rel="stylesheet" href="style.css"> <!-- Updated CSS file reference -->
</head>
<body>
  <?php include 'header.php'; ?> <!-- Include the header section -->

  <main class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header custom-header"> <!-- Added custom-header class -->
              <h5 class="mb-0">Login to Musication</h5>
            </div>
            <div class="card-body">
              <?php
                // Check if form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // Retrieve username and password from the form
                  $username = $_POST["username"];
                  $password = $_POST["password"];

                  // Your authentication logic here
                  // Example: Check credentials against a database
                  // If credentials are valid, redirect user to homepage
                  // Otherwise, display an error message
                }
              ?>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>