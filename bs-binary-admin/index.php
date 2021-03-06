<?php
session_start();
$koneksi = new mysqli("localhost","root","","db_myweb");

if (!isset($_SESSION['admin'])) 
{
  echo "<script>alert ('LOGIN TERLEBIH DAHULU !!');</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Binary Admin : Mithlabs</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Binary admin</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/logo.png" class="user-image img-responsive" />
                    </li>


                    <li><a href="index.php"><i class="fa fa-home fa-3x"></i> HOME</a></li>
                    <li><a href="index.php?halaman=produk"><i class="fa fa-bookmark fa-3x"></i> PRODUK</a></li>
                    <li><a href="index.php?halaman=banner"><i class="fa fa-folder fa-3x"></i> BANNER</a></li>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-mail-reply fa-3x"></i> LOGOUT</a></li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=='produk')
                    {
                        include 'produk.php';
                    }
                    if ($_GET['halaman']=='banner')
                    {
                        include 'banner.php';
                    }
                    elseif ($_GET ['halaman']=='addproduk')
                    {
                        include 'addproduk.php';
                    }
                    elseif ($_GET ['halaman']=='hapusproduk')
                    {
                        include 'hapusproduk.php';
                    }
                    elseif ($_GET ['halaman']=='ubahdataproduk')
                    {
                        include 'ubahdataproduk.php';
                    }
                    elseif ($_GET ['halaman']=='ubahbanner')
                    {
                        include 'ubahbanner.php';
                    }
                    elseif ($_GET ['halaman']=='upload_produk')
                    {
                        include 'upload_produk.php';
                    }
                    elseif ($_GET['halaman']=='logout') 
                    {
                        include 'logout.php';
                    }
                    

                }
                else
                {
                    include 'home.php';
                }

                ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

    <!-- extension responsive -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>



    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                responsive: true
            });
        });
    </script>


</body>

</html>