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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <?php include 'includes/topbar.php'?>
        <?php include 'includes/sidebar.php'?>

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
        <form action="php/create.php" method="post">

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title"><i class="mdi mdi-alarm-check"></i> New Appointment</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
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
                <!-- Row -->
                <div class="row">
                
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12">Full Name</label>
                                        <div class="col-md-12">
                                            <input id="studentName" name="studentName" type="studentName" placeholder="Name" 
                                            value="<?php if(isset($_GET['studentName']))
                                                            echo($_GET['studentName']); ?>" 
                                            class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Reasons for Referral</label>
                                        <div class="col-md-12">
                                            <textarea id="referalReason" name="referalReason" type="referalReason" rows="5" class="form-control"
                                            value="<?php if(isset($_GET['referalReason']))
                                                            echo($_GET['referalReason']); ?>" 
                                            required></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-md-12">Concern</label>
                                        <div class="col-md-12">
                                            <textarea id="concern" name="concern" type="concern" rows="5" class="form-control"
                                            value="<?php if(isset($_GET['concern']))
                                                            echo($_GET['concern']); ?>" 
                                            required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="col-md-12">Select Date (mm/dd/yyyy)</label>
                                        <div class="col-md-12">
                                        <span class="input-group-text"></span>
                                         <input id="reserveDate" name="reserveDate" type="date" placeholder="Date" 
                                            value="<?php if(isset($_GET['reserveDate']))
                                                            echo($_GET['reserveDate']); ?>" class="form-control" required>
                                     <span class="input-group-text"></span>
                                         <input id="reserveTime" name="reserveTime" type="time" placeholder="Time" 
                                            value="<?php if(isset($_GET['reserveTime']))
                                                            echo($_GET['reserveTime']); ?>" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button name="create" class="btn btn-success text-white">Submit</button>
                                        </div>
                                    </div>

                                    <?php include 'myappointment.php'?>
                                   
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
      
    </form>

</div>



        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
  
    <?php include 'includes/footer.php'?>
</body>

</html>