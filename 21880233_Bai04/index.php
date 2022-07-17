<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <title>Web2-ASM02-21880233</title>
</head>

<body>

  <!-- SideBar -->
  <section id="menu">
    <div class="logo">
      <img src="../css/styles.css" alt="logo" />
      <h2>Lập Trình Web 2</h2>
    </div>

    <div class="items">
      <li>
        <i class="fas fa-laptop"></i>
        <a href="index.html">Bài 01</a>
      </li>
      <li>
        <i class="fas fa-laptop"></i>
        <a href="index.html">Bài 02</a>
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

    <!-- A Area -->
    <div class="container-fluid">
      <?php
      date_default_timezone_set("Asia/Ho_Chi_Minh");
      $timestamp = time();
      $today = date("d/m/y" . " - " . "h:ia", $timestamp);

      echo "<h3 class='title'>$today</h3>";
      ?>
      <section style="background-color: #eee;" class="mt-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">

            </div>
            <div class="col-lg-4">
              <div class="card mb-4">

              </div>
            </div>
          </div>

        </div>
      </section>
    </div>

  </section>

  <!-- Footer -->
  <section id="footer">
    <h3 class="footer_title"> © <?php echo date("Y") ?> </h3>
    <h3 class="footer_title"> Nguyễn Chính Luận - 21880233 </h3>
    <h3 class="footer_title"> chinhluan2020@gmail.com</h3>

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
