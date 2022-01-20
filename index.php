<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style> 
		body {
			background-image: url("https://hiepsibaotap.com/wp-content/uploads/2020/06/Piltover.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	</style>
</head>
<body>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
	  <a class="navbar-brand" href="#">EZMusic</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Trending</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Top music
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Top V-Pops</a>
                      <a class="dropdown-item" href="#">Top K-Pops </a>
                      <a class="dropdown-item" href="#">Top US-UK</a>
                  </div>
              </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images\slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\slide2.jpg" alt="Second slide" style="height: 530px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\slide3.png" alt="Third slide">
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
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title" style="color: white;">New releases</h2>
		<div class="list-product-subtitle" style="color: white;">
			<p>You may like these new music</p>
		</div>
		<div class="product-group">
			<?php ?> 
			<?php
			include('connect.php')
			$sql = "SELECT * FROM music";
			$result = mysqli_query($connect, $sql);
			while($row_music = mysqli_fetch_array($result)){
				$musicID = $row_music['musicID']
				$musicName = $row_music['musicName']
				$musicLyrics = $row_music['musicLyrics']
				$musicImage = $row_music['musicImage']
				$musicAudio = $row_music['musicAudio']
			}  ?>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="images\<?php $musicImage ?>" alt="Enemy Cover" ; style="height: 280px">
					  <div class="card-body">
					    <h5 class="card-title">Enemy (Imagine Dragons x J.I.D)</h5>
					    <audio controls controlsList = "nodownload" ontimeupdate="myAudio(this)" style="width: 230px;"> 
					    	<source src="audio\<?php $musicAudio ?>" type="audio/mpeg">
					    	</audio>
					     <script type="text/javascript">
   								function myAudio(event){
    							if(event.currentTime>30){
    							event.currentTime=0;
    							event.pause();
    							alert("You have to pay for the whole song!")
    						}
    						}
   						</script>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="images\<?php $musicImage  ?>" alt="BIAD Cover">
					  <div class="card-body">
					    <h5 class="card-title">Burn It All Down (ft. PVRIS) </h5>
					    <audio controls controlsList = "nodownload" ontimeupdate="myAudio(this)" style="width: 230px;"> 
					    	<source src="audio\<?php $musicAudio ?>" type="audio/mpeg">
					    	</audio>
					     <script type="text/javascript">
   								function myAudio(event){
    							if(event.currentTime>30){
    							event.currentTime=0;
    							event.pause();
    							alert("You have to pay for the whole song!")
    						}
    						}
   						</script>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="images\<?php $musicImage ?>" alt="More Cover">
					  <div class="card-body">
					    <h5 class="card-title">K/DA - More ft. Madison Beer, (G)I-DLE, Lexie Liu, Jaira Burns, Seraphine</h5>
					    <audio controls controlsList = "nodownload" ontimeupdate="myAudio(this)" style="width: 230px;"> 
					    	<source src="audio\<?php $musicAudio ?>" type="audio/mpeg">
					    	</audio>
					     <script type="text/javascript">
   								function myAudio(event){
    							if(event.currentTime>30){
    							event.currentTime=0;
    							event.pause();
    							alert("You have to pay for the whole song!")
    						}
    						}
   						</script>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="images\<?php $musicImage ?>" alt="Baddest Cover">
					  <div class="card-body">
					    <h5 class="card-title">K/DA - The Baddest ft. (G)I-DLE, Bea Miller, Wolftyla</h5>
							<audio controls controlsList = "nodownload" ontimeupdate="myAudio(this)" style="width: 230px;"> 
					    	<source src="audio\<?php $musicAudio ?>" type="audio/mpeg">
					    	</audio>
					     <script type="text/javascript">
   								function myAudio(event){
    							if(event.currentTime>30){
    							event.currentTime=0;
    							event.pause();
    							alert("You have to pay for the whole song!")
    						}
    						}
   						</script>	    	    
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="images\<?php $musicImage ?>" alt="Pop star cover">
					  <div class="card-body">
					    <h5 class="card-title">K/DA - Pop/Stars (ft. Madison Beer, (G)I-DLE, Jaira Burns)</h5>
					    <audio controls controlsList = "nodownload" ontimeupdate="myAudio(this)" style="width: 230px;"> 
					    	<source src="audio\<?php $musicAudio ?>" type="audio/mpeg">
					    	</audio>
					     <script type="text/javascript">
   								function myAudio(event){
    							if(event.currentTime>30){
    							event.currentTime=0;
    							event.pause();
    							alert("You have to pay for the whole song!")
    						}
    						}
   						</script>
					  </div>
					</div>				
			</div>
		</div>
	</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>	