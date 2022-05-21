<?php
  $activeClass = 'home';
  include("include/header.php");
?>
  <main class="app-content">
    <div class="app-title"></div>

    <?php
      $sql = $conn->prepare("SELECT id FROM user");
      $sql->execute();
      $result = $sql->get_result();
      $sql->close();
      $conn->close();
    ?>
      <div class="col-md-4 col-lg-3">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
          <div class="info">
            <h4>User</h4>
            <p><b></b><?php echo $result->num_rows ?></b></p>
          </div>
        </div>
      </div>
  </main>
<?php include("include/footer.php"); ?>