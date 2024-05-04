<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musication - Rain</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?> <!-- Include the header section -->
  
  <main class="py-5">
    <div class="container">
      <h2 class="mb-4">Rain Music</h2>

      <!-- Introduction Paragraph -->
      <p>
        Immerse yourself in the calming ambiance of rain with our curated rain music collection. Let the soothing 
        sound of raindrops transport you to a peaceful state of mind. Whether you're looking for relaxation or 
        a cozy atmosphere, these melodies are your perfect companion during rainy days.
      </p>

      <!-- Music Cards -->
      <div class="card mb-4">
        <img src="rain_music_1.jpg" class="card-img-top" alt="Rain Music 1">
        <div class="card-body">
          <h5 class="card-title">Rain Music 1</h5>
          <audio controls class="audio-controls">
            <source src="rain_music_1.mp3" type="audio/mp3">
            Your browser does not support the audio element.
          </audio>
        </div>
      </div>

      <!-- Repeat similar structure for other music files -->
      <!-- Add 5 music cards -->

    </div>
  </main>

  <?php include('footer.php'); ?> <!-- Include footer -->
</body>
</html>