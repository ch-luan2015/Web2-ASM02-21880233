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
  <title>Web2-ASM02-21880233</title>
</head>

<body>

  <!-- SideBar -->
  <section id="menu">
    <div class="logo">
      <img src="./images/stock.png" alt="logo" />
      <h2>Lập Trình Web 2</h2>
    </div>

    <div class="items">
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai01/index.php">Bài 01</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai02/index.php">Bài 02</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai03/index.php">Bài 03</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai05/index.php">Bài 04</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai05/index.php">Bài 05</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai06/index.php">Bài 06</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai07/index.php">Bài 07</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai08/index.php">Bài 08</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai09/index.php">Bài 09</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai10/index.php">Bài 10</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai11/index.php">Bài 11</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai12/index.php">Bài 12</a></li>
      <li><i class="fas fa-laptop"></i><a href="./21880233_Bai13/index.php">Bài 13</a></li>

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
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Họ và tên</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Nguyễn Chính Luận</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">MSSV</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">21880233</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">chinhluan2020@gmail.com</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Điện thoại</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">0366493649</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Blog</p>
                    </div>
                    <div class="col-sm-9">
                      <a href="https://chinhluan.io" class="text-muted mb-0 color-blue"><i class="fas fa-blog mr-2"></i>
                        chinhluan.io</a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Github</p>
                    </div>
                    <div class="col-sm-9">
                      <a href="https://github.com/ch-luan2015" class="text-muted mb-0"><i class="fab fa-github fa-lg mr-2" style="color: #333333;"></i>
                        ch-luan2015</a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0"> Facebook</p>
                    </div>
                    <div class="col-sm-9">
                      <a href="https://www.facebook.com/chinhluan" class="text-muted mb-0">
                        <i class="fab fa-facebook mr-2"></i>
                        facebook.com/chinhluan
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3">Nguyễn Chính Luận</h5>
                  <p class="text-muted mb-1">Hồ Chí Minh</p>

                </div>
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
