<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../Images/favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
<body>
    <meta charset="utf-8">
    <title>Contact Me</title>
  </head>
  <body>
    <?php echo "Hello World"; ?>
    <header>
      <nav>
        <div class="content">
          <h1>Contact Me</h1>
          <div class="links">
            <a href="../index.html">Home</a>
            <a href="Photos.html">Photos</a>
            <a href="#">Contact</a>
            <a class="instagram" href="https://www.instagram.com/ryan_sandison/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/Ryan_Sandison"><i class="fa fa-twitter"></i></a>
          </div>
          <i class="material-icons menu" onclick="menu()">menu</i>
        </div>
        <div class="dropdown w3-animate-top">
          <a href="../index.html">Home</a>
          <a href="Photos.html">Photos</a>
          <a href="#">Contact</a>
          <div class="Socials">
            <a class="instagram" href="https://www.instagram.com/ryan_sandison/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/Ryan_Sandison"><i class="fa fa-twitter"></i></a>
          </div>
        </div>
      </nav>
    </header>
    <main class="Cover-Photo w3-animate-opacity">
      <div class="form-container">
        <h1 class="form-title">Contact Me</h1>
        <div class="line"></div>
        <form>
          <div class="inputs">
            <input type="text" name="name" value="" placeholder="Name">
            <input type="text" name="Email" value="" placeholder="Email">
          </div>
          <div class="message">
            <textarea class="message-area" name="Message" placeholder="Need a photoshoot? message me with some details and i will get back to you."></textarea>
          </div>
          <div class="submit-button">
            <input type="submit" name="button" value="Send Message">
          </div>
        </form>
      </div>
    </main>
    <script src="../js/scripts.js" charset="utf-8"></script>
  </body>
</html>
