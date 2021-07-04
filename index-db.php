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
    <title>Mithlabs - Mithlabs.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navbar -->
    <div class="navbar-fixed">
        <nav>
            <!-- <nav class="orange lighten-3"> -->
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">
                        <img src="images/banner-black.png" width="110" height="auto">
                    </a>
                    <a href="#" data-target="mobile-side" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#catalogue">Catalogue</a></li>
                        <li><a href="#testi">Testimonial</a></li>
                        <li><a href="#medsos">Social Media</a></li>
                    </ul>
                </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-side">
        <li><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#catalogue">Catalogue</a></li>
        <li><a href="#testi">Testimonial</a></li>
        <li><a href="#medsos">Social Media</a></li>
    </ul>

    <div class="slider">
        <ul class="slides">
            <li>
                <?php 
                    $ambil=$koneksi->query("SELECT * FROM tbl_banner WHERE id_banner='1'"); 
                ?>
                <?php while($perproduk=$ambil->fetch_assoc()) {  ?>
                <img src="images/<?php echo $perproduk['foto_banner']; ?>">
                <div class="caption center-align">
                    <h3><b><?php echo $perproduk['slogan1_banner'];  ?></b></h3>
                    <h5 class="light grey-text text-lighten-3"><span><?php echo $perproduk['slogan2_banner'];  ?></span>
                    </h5>
                </div>
                <?php }  ?>
            </li>
            <li>
                <?php 
                    $ambil=$koneksi->query("SELECT * FROM tbl_banner WHERE id_banner='2'"); 
                ?>
                <?php while($perproduk=$ambil->fetch_assoc()) {  ?>
                <img src="images/<?php echo $perproduk['foto_banner']; ?>">
                <div class="caption left-align">
                    <h3><b><?php echo $perproduk['slogan1_banner'];  ?></b></h3>
                    <h5 class="light grey-text text-lighten-3"><span><?php echo $perproduk['slogan2_banner'];  ?></span>
                    </h5>
                </div>
                <?php }  ?>
            </li>
            <li>
                <?php 
                    $ambil=$koneksi->query("SELECT * FROM tbl_banner WHERE id_banner='3'"); 
                ?>
                <?php while($perproduk=$ambil->fetch_assoc()) {  ?>
                <img src="images/<?php echo $perproduk['foto_banner']; ?>">
                <div class="caption right-align">
                    <h3><b><?php echo $perproduk['slogan1_banner'];  ?></b></h3>
                    <h5 class="light grey-text text-lighten-3"><span><?php echo $perproduk['slogan2_banner'];  ?></span>
                    </h5>
                </div>
                <?php }  ?>
            </li>
        </ul>
    </div>

    <!-- Bagian About -->
    <section id="about" class="about white">
        <br>
        <div class="container">
        <div class="row">
                <br>
                <br>
                <div class="col m6 s12">
                    <div class="gambar center">
                        <img src="images/banner-black.png" width="100%" height="auto" alt="" 
                            data-aos="zoom-in" data-aos-duration="1000">
                    </div>
                </div>
                <div class="col m6 s12" data-aos="fade-up" data-aos-duration="1500">
                    <p class="tkami" style="text-align: justify;"><span>Hi WE ARE MITHLABS</span>. Dari sekian banyak kekayaan Indonesia, keindahan
                        kain khas Nusantara memang tiada tandingannya.
                        Vera Mitania merupakan salah satu yang terbius akan pesonanya. Berawal dari kesempatan untuk
                        berpindah dari satu daerah ke daerah lain di Indonesia,
                        Vera selalu menyimpan kain-kain tradisional yang didapatkan dari setiap daerah. Kualitas kain
                        terbaik, motif yang unik, serta perpaduan warna yang memikat menjadi daya tarik kain-kain etnik
                        Nusantara yang terlalu sayang dilewatkan.</p><a href="about.html" target="_blank"><span>more...</span></a>
                </div>
            </div>
        </div>
        <br>
    </section>

    <!-- parallax -->
    <div id="partner" class="parallax-container parlax-part">
        <div class="parallax img-part"><img src="images/3-cover.png"></div>
        <div class="container partner">
            <h2 class="center white-text" data-aos="zoom-in-up">Our Online Shop</h2>
            <br>
            <div class="row">
                <div class="col m4 s4 center">
                    <a href="https://shopee.co.id/mithlabscraft" target="_blank">
                        <img src="images/shoppe.png" data-aos="zoom-in">
                    </a>
                </div>
                <div class="col m4 s4 center">
                    <a href="https://www.zalora.co.id/mithlabs/" target="_blank">
                        <img src="images/zalora.png" data-aos="zoom-in">
                    </a>
                </div>
                <div class="col m4 s4 center">
                    <a href="https://www.blibli.com/brand/mithlabs" target="_blank">
                        <img src="images/blibli.png" data-aos="zoom-in">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Katalog -->
    <section id="catalogue" class="catalogue grey lighten-4">
        <div class="container" data-aos="zoom-in-up">
            <div class="row">
            <br>
                <h3 class="center" >Catalogue</h3>
                <hr>
                <br>
                <br>
                <?php 
                    $ambil=$koneksi->query("SELECT * FROM tbl_produk WHERE label_produk='Trend' OR label_produk='New' AND label_produk NOT IN ('Jangan Tampilkan')"); 
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
                                <li><a href="<?php echo $perproduk['link_shoppe'];  ?>" data-tip="Shopee"
                                        target="_blank"><img src="images/shoppe.png"></a></li>
                                <li><a href="<?php echo $perproduk['link_zalora'];  ?>" data-tip="Zalora"
                                        target="_blank"><img src="images/zalora.png"></a></li>
                                <li><a href="<?php echo $perproduk['link_blibli'];  ?>" data-tip="Blibli"
                                        target="_blank"><img src="images/blibli.png"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="katalog_detail.php?id=<?php echo $perproduk['id_produk']  ?>">
                            <?php echo $perproduk['nama_produk'];  ?></a></h3>
                        </div>
                    </div>
                </div>

                <?php }  ?>


            </div>
            <div class="center-align">
                <a href="katalog.php" target="_blank"><span>More</span></a>
            </div>
            <br>
        </div>


    </section>

    <section id="testi" class="testi" >
        <div class="container" data-aos="zoom-out">
            <br>
            <h3 class="center">See Our Testimonial Here!</h3>
            <br>
            <div class="row">
                <div class="col m12 s12">
                    <div class="card-panel">
                        <div class='embedsocial-stories' data-ref="83eecf73aa6ebf8327741ac8e7da0f574af59664"></div>
                    </div>
                </div>
            </div>
            
            <script>
                (function (d, s, id) {
                    var js;
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "https://embedsocial.com/embedscript/st.js";
                    d.getElementsByTagName("head")[0].appendChild(js);
                }(document, "script", "EmbedSocialStoriesScript"));
            </script>
            <br>
        </div>
    </section>


    <!-- medsos -->
    <section id="medsos" data-aos="zoom-in-up">
        <div class="container">
            <div class="row">
                <h3 class="center">Our Social Media</h3>
                <hr>
                <div class="jarak">
                    <div class="social-media">
                        <a href="https://web.facebook.com/Mithlabs" target="_blank" data-aos="zoom-out-right"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/mithlabs" target="_blank" data-aos="zoom-out"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/mithlabs/" target="_blank" data-aos="zoom-out-left"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script> 
        // untuk produk
        const fotoProduk = document.querySelectorAll(".product-grid");
        fotoProduk.forEach((img,i) => {
            img.dataset.aos = 'flip-left';
            img.dataset.aosDelay = i * 100;
            img.dataset.aosDuration = 1000;
        });
        
        AOS.init({
            once: true
        });
    </script>

</body>

<!-- footer -->
<footer class="page-footer center">
    <h6>&#169; 2021, 1D-Team.</h6>
</footer>

</html>