<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musication - Peace</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php include 'header.php'; ?> <!-- Include the header section -->
  
  <main class="py-5">
    <div class="container">
      <h2 class="mb-4">Peaceful Music</h2>

      <!-- Introduction Paragraph -->
      <p>
        Immerse yourself in a tranquil oasis of sound with our carefully curated peaceful music. These melodies 
        are designed to evoke a sense of serenity, providing a calming backdrop for relaxation and meditation. 
        Let the soothing tunes create an atmosphere of inner peace.
      </p>

      <!-- Music Cards -->
      <div class="card mb-4">
        <img src="peace_music_1.jpg" class="card-img-top" alt="Peace Music 1">
        <div class="card-body">
          <h5 class="card-title">Peace Music 1</h5>
          <audio controls class="audio-controls">
            <source src="peace_music_1.mp3" type="audio/mp3">
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