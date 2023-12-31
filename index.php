<?php 
require("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profil Tugas Meilyanto</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
  <style>
    /* CSS untuk tampilan website */
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    header {
      background-color: #333;
      padding: 20px;
      text-align: center;
      color: #fff;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    h1 {
      margin-top: 0;
    }

    .profile-picture {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 20px auto;
      border: 5px solid #333;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #2196f3;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #1976d2;
    }
  </style>
</head>
<body>
  <header>
    <h1>Profil Tugas Meilyanto</h1>
  </header>
  <div class="container">
    <img src="profile_picture.jpg" alt="Tugas Meilyanto" class="profile-picture">
    <h2>Tugas Meilyanto</h2>
    <p>Seorang web developer yang berpengalaman dalam HTML, CSS, dan JavaScript. Ini tes php</p>
    <p>Saya memiliki minat dalam pengembangan frontend dan menciptakan pengalaman pengguna yang menarik.</p>
    <a href="portfolio.html" class="button">Lihat Portfolio</a>
  </div>

  <script>
    // JavaScript untuk interaksi
    var button = document.querySelector('.button');

    button.addEventListener('click', function() {
      alert('Portfolio sedang dalam pengembangan. Mohon tunggu!');
    });
  </script>
</body>
</html>