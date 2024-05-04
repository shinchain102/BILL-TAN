<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musication - Sleep</title>
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
      <h2 class="mb-4">Sleep Music</h2>

      <!-- Introduction Paragraph -->
      <p>
        Immerse yourself in the tranquility of our carefully curated sleep music. Designed to create a soothing ambiance, 
        these melodies aim to accompany you on your journey to a peaceful night's sleep. Let the gentle tunes guide you 
        into a realm of relaxation and serenity.
      </p>

      <!-- Music Cards -->
      <div class="card mb-4">
        <img src="sleep_music_1.jpg" class="card-img-top" alt="Sleep Music 1">
        <div class="card-body">
          <h5 class="card-title">Sleep Music 1</h5>
          <audio controls>
            <source src="sleep_music_1.mp3" type="audio/mp3">
            Your browser does not support the audio element.
          </audio>
        </div>
      </div>

      <!-- Repeat similar structure for other music files -->
      <!-- Add 5 music cards -->

    </div>
  </main>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>