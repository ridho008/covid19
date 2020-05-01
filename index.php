<?php 

$url = file_get_contents('https://api.kawalcorona.com/indonesia/');
$data = json_decode($url, true);

// echo "Negara : " . $data[0]['name']. '<br>';
// echo "Positif : " . $data[0]['positif']. '<br>';
// echo "Sembuh : " . $data[0]['sembuh']. '<br>';
// echo "Meninggal : " . $data[0]['meninggal']. '<br>';
?>

<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" href="css/style.css">
<link href="fontawesome/css/all.css" rel="stylesheet">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>


<section class="showcase">
<div class="video-container">
	<video src="video/video.mov" autoplay muted loop></video>
</div>
<div class="content">
	<h2>Selamat Datang</h2>
	<h3>24 Jam Update Data Corona Indonesia</h3>
	<a href="#corona" class="btn">Read More</a>
</div>
</section>

<div class="container center-align" id="corona">
<div class="row">
<div class="col-s12">
	<section id="covid">
	<h1>Informasi Covid 19 Indonesia</h1>
	<p class="edukasi">
		Pengetahuan adalah segalanya. Pastikan berbagi informasi yang benar dengan keluarga, kerabat, rekan kerja dan lingkungan Anda. Mulai beraksi sekarang!.
	</p>
</section>
</div>
</div>
</div>

<div class="container">
<div class="row">

<div class="col s12 m4">
  <div class="card hoverable teal lighten-2">
    <div class="card-content center-align">
    	<i class="fas fa-sad-tear"></i>
      <span class="card-title">Positif</span>
      <div class="corona">
      <?php 
    		echo $data[0]['positif']. ' Orang';
    	 ?>
    	</div>
    </div>
    <div class="card-action">
      <!-- <a href="#">This is a link</a> -->
    </div>
  </div>
</div>

<div class="col s12 m4">
  <div class="card hoverable teal lighten-2">
    <div class="card-content center-align">
    	<i class="fas fa-heartbeat"></i>
      <span class="card-title">Sembuh</span>
      <div class="corona">
      <?php 
    		echo $data[0]['sembuh']. ' Orang';
    	 ?>
    	</div>
    </div>
    <div class="card-action">
      <!-- <a href="#">This is a link</a> -->
    </div>
  </div>
</div>

<div class="col s12 m4">
  <div class="card hoverable teal lighten-2">
    <div class="card-content center-align">
    	<i class="fas fa-skull-crossbones"></i>
      <span class="card-title">Meninggal</span>
      <div class="corona">
      <?php 
    		echo $data[0]['meninggal']. ' Orang';
    	 ?>
    	</div>
    </div>
    <div class="card-action">
      <!-- <a href="#">This is a link</a> -->
    </div>
  </div>
</div>

  </div>
</div>

<footer class="copyright center-align blue-grey darken-4">
	<i class="far fa-copyright"></i> Ridho Surya 2020
</footer>



<!-- <?php
echo "Negara : " . $data[0]['name']. '<br>';
echo "Positif : " . $data[0]['positif']. '<br>';
echo "Sembuh : " . $data[0]['sembuh']. '<br>';
echo "Meninggal : " . $data[0]['meninggal']. '<br>';

?> -->
	










<script defer src="fontawesome/js/all.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>