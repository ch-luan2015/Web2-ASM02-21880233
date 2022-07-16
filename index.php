<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <title>Web2-ASM02-341734050</title>
</head>

<body>

  <!-- SideBar -->
  <section id="menu">
    <div class="logo">
      <img src="./images/stock.png" alt="logo" />
      <h2>Lập Trình Web 2</h2>
    </div>

    <div class="items">
      <li>
        <i class="fas fa-chart-pie"></i>
        <a href="index.html">Bai1</a>
      </li>
      <li>
        <i class="fab fa-uikit"></i>
        <a href="index.html">Bai2</a>
      </li>
      <li>
        <i class="fas fa-th-large"></i>
        <a href="products.html">Bai3</a>
      </li>

      <li>
        <i class="fas fa-chart-line"></i>
        <a href="help.html">Lien He</a>
      </li>
    </div>
  </section>

  <!-- Interface -->
  <section id="interface">
    <div class="navigation">
      <!-- Search -->
      <div class="n1">
        <div id="menu-btn">
          <i class="fas fa-bars"></i>
        </div>
        <div class="search">
          <i class="fas fa-search"></i>
          <form action="">
            <input type="text" placeholder="Search" />
          </form>
        </div>
      </div>

      <!-- Profile -->
      <div class="profile">
        <i class="far fa-bell"></i>
        <img src="./images/avatarGau.jpeg" alt="avatar" />
      </div>
    </div>

    <!-- Title -->
    <div class="container-fluid w-50 mt-5 mb-5">

      <h3 class="title">Vùng A</h3>

      <?php
      date_default_timezone_set("Asia/Ho_Chi_Minh");

      $timestamp = time();

      $today = date("d/m/y" . "-" . "h:ia", $timestamp);


      echo "<h3 class='title'>$today</h3>";

      ?>
    </div>
  </section>

  <!-- Footer -->
  <section id="footer">
    <h3 class="i-name">Vùng D</h3>
  </section>



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src=" https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <script>
    $("#menu-btn").click(function() {
      $("#menu").toggleClass("active");
    });
  </script>
</body>

</html>
