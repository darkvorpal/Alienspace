<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../stylesheets/style.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Boxicons CDN Link -->
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <title>Alienspace</title>
</head>

<body class="">
  <header>
    <nav>
      <div class="nav-bar">
        <span class="logo navLogo">
          <a href="index.php">
            <img src="../../stylesheets/contents/images/logo/logo.png" alt="" />
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <i class="bx bx-menu" id="btn"></i>
        </span>
        <div class="darkLight-searchBox">
          <span class="text-white">0</span>&nbsp;&nbsp;
          <img class="token-icon" src="../../stylesheets\contents\images\icones\03- Gold Token.png" alt="token icon" />
          <div class="dark-light">
            <i class="bx bx-moon moon"></i>
            <i class="bx bx-sun sun"></i>
          </div>
          <div class="searchBox">
            <div class="searchToggle">
              <i class="bx bx-x cancel"></i>
              <i class="bx bx-search search"></i>
            </div>
            <div class="search-field">
              <input type="text" placeholder="Search..." />
              <i class="bx bx-search"></i>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="sidebar">
      <?php if ($_SESSION == false) {
        echo` `;
      } else {
        echo ` 
            <div class="logo-details">
              <ul class="nav-list">
                <li class="profile">
                  <div class="profile-details">
                    <img src="../../stylesheets\contents\images\users\default-avatar.jpg" alt="profileImg" />
                    <div class="name_job">
                      <div class="name">Prem Shahi</div>
                      <div class="job">Web designer</div>
                    </div>
                  </div>
                  <i class="bx bx-log-out" id="log_out"></i>
                </li>
              </ul>
            </div>
          `;
      } ?>


      <ul class="nav-list">
        <li>
          <a href="dashboard.php">
            <i class="bi bi-columns-gap"></i>
            <span class="links_name">Tableau de bord</span>
          </a>
          <span class="tooltip">Tableau de bord</span>
        </li>
        <li>
          <a href="friend.php">
            <i class="bi bi-people"></i>
            <span class="links_name">Amis</span>
          </a>
          <span class="tooltip">Amis</span>
        </li>
        <li>
          <a href="chat.php">
            <i class="bx bx-chat"></i>
            <span class="links_name">Messages</span>
          </a>
          <span class="tooltip">Messages</span>
        </li>
        <li>
          <a href="fichier.php">
            <i class="bi bi-folder"></i>
            <span class="links_name">fichiers</span>
          </a>
          <span class="tooltip">fichiers</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-heart"></i>
            <span class="links_name">Favoris</span>
          </a>
          <span class="tooltip">Favoris</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-cog"></i>
            <span class="links_name">Setting</span>
          </a>
          <span class="tooltip">Setting</span>
        </li>
      </ul>
    </div>
  </header>