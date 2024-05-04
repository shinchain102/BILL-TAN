<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Musication - Home</title>
  <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
  <script src="animations.js"></script>
  <header>
    <div class="logo">
      <img src="logo1.jpg">
    </div>
    <nav>
      <ul>
        <li class="current"><a href="#">Home</a></li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="quotes.php">Quotes</a></li>
        <li><a href="request.php">Request</a></li>
        <li><a href="about_us.php">Us</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <section class="intro">
      <div class="cover-pic">
        <img src="musication_cover.jpg" alt="Musication Cover" >
      </div>
      <div class="introduction">
        <h1>Welcome to Musication!</h1>
        <p>Welcome to Musication, a symphony of purposeful melodies tailored to elevate every facet of your life. Immerse yourself in a world where music is more than just notes—it's an experience crafted for specific moments. Need to boost your concentration? Dive into our Study sessions, where rhythmic vibrations orchestrate a focused ambiance. Drift into serenity with our Sleep playlist, a calming journey to release the tranquilizing embrace of a good night's sleep. Feel the rejuvenating vibes of Travel, let the Rain wash away stress, and discover ultimate tranquility in our Peace category, perfect for meditation. Musication: Your soundtrack to purposeful living. 🎶✨</p>
      </div>
    </section>

    <nav class="categories">
      <ul>
        <li><a href="sleep.php">Sleep</a></li>
        <li><a href="study.php">Study</a></li>
        <li><a href="travel.php">Travel</a></li>
        <li><a href="rain.php">Rain</a></li>
        <li><a href="peace.php">Peace</a></li>
        <!-- Add more categories -->
      </ul>
    </nav>

    <section class="feedback">
      <h2>Feedback</h2>
      <p>Let us know what you think!</p>
      <!-- Feedback form goes here -->
    </section>
  </main>

  <footer>
    <!-- Footer content goes here -->
    <div class="thank-you">
      <video src="thank_you_animation.mp4" autoplay loop muted></video>
    </div>
  </footer>
  <script src="animations.js"></script>
</body>
</html>