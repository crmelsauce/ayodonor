<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Admin - AYODONOR</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">

    <style>
        .form {
            position: relative;
            z-index: 99;
        }

        .form-control{
            width: 50%;
        }

        #register .form {
            width: 80%;
        }
        h1 {
            color: grey;
            font-family: PlayfairDisplay, times, serif;
            font-size: 3rem;
            z-index: 1;
        }

        .site-header {
            background: #79101a;
        }
        .material-label{
            color: grey;
        }
    </style>
</head>

<body>

<!-- navbar -->

    <header class="site-header js-site-header">
        <nav class="navbar navbar-expand-lg navbar-black ftco_navbar bg-transparent ftco-navbar-transparent" id="ftco-navbar">
            <div class="container">
                <img src="<?= base_url(); ?>assets/img/logo1.png" width="120" alt="aaa">
                <a class="navbar-brand" href="index.php"><h1 style="color: white;">   AYODONOR</h1></a>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="scroll nav-link" href="<?= base_url(); ?>">HOME</a>
                        </li>
                        <li class="nav-item nav-login">
                            <a class="scroll nav-link" href="<?= base_url('Home/register'); ?>">REGISTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="scroll nav-link" href="<?= base_url('Home/artikel'); ?>">ARTIKEL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="register" class="d-flex flex-column justify-content-center">
        <div class="container">
        <?php
        if ($this->session->flashdata('message')) {
            echo '<div class="alert alert-dark" role="alert">
                    ', $this->session->flashdata('message'), '
                </div>';
        } ?>
        <form action="login" method="POST">
            <div>
                <h1>LOGIN ADMIN</h1>
            </div>
<!-- form group -->
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../../assets/js/main.js"></script>
    <script type="text/javascript" src="../../../assets/js/css3-animate-it.js"></script>
</body>