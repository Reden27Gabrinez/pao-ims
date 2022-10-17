<?php 
   session_start();
   include "configuration/config.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("includes/links.php"); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once("includes/navbar.php"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once("includes/sidebar.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <main id="view-panel" >
            <?php $page = isset($_GET['page']) ? $_GET['page'] :'dashboard'; ?>
            <?php include $page.'.php' ?>
        </main>
        <!-- footer -->
        <?php include_once("includes/footer.php"); ?>
    </div>
    <!-- ./wrapper -->

    <!-- modals for reports -->
    <?php include("modals/reports_equipment.php"); ?>

    <!-- REQUIRED SCRIPTS -->
    <?php include_once("includes/scripts.php"); ?>

</body>

</html>
<?php }else{
	header("Location: login.php");
} ?>