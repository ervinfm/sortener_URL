<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Ion Icon Package -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Chart  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Hello, world!</title>

</head>

<body style="background-color: #bdc3c7">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mabes Url Sortener</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link <?= $this->uri->segment(2) == 'index' ? 'active' : null ?>" href="<?= site_url('beranda/index') ?>"> Beranda </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $this->uri->segment(2) == 'riwayat' ? 'active' : null  ?>" href="<?= site_url('beranda/riwayat') ?>">Riwayat</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <img src="<?= base_url() ?>assets/img/1.png" style="max-width: 20px; border-radius:50%">
                            <span> <?= profil()->nama_depan ?> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="font-size:13px;">
                            <a class="dropdown-item" href="#">My Profil</a>
                            <a class="dropdown-item" href="#">Log Activity</a>
                            <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="content" style="min-height: 100vh; height:100%">
        <div class="container mt-3">
            <?= $contents ?>
        </div>
    </div>
    <footer class="page-footer font-small navbar-dark bg-dark" style="color:white; ">
        <div class=" footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"><span style="color:white">mabes.develover@gmail.com</span> </a>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>