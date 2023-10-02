<?php
require_once 'header.php';
?>

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">students</a></li>
            
              
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">
    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>All students</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Reg. No</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $result = mysqli_query($con, "SELECT * FROM `students`");
                            while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                                <tr>
                                    <td><?= ucwords($row['fname'] . " " . $row['lname'])  ?></td>
                                    <td><?= $row['roll'] ?></td>
                                    <td><?= $row['reg'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['username']; $row_action = $row['username']; ?></td>
                                    <td><?= $row['phone'] ?></td>
                                    <td><img src="<?= $row['image'] ?>" alt=""></td>
                                    <td><?= $row['status'] == 1 ? 'active' : 'inactive' ?></td>
                                    <td>
                                       <?php
                                        if ($row['status'] == 1) {

                                         
                                        ?> <a href="status_inactive.php?status=<?= base64_encode($row['status'])  ?> &username=<?=  $row_action  ?>" class="btn btn-primary"><i class="fa fa-arrow-up"></i></a>
                                           
                                        <?php
                                        } else {
                                        ?>
                                            <a href="status_active.php?status=<?= base64_encode($row['status'])  ?> &username=<?=  $row_action  ?>" class="btn btn-warning"><i class="fa fa-arrow-down"></i></a>
                                        <?php
                                        }
                                        ?>

                                    </td>


                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
require_once 'footer.php';
?>