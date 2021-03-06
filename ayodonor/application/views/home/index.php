<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Home - AYODONOR</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
	<style>
		.btn-primary {
			background-color: #565e67;
			border-color: #79101a;
		}


		a {
			color: black;
		}

		.site-header {
			background-color: #79101a;
			position: fixed;
			top: 0;
			position: fixed;
			width: 100%;
			z-index: 20;
		}

		h1 {
            color: white;
            font-family: PlayfairDisplay, times, serif;
            font-size: 3rem;
            z-index: 1;
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
							<a class="scroll nav-link" href="<?= base_url('Home/login'); ?>">
								<?php
								if ($this->session->userdata('email')) {
									echo "DASHBOARD";
								} else
									echo "LOGIN";
								?>
							</a>
						</li>
						<li class="nav-item">
							<a class="scroll nav-link" href="<?= base_url('Home/artikel'); ?>">ARTIKEL</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>


    <section class="site-hero overlay" style="background-image: url(<?php echo base_url();?>assets/img/check.jpg)" data-stellar-background-ratio="0.5">
    	<div class="container">
			<section id="header" class="animatedParent">
				<div class="title animated fadeIn slower" >Welcome!</div> 
					<p class="tagline animated fadeIn slower">
						THANKYOU FOR BEING LIFESAVER
					</p>
				<div class="explore-btn animated fadeIn slower">
					<a href="#o" class="btn">KNOWLEDGE</a>
				</div>
			</section>
		</div>
	</section>


	<section id="o" class="animatedParent">
		<div class="left-side animated fadeIn slower">
			<div>
				<div class="logo">
					<img src="<?= base_url(); ?>assets/img/O.jpg">
				</div>
			</div>
		</div>
		<div class="right-side animated fadeIn slower">
			<div class="title">Golongan Darah O</div>
			<div class="bottom-line"></div>
			<div class="desc">
				Individu dengan golongan darah O memiliki sel darah tanpa antigen, tapi memproduksi antibodi terhadap antigen A dan B. Sehingga, orang dengan golongan darah O-negatif dapat mendonorkan darahnya kepada orang dengan golongan darah ABO apapun dan disebut donor universal. Namun, orang dengan golongan darah O-negatif hanya dapat menerima darah dari sesama O-negatif.
			</div>
			<div class="readmore-btn">
				<a href="https://schematics.its.ac.id/a" class="btn" style="margin-right: 15px;">SELENGKAPNYA</a>
			</div>
		</div>
	</section>

<!-- animasi css  -->

	<section id="a" class="animatedParent">
		<div class="left-side order-lg-12 animated fadeIn slower">
			<div>
				<div class="logo">
					<img src="<?= base_url(); ?>assets/img/A.jpg">
				</div>
			</div>
		</div>
		<div class="right-side animated fadeIn slower">
			<div class="title">Golongan Darah A</div>
			<div class="bottom-line"></div>
			<div class="desc">
				Individu dengan golongan darah A memiliki sel darah merah dengan antigen A di permukaan membran selnya dan menghasilkan antibodi terhadap antigen B dalam serum darahnya. Sehingga, orang dengan golongan darah A-negatif hanya dapat menerima darah dari orang dengan golongan darah A-negatif atau O-negatif.
			</div>
			<div class="readmore-btn">
				<a href="https://schematics.its.ac.id/a" class="btn" style="margin-right: 15px;">SELENGKAPNYA</a>
			</div>
		</div>
	</section>

	<section id="b" class="animatedParent">
		<div class="left-side animated fadeIn slower">
			<div>
				<div class="logo">
					<img src="<?= base_url(); ?>assets/img/b.jpg">
				</div>
			</div>
		</div>
		<div class="right-side animated fadeIn slower">
			<div class="title">Golongan Darah B</div>
			<div class="bottom-line"></div>
			<div class="desc">
				Individu dengan golongan darah B memiliki antigen B pada permukaan sel darah merahnya dan menghasilkan antibodi terhadap antigen A dalam serum darahnya. Sehingga, orang dengan golongan darah B-negatif hanya dapat menerima darah dari orang dengan dolongan darah B-negatif atau O-negatif</div>
			<div class="readmore-btn">
				<a href="https://schematics.its.ac.id/a" class="btn">SELENGKAPNYA</a>
			</div>
		</div>
	</section>

	<section id="ab" class="animatedParent">
		<div class="left-side order-lg-12 animated fadeIn slower">
			<div>
				<div class="logo">
					<img src="<?= base_url(); ?>assets/img/AB.png" alt="logo" />
				</div>
			</div>
		</div>
		<div class="right-side animated fadeIn slower">
			<div class="title">Golongan Darah AB</div>
			<div class="bottom-line"></div>
			<div class="desc">
				Individu dengan golongan darah AB memiliki sel darah merah dengan antigen A dan B serta tidak menghasilkan antibodi terhadap antigen A maupun B. Sehingga, orang dengan golongan darah AB-positif dapat menerima darah dari orang dengan golongan darah ABO apapun dan disebut resipien universal. Namun, orang dengan golongan darah AB-positif tidak dapat mendonorkan darah kecuali pada sesama AB-positif.
			</div>
			<div class="readmore-btn">
				<a href="https://schematics.its.ac.id/a" class="btn">SELENGKAPNYA</a>
			</div>
		</div>
	</section>

<!-- carousel -->
	<section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
		  	<div class="carousel-inner">
		    	<div class="carousel-item active">
		      		<img src="<?= base_url(); ?>assets/img/dd1.png" class="d-block w-100" alt="...">
		        	<div class="carousel-caption d-none d-md-block">
		        		<h1 class="display-4">STOCK DARAH<br> <span class="font-weight-bold">PMI JAKARTA</span></h1>
		        		<hr class="my-4">
		        		<a class="btn btn-primary btn-lg font-weight-bold" href="http://www.infoutdpmidki.com:5900/Webinfo/LogibockDarah" role="button">KUNJUNGI</a>
		      		</div>
		    	</div>
		    

		    <div class="carousel-item">
		      	<img src="<?= base_url(); ?>assets/img/dd3.jpg" class="d-block w-100" alt="...">
		        	<div class="carousel-caption d-none d-md-block">
		        		<h1 class="display-4">STOCK DARAH<br> <span class="font-weight-bold">PMI BANDUNG</span></h1>
		        		<hr class="my-4">
		        		<a class="btn btn-primary btn-lg font-weight-bold" href="https://pmikotabandung.org/" role="button">KUNJUNGI</a>
		      		</div>
		    </div>
			</div>
		 	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
		    	<span class="sr-only">Next</span>
		  	</a>
	</section>
</body>


<!--START FOOTER-->

    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="<?= base_url('home/syarat_donor'); ?>">Syarat & Ketentuan Donor</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
        
              <li><a href="#">Tentang kami</a></li>
              <li><a href="#">Hubungi kami</a></li>
              
            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
            <p><span class="iconify" data-icon="ic:baseline-location-on" data-inline="false"></span>Alamat:</span> <span> <br>  Bandung</span></p>
            <p><span class="iconify" data-icon="twemoji:telephone-receiver" data-inline="false"></span>Telepon:</span> <span> <br>  (+1) 435 3533</span></p>
            <p><span class="iconify" data-icon="ion-ios-mail" data-inline="false"></span> Email:</span> <span> ayodonor@domain.com</span></p>
          </div>
         
            </form>
          </div>
        </div>
        <div class="row pt-5">
          <p class="col-md-6 text-center">
           
            AyoDonor &copy;<script>document.write(new Date().getFullYear());</script>  <i class="icon-heart-o" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank" ></a>
            
          </p>
        
        </div>
      </div>
    </footer>

<!--END FOOTER-->

	<!-- SCRIPT HERE -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="<?= base_url(); ?>assets/js/main.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>