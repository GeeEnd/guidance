<?php include "php/reads.php" ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include 'includes/header.php'?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                            <div>
                                <h4 class="card-title">Your Reservation List</h4>
                                    </div>
                        <table id="example" class="table table-hover">
                                 <?php if (isset($_GET['success'])) { ?>
                                        <div class="alert alert-success" role="alert">
                                        <?php echo $_GET['success']; ?>
                                        </div>
                                        <?php } ?>
                                        <?php if (mysqli_num_rows($result)) { ?>
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Referral Reason</th>
                                            <th scope="col">Concern</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <!-- Enter your Code for READ here -->
                                            <?php 
                                                $i = 0;
                                                while($rows = mysqli_fetch_assoc($result)){
                                                $i++;
                                                ?>
                                                <tr>
                                                <th scope="row"><?=$i?></th>
                                                <td><?=$rows['studentName']?></td>
                                                <td><?php echo $rows['referalReason']; ?></td>
                                                <td><?php echo $rows['concern']; ?></td>
                                                <td><?php echo $rows['reserveDate']; ?></td>
                                                <td><?php echo $rows['reserveTime']; ?></td>
                                
                                               
                                                </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

    <?php include 'includes/footer.php'?>

</body>

</html>