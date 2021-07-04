<?php session_start();  ?>
<?php include 'koneksi.php'; ?>
<?php 

$idproduk = $_GET["id"];

$ambil = $koneksi->query("SELECT * FROM tbl_produk WHERE id_produk='$idproduk' ");
$detail = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $detail['nama_produk'];  ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style-detail.css">
</head>

<body>

    <div class="navbar-fixed">
        <nav class="about-nav">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center">
                    <img src="images/banner-black.png" width="110" height="auto">
                </a>
                <a href="#" data-target="mobile-side" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="index-db.php">Home</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-side">
        <li><a href="index-db.php">Home</a></li>
    </ul>

    <section id="produk" class="produk">
        <div class="container">
            <br>
            <div class="row">
            <br>
                <div class="col m7 s12">
                    <form action="">
                        <div class="card-panel center">
                            <h3><?php echo $detail['nama_produk'];  ?></h3>

                            <div class="row">
                                <div class="col m6 s6">
                                    <img src="Foto Produk/<?php echo $detail['foto1_produk']; ?>" class="responsive-img materialboxed" width="200">
                                </div>
                                <div class="col m6 s6">
                                    <img src="Foto Produk/<?php echo $detail['foto2_produk']; ?>" class="responsive-img materialboxed" width="200">
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-panel">
                            <h6>Description:</h6>
                            <p><?php echo $detail['desc_produk'];  ?></p>
                        </div>
                    </form>
                </div>
                <div class="col m5 s12">
                        <h5>Check-In Our Shop :</h5>
                        <br></br>
                        <div class="col m4 s4">
                            <div class="olshop">
                                <a href="<?php echo $detail['link_shoppe'];  ?>"  target="_blank">
                                    <img src="images/shoppe.png" width="80%">
                                </a>
                            </div>
                        </div>
                        <div class="col m4 s4">
                            <div class="olshop">
                                <a href="<?php echo $detail['link_zalora'];  ?>"  target="_blank">
                                    <img src="images/zalora.png" width="80%">
                                </a>
                            </div>
                        </div>
                        <div class="col m4 s4">
                            <div class="olshop">
                                <a href="<?php echo $detail['link_blibli'];  ?>"  target="_blank">
                                    <img src="images/blibli.png" width="80%">
                                </a>
                            </div>
                        </div>
                </div>
                <br></br>

            </div>
        </div>
    </section>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large orange">
            <i class="large material-icons">call</i>
        </a>
        <ul>
            <li>
                <a class="fa fa-whatsapp btn-floating green"
                    href="https://wa.me/6282299238723?text=Halo Admin, Saya ingin bertanya." target="_blank"
                    title="click to open whatsapp chat"></a>
            </li>
            <li>
                <a class="fa fa-whatsapp btn-floating green"
                    href="https://wa.me/6281316808779?text=Halo Admin, Saya ingin bertanya." target="_blank"
                    title="click to open whatsapp chat"></a>
            </li>
        </ul>
    </div>




    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
        const materialBox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialBox);
    </script>
</body>


</html>