<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <div class="container-left">
      <img src="img/logo.svg" alt="form-login">
      <h1>BloodPlus - Pemesanan Darah</h1>
      <p>Order dan cek stock darah yang tersedia di Rumah Sakit terdekat.</p>
    </div>
    <div class="container-right">
      <h1>Silahkan Login</h1>
      <form action="cekLogin.php" method="post" class="expose">
        <div class="input">
          <label for="b">Username</label>
          <input type="text" name="username">
        </div>        
        <div class="input">
          <label for="a">Password</label>
          <input type="password" name="password">
        </div>
        <button type="submit">Masuk</button>
        <a href="register.html" >Daftar</a>
      </form> 
        
    </div>
  </div>
</body>
</html>