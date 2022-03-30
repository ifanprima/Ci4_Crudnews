<!DOCTYPE html>
<html lang="en">

<div class="container">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD Berita</title>
        <style>
            .judul {
                text-align: center;
            }

            img {
                margin-left: 300px;
            }

            p {
                margin-left: 180px;
            }
        </style>
    </head>

    <body>
        <h1 class="judul">
            <p style="text-align: center;">
                <?= $berita['judul']; ?>
            </p>
        </h1>
        <figure class="figure">
            <img src="<?= base_url(); ?>/images/<?= $berita['sampul']; ?>" class="figure-img img-fluid rounded" alt="...">
        </figure>
        <br><br>
        <div>
            <h3>
                <p><?= $berita['isi']; ?></p>
            </h3>
        </div>
        <br>
        <a href="" style="margin-left: 650px;">by:<?= $berita['penulis']; ?></a>
        <a href="<?= base_url(); ?>/" class="btn btn-success">back</a>
    </body>

</div>

</html>