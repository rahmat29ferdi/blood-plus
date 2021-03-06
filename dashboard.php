<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     <?php
     session_start();
     include 'connect.php';
     $faruq = mysqli_query($con, "SELECT * FROM tabel_stokdarah_za");
     $faruqp = mysqli_query($con, "SELECT * FROM tabel_stokdarah WHERE id_rumahsakit=3");
     $tampilp = mysqli_fetch_array($faruqp);
     
     $tampilfaruq = mysqli_fetch_array($faruq);
     
     ?>
   
    </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">BloodPlus</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Putri nazwa</span>
      </div>
      <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img class='bx bx-chevron-down' ></i>
        </div>
        <div class="menu">
          <ul>
            <li>
              <img src="" /><a href="#">My profile</a>
            </li>
            <li>
              <img src="" /><a href="#">Edit profile</a>
            </li>
            <li>
              <img src="" /><a href="login.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      
    </nav>

    <div class="home-content">
        <div>
            <div class="namars">
               <?= $tampilp['nama_rs'] ?>
            </div>
        </div>
      <div class="overview-boxes">
        <div class="box">
            <img class="pic" src="img/Asset 5.png"></img>

            <div class="right-side">
            <div class="box-topic">Golongan Darah A</div>
            <div class="number"><?php echo $tampilfaruq['stock_a'] ?> kantung</div>
            <div class="indicator">
              <a href="darah_a.php?id=<?= $tampilfaruq['id_rumahsakit'] ?> " class="text">Update Stok</a>
            </div>
          </div>
          
        </div>
        <div class="box">
            <img class="pic" src="img/Asset 6.png"></img>
          <div class="right-side">
            <div class="box-topic">Golongan Darah B</div>
            <div class="number"><?php echo $tampilfaruq['stock_b'] ?> Kantung</div>
            <div class="indicator">
              <a href="darah_b.php" class="text">Update Stok</a>
            </div>
          </div>
          
        </div>
        <div class="box">
            <img class="pic" src="img/Asset 7.png"></img>
          <div class="right-side">
            <div class="box-topic">Golongan Darah AB</div>
            <div class="number"><?php echo $tampilfaruq['stock_ab'] ?> kantung</div>
            <div class="indicator">
              <a href="darah_ab.php" class="text">Update Stok</a>
            </div>
          </div>
          
        </div>
        <div class="box">
            <img class="pic" src="img/Asset 8.png"></img>
          <div class="right-side">
            <div class="box-topic">Golongan Darah O</div>
            <div class="number"><?php echo $tampilfaruq['stock_o'] ?> kantung</div>
            <div class="indicator">
              <a href="darah_o.php" class="text">Update Stok</a>
            </div>
          </div>
          
        </div>
      </div>
      <script>
        function menuToggle() {
          const toggleMenu = document.querySelector(".menu");
          toggleMenu.classList.toggle("active");
        }
      </script>

      
