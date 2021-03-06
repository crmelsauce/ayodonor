<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ganti Password - AYODONOR </title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">
    <style>
        .form {
            position: relative;
            z-index: 99;
        }
        html,
        body {
            height: 100%;
        }

        .dashboard-container {
            min-height: 100%;
            position: relative;
            padding-bottom: 0 !important;
        }
        @media only screen and (min-width: 992px) {

        .title {
            color: black !important;
        }

        .alert-secondary {
            background-color: #79101a;
            color: white;
        }

        .btn-secondary {
            background-color: #79101a;
        }

    </style>
</head>

<!-- navbar -->

<body id="dashboard">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary dashboard-nav">
        <div class="mesh"></div>
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>assets/img/logo1.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url(); ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('user'); ?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('user'); ?>/pengumuman">PENGUMUMAN</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('user'); ?>/daftarDonor">DAFTAR DONOR</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AKUN
                    </a>
                    <div class="dropdown-menu dashboard-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('user'); ?>/ganti_password">Ganti Password</a>
                        <a class="dropdown-item" href="<?= base_url('user'); ?>/logout">Logout</a>
                    </div>
                </li>
                <li class="nav-item ">

                </li>
            </ul>
        </div>
        <div class="footer">&copy; AyoDonor.com</div>
    </nav>

<!-- container  -->

    <div class="dashboard-container">
        <div style="min-height: 100%;padding-bottom: 5rem;">

            <div class="alert alert-secondary">
                Selamat datang, <b><?= $loggedin['nama']; ?></b> !
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col">
                        <h3 class="title">Ganti Password</h3>
                        <hr>
                    </div>
                </div>
                <?php
                if ($this->session->flashdata('message')) {
                    echo '<div class="alert alert-dark" role="alert">
                    ', $this->session->flashdata('message'), '
                </div>';
                } ?>
                <form class="form" action="ganti_password" method="POST" autocomplete="off" enctype="multipart/form-data" accept-charset="utf-8">

        <!-- basic table -->
        
                    <table border="0" width="120">
                        <tr>
                            <td>Sekarang</td>
                            <td width="900"><input type="password" class="material-input" name="password_current" required></td> 
                        </tr>
                        <tr>
                            <td>Baru</td>
                            <td><input type="password" class="material-input" name="password" required>
                                </td>                                 
                        </tr>
                        <tr>
                            <td>Konfirmasi Password</td>
                            <td><input type="password" class="material-input" name="password_confirmation" required></td>
                        </tr>
                        
                    </table>
                </form>
                <br>
                <button type="submit" class="btn btn-secondary">Ganti Password</button>
            
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>