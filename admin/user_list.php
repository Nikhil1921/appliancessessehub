<?php $activeClass = 'user'; include("include/header.php"); ?>
  <main class="app-content">
    <div class="app-title"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="col-md-12">
                    <h3 class="tile-title">User List</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Mobile Number</th>
                              <th>Service</th>
                              <th>Address</th>
                              <th>City</th>
                              <th>Pincode</th>
                              <th>Warranty</th>
                              <th>Date</th>
                              <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                              $sql = $conn->prepare("SELECT * FROM user");
                              $sql->execute();
                              $result = $sql->get_result();
                              
                              foreach ($result->fetch_all(MYSQLI_ASSOC) as $i => $data):
                            ?>
                              <tr>
                                <td><?= $i+1;?></td>
                                <td><?= $data['name']; ?></td>
                                <td><?= $data['phone']; ?></td>
                                <td><?= $data['service']; ?></td>
                                <td><?= $data['address']; ?></td>
                                <td><?= $data['city']; ?></td>
                                <td><?= $data['pincode']; ?></td>
                                <td><?= $data['warranty']; ?></td>
                                <td><?= $data['date']; ?></td>
                                <td><?= $data['time']; ?></td>
                            </tr>
                            <?php
                              endforeach;
                              $sql->close();
                              $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </main>
<?php include("include/footer.php"); ?>