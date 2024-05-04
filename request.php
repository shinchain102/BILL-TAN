<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musication - Request</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="lavender-background py-5"> <!-- Lavender background color -->
  </header>
<?php include 'header.php'; ?> <!-- Include the header section -->
  
  <main class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header custom-header"> <!-- Added custom-header class -->
              <h5 class="mb-0">Request-Form</h5>
            </div>
            <div class="card-body">
      <h2 class="mb-4">Request a Song</h2>

      <section class="request-form">
        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Check if all required fields are filled
          if (isset($_POST['song-title']) && isset($_POST['artist'])) {
            // Sanitize user input
            $song_title = htmlspecialchars($_POST['song-title']);
            $artist = htmlspecialchars($_POST['artist']);
            $additional_info = htmlspecialchars($_POST['additional-info']);

            // Process the request (you can replace this with your own logic)
            echo "<p>Thank you for your request!</p>";
            echo "<p>Song Title: $song_title</p>";
            echo "<p>Artist: $artist</p>";
            echo "<p>Additional Information: $additional_info</p>";
          } else {
            // If required fields are not filled, display an error message
            echo "<p>Please fill in all required fields.</p>";
          }
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group">
            <label for="song-title">Song Title:</label>
            <input type="text" class="form-control" id="song-title" name="song-title" required>
          </div>

          <div class="form-group">
            <label for="artist">Artist:</label>
            <input type="text" class="form-control" id="artist" name="artist" required>
          </div>

          <div class="form-group">
            <label for="additional-info">Additional Information:</label>
            <textarea class="form-control" id="additional-info" name="additional-info" rows="4"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>
      </section>
    </div>
  </main>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>