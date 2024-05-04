<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musication - Travel</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?> <!-- Include the header section -->

  <main class="py-5">
    <div class="container">
      <h2 class="mb-4">Travel Music</h2>

      <!-- Introduction Paragraph -->
      <p>
        Embark on a musical journey with our specially curated travel music. Immerse yourself in a blend 
        of melodies that complement the spirit of exploration. Let the tunes accompany you as you traverse 
        through diverse landscapes and create lasting memories on your adventures.
      </p>

      <!-- Music Cards -->
      <div class="card mb-4">
        <img src="travel_music_1.jpg" class="card-img-top" alt="Travel Music 1">
        <div class="card-body">
          <h5 class="card-title">Travel Music 1</h5>
          <audio controls class="audio-controls">
            <source src="travel_music_1.mp3" type="audio/mp3">
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