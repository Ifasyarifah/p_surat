<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
 
    <title>Carousel Template for Bootstrap</title>
 
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
 
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .post
  {
  	margin-bottom:50px;
  	margin-top:50px;
  	text-align: center;
  } 
 
  </style>
  </head>
  <body>
 
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
    		<img src="assets/img/logo_warungbelajar.png" alt="logo" style="width:40px;">
  		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profil</a>
            </li>
			<li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
			        Kursus
			      </a>
			      <div class="dropdown-menu">
			        <a class="dropdown-item" href="#">HTML</a>
			        <a class="dropdown-item" href="#">CSS</a>
			        <a class="dropdown-item" href="#">PHP</a>
			        <a class="dropdown-item" href="#">MYSQL</a>
			        <a class="dropdown-item" href="#">JAVASCRIPT</a>
			        <a class="dropdown-item" href="#">JQUERY</a>
			      </div>
			</li>
          </ul>
          
        </div>
      </nav>
    </header>
 
    <main role="main">
 
      <div id="demo" class="carousel slide" data-ride="carousel">
 
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/img-1.jpg" alt="Gambar - 1" width="1280" height="700">
      <div class="carousel-caption">
        <h3>Slide 1</h3>
        <p>Deskripsi Slide 1</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/img-2.jpg" alt="Gambar - 2" width="1280" height="700">
      <div class="carousel-caption">
        <h3>Slide 2</h3>
        <p>Deskripsi Slide 2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/img-3.jpg" alt="Gambar - 3" width="1280" height="700">
      <div class="carousel-caption">
        <h3>Slide 3</h3>
        <p>Deskripsi Slide 3</p>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 
	<div class="container post">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/html.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Belajar HTML di Warung Belajar</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    </div>
                    <small class="text-muted">30 Part</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/CSS.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Belajar CSS di Warung Belajar</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    </div>
                    <small class="text-muted">30 Part</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/PHP.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Belajar PHP di Warung Belajar</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    </div>
                    <small class="text-muted">30 Part</small>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/MYSQL.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Belajar MYSQL di Warung Belajar</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    </div>
                    <small class="text-muted">30 Part</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/JAVASCRIPT.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Belajar Javascript di Warung Belajar</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                    </div>
                    <small class="text-muted">30 Part</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="assets/img/JQUERY.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Belajar Jquery di Warung Belajar</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Tampil</button>
                      </div>
                    <small class="text-muted">30 Part</small>
                  </div>
                </div>
              </div>
            </div>
 
 
            
        </div>
        </div>
        </main>
 
 
      
 
 
      <!-- FOOTER -->
      <footer class="container">
        <p style="text-align: center;">&copy; 2017-2018 Warung Belajar </p>
      </footer>
    
  </body>
</html>