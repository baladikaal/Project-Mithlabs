<?php  
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - Mithlabs</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style-katalog.css">
</head>

<body>

    <div class="navbar-fixed">
        <nav class="katalog-nav orange lighten-3">
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

    <section id="kontak" class="kontak">
        <div class="container">
        <br>
            <h3 class="center">Our Catalogue</h3>
            <br>
            <div class="row">

            <?php 
                                $ambil=$koneksi->query("SELECT * FROM tbl_produk WHERE label_produk NOT IN ('Jangan Tampilkan')"); 
                            ?>
                            <?php while($perproduk=$ambil->fetch_assoc()) {  ?>


                            <div class="col m3 s6">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="pic-1" src="Foto Produk/<?php echo $perproduk['foto1_produk']; ?>">
                                            <img class="pic-2" src="Foto Produk/<?php echo $perproduk['foto2_produk']; ?>">
                                        </a>
                                        <span class="product-trend-label"><?php echo $perproduk['label_produk'];  ?></span>
                                        <ul class="social">
                                            <li><a href="<?php echo $perproduk['link_shoppe'];  ?>" data-tip="Shoppe"
                                                    target="_blank"><img src="images/shoppe.png"></a></li>
                                            <li><a href="<?php echo $perproduk['link_zalora'];  ?>" data-tip="Zalora"
                                                    target="_blank"><img src="images/zalora.png"></a></li>
                                            <li><a href="<?php echo $perproduk['link_blibli'];  ?>" data-tip="Blibli"
                                                    target="_blank"><img src="images/blibli.png"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="katalog_detail.php?id=<?php echo $perproduk['id_produk']  ?>" >
                                        <?php echo $perproduk['nama_produk'];  ?></a></h3>
                                    </div>
                                </div>
                            </div>

                            <?php }  ?>

            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    
</body>

<footer class="page-footer center">
    <h6>&#169; 2021, MyTeam.</h6>
</footer>


</html>