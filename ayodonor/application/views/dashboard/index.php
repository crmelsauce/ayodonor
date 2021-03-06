<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - AYODONOR</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">

    <style>
        html,
        body {
            height: 100%;
        }

        .dashboard-container {
            min-height: 100%;
            position: relative;
            padding-bottom: 0 !important;
        }

        .title {
            color: black !important;
        }
        #header {
            height: unset;
            background: white;
            padding: 0;
        }

        .alert-secondary {
            background-color: #79101a;
            color: white;
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
                    <a class="scroll nav-link" href="<?= base_url('user'); ?>">PROFILE</a>
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

<!-- container -->

    <div class="dashboard-container">
        <div style="min-height: 100%;padding-bottom: 5rem;">
            <div class="alert alert-secondary">
                Selamat datang, <b><?= ucwords($loggedin['nama']) ?></b> !
            </div>
            <section id="header" class="mt-5">
                <div class="mx-auto mb-4 center">
                    <?php
                    echo '<div class="title-event">AYO DONOR</div>';
                    ?>
                </div>
            </section>
            <section class="event">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="title"><?= strtoupper($loggedin['nama']); ?> <span class="subtitle">&lt;<?=  sprintf("%06d", $loggedin['id_peserta']); ?>&gt;</span></div>
                            
                        </div>
                    </div>
                    <hr class="mt-5">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="title">DATA DIRI</div>
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="nama"><b><?= ucwords($loggedin['nama']); ?></b></div>
                            <ul class="info mt-2">
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Email</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;<?= $loggedin['email'] ?></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Nomor Telp</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;<?= $loggedin['noHP'] ?></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Instansi</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;<?= $loggedin['instansi'] ?></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Asal Daerah</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;<?= $loggedin['asal'] ?></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPeserta" data-nama="<?= $loggedin['nama'] ?>" data-id="<?= $loggedin['id_peserta'] ?>" data-instansi="<?= $loggedin['instansi'] ?>"data-email="<?= $loggedin['email'] ?>" data-noHP="<?= $loggedin['noHP'] ?>" data-asal="<?= $loggedin['asal'] ?>" >Edit</button>
        </div>
    </div>
    <!-- end main -->

    <!--Modal-->
<div class="modal fade" id="editPeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="pesertaEdit" action="<?= base_url('user/editPeserta') ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="instansi">instansi</label>
                            <input type="text" name="instansi" class="form-control" id="instansi" placeholder="instansi" value="">
                        </div>
                        <div class="form-group">
                            <label for="asal">asal</label>
                            <input type="text" name="asal" class="form-control" id="asal" placeholder="asal" value="">
                        </div>
                        <div class="form-group">
                            <label for="nohp">nohp</label>
                            <input type="text" name="nohp" class="form-control" id="nohp" placeholder="nohp" value="">
                        </div>
                        <input type="hidden" id="id_peserta" name="id_peserta" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" form="pesertaEdit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>
    <script type="text/javascript">
            $(document).ready(function() {
            // $('#ex1').zoom();
            $('#table').DataTable();
        })
            $('#editPeserta').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_peserta = button.data('id') // Extract info from data-* attributes
            var nama = button.data('nama') // Extract info from data-* attributes
            var email = button.data('email')
            var instansi = button.data('instansi')
            var asal = button.data('asal')
            var nohp = button.data('nohp')
            var status = button.data('status') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body #id_peserta').attr('value', id_peserta)
            modal.find('.modal-body #nama').val(nama)
            modal.find('.modal-body #email').val(email)
            modal.find('.modal-body #instansi').val(instansi)
            modal.find('.modal-body #asal').val(asal)
            modal.find('.modal-body #nohp').val(nohp)
            modal.find('.modal-body #status').val(status)
        })
    </script>
</body>

</html>