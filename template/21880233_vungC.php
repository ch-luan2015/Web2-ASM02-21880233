<a href="/">
  <div class="logo">
    <img src="/images/code-school.svg" alt="logo" />
    <h4>Lập Trình Web 2</h2>
  </div>

</a>
<div class="items">
  <ul>
    <?php
    for ($i = 1; $i <= 13; $i++) {
      if ($i <= 9) {
        echo "<li><a href='/21880233_Bai0$i/index.php'><i class='fas fa-laptop'></i>Bài $i</a></li>";
      } else {
        echo "<li><a href='/21880233_Bai$i/index.php'><i class='fas fa-laptop'></i>Bài $i</a></li>";
      }
    }
    ?>
  </ul>


</div>
