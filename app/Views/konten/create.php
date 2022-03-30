<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Berita</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/chosen.min.css">
    <link rel="stylesheet" href="css/jquery-te-1.4.0.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->

    <!-- ================================
            START HEADER AREA
================================= -->



    <!-- input -->
    <div class="block-card mb-4">
        <div class="block-card-header">
            <h2 class="widget-title">Tambah Berita</h2>
            <div class="stroke-shape"></div>
        </div><!-- end block-card-header -->
        <div class="block-card-body container">
            <form method="post" action="<?= base_url('/berita/save'); ?>" class="form-box row" enctype="multipart/form-data">
                <div class="col-lg-12">
                    <div class="input-box">
                        <label class="label-text">Judul <span class="text-gray font-size-12">(optional)</span></label>
                        <div class="form-group">
                            <span class="la la-envelope form-icon"></span>
                            <input type="text" name="judul" placeholder="Masukan Judul!" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('judul'); ?>">
                            <p class="invalid-feedback">
                                <?= ($validation->getError('judul')) ?>
                            </p>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="input-box">
                        <label class="label-text">Sampul<span class="text-gray font-size-12">(optional)</span></label>
                        <div class="form-group">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control" type="file" name="sampul" id="cosngencos" placeholder="Masukan gambar!" autofocus value="<?= old('sampul'); ?>">
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-12">
                    <div class="input-box">
                        <label class="label-text">Penulis<span class="text-gray font-size-12">(optional)</span></label>
                        <div class="form-group">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control" type="text" name="penulis" placeholder="Masukan nama anda!" autofocus value="<?= old('penulis'); ?>">
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-12">
                    <div class="input-box">
                        <label class="label-text">Isi<span class="text-gray font-size-12">(optional)</span></label>
                        <div class="form-group">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control" type="text" name="isi" placeholder="No Hoax!" autofocus value="<?= old('isi'); ?>">
                            <span class="font-size-12 font-weight-medium"></span>
                        </div>

                        <div class="btn-box mt-4">
                            <button type="submit" class="theme-btn gradient-btn border-0">Create</button>
                            <a href="<?= base_url(); ?>/" class="theme-btn gradient-btn border-0">Back</a>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
            </form>
        </div>


        <!-- Template JS Files -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/chosen.min.js"></script>
        <script src="js/datedropper.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery-te-1.4.0.min.js"></script>
        <script src="js/jquery.MultiFile.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&libraries"></script>
        <script src="js/map-add.js"></script>
        <script src="js/main.js"></script>
</body>

</html>