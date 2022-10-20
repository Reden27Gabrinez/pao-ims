
<?php

$query1  = mysqli_query($conn,"SELECT * FROM notifications");
$count_ = mysqli_num_rows($query1);

?>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">ADMINISTRATOR</a>
                </li>
            </ul>

            <!-- name-->
            <div style="margin-left:12rem; font-size: 1.5rem; font-weight:800;">
                PAO INFORMATION MANAGEMENT SYSTEM
            </div>


                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-danger navbar-badge"><?= $count_; ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <?php
                    $query  = "SELECT * FROM notifications ORDER BY timestamp DESC LIMIT 4";
                    $stmt   = $conn->prepare($query);
                    $stmt   ->execute();
                    $result = $stmt->get_result();
                    while($row = $result->fetch_assoc())
                    {
                        $timestamp = $row['timestamp'];
                        $today = date("F j, Y  g:i A", strtotime($timestamp));  
                ?>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                <img src="plugins/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    <?= $row['user']; ?>
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm"><?= $row['actions']; ?></p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?php echo $today; ?></p>
                                </div>
                                </div>
                                <!-- Message End -->
                            </a>

                            <div class="dropdown-divider"></div>
                    <?php
                      }
                        
                      $stmt->close();
                      // $conn->close();
                  ?>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                </ul>

        </nav>