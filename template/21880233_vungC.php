<div class="logo">
  <img src="/images/stock.png" alt="logo" />
  <h3>Lập Trình Web 2</h2>
</div>
<div class="items">
  <ul>
    <?php
    for ($i = 1; $i <= 13; $i++) {
      if ($i <= 9) {
        echo "<li><i class='fas fa-laptop'></i><a href='/21880233_Bai0$i/index.php' onclick='window.location.reload(true)'>Bài $i</a></li>";
      } else {
        echo "<li><i class='fas fa-laptop'></i><a href='/21880233_Bai$i/index.php' onclick='window.location.reload(true)'>Bài $i</a></li>";
      }
    }
    ?>
  </ul>


</div>
