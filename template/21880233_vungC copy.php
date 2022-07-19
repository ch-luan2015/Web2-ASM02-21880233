<a href="/Web2-ASM02-21880233">
  <div class="logo">
    <img src="images/code-school.svg" alt="logo" />
    <h4>Lập Trình Web 2</h2>
  </div>

</a>
<div class="items">
  <ul>
    <?php
    $local_host = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    for ($i = 1; $i <= 13; $i++) {
      if ($i <= 9) {
        echo "<li><i class='fas fa-laptop'></i><a href='{$local_host}21880233_Bai0$i/index.php' >Bài $i</a></li>";
      } else {
        echo "<li><i class='fas fa-laptop'></i><a href='{$local_host}21880233_Bai$i/index.php'>Bài $i</a></li>";
      }
    }
    ?>
  </ul>


</div>
