<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/input.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">BloodPlus</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="Untitled-1.html" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Daftar Pesanan</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total Pesanan</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <span class="dashboard">Update Stok darah</span>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Rahmat Ferdiansyah</span>
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
        <div class="input">
            <div class="box">
                <select id="rs" name="rs">
                  <option value="RS ZA">RSUD Zainal Abidin</option>
                  <option value="RS Meuraxa">RSUD Meuraxa</option>
                  <option value="RS Harapan bunda">RS Harapan Bunda</option>
                  <option value="RS Harapan bunda">Rumah Sakit Kesdam Iskandar Muda</option>
                  <option value="RS Harapan bunda">Rumah Sakit Ibu dan Anak (RSIA) Aceh</option>
                  <option value="RS Meuraxa">RSUD Lainnya</option>
                </select>
                <div class="darah">
                    <h2>Golongan darah B</h2>
                </div>
              </div>
            <div><form action="b_za.php" method="POST">
                <br>
                <div class="col-5">
                    <label for="subject">Input jumlah kantung darah yang masuk</label>
                </div>
                <div class="col-25">
                    <input type="text"  name="jmlh_kantongdarah" style="width: 100%;">
                </div>
                <div class="col-5">
                    <label for="subject">stok darah yang dipesan</label>
                </div>
                <div class="col-25">
                    <input type="text"  name="stokdarah" style="width: 100%;">
                </div>
                <div class="col-5">
                    <label for="subject">stok darah yang dipakai RS</label>
                </div>
                <div class="col-25">
                    <input type="text" name="pakaidarah" style="width: 100%;">
                </div>
                <div class="row">
                    <br>
                    <input type="submit"value="Konfirmasi">
                  </div>
            </div></form>
        </div>
    </nav>

