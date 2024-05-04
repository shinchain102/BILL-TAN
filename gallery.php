<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musication - Gallery</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #F4EDF8;"> <!-- Lavender background color -->
   <header class="lavender-background py-5"> <!-- Lavender background color -->
  </header>
  <?php include 'header.php'; ?> <!-- Include the header section -->
  <main class="py-5">
    <div class="container">
      <h2 class="mb-4" style="color: #4B3869;">Gallery</h2> <!-- Dark purple text color -->

      <!-- VIBGYOR Categories -->
      <section class="category">
        <h3>V - Violet</h3>
        <div class="row">
          <!-- Add 5 pictures for Violet category -->
          <!-- Replace the image URLs with your actual image URLs -->
          <?php
            // Example code for displaying images dynamically
            for ($i = 1; $i <= 5; $i++) {
              echo '<div class="col-md-4 mb-3">';
              echo '<img src="violet_image_' . $i . '.jpg" alt="Violet ' . $i . '" class="img-fluid">';
              echo '</div>';
            }
          ?>
          <!-- Add more images here -->
        </div>
      </section>

      <!-- Add more sections for other categories -->
    </div>
  </main>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>