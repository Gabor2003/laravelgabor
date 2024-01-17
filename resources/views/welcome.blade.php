<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- The viewport meta tag allows a device to make use of the responsive features of bootstrap.  Without this tag an iPhone for instance will view the file as if it were running on a PC -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/fbcbee1ea9.js"></script>
</head>

<body class="d-flex flex-column">

  <header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Car Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="termekek">Termékek<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Switch Account</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-left">
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Search</button>
            </form>
            <li class="nav-item">
            </li>
            <li class="nav-item">
              <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="cartDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-cart-arrow-down"></i>
						</a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cartDropdown">
                    <div id="cartDropdownItems"></div>
                    <a href="/checkout">
								<button class="btn btn-outline-info my-2 my-sm-0 right shoppingDropdownButton">
									Check Out
								</button>
							</a>
                  </div>
                </li>
              </ul>
            </li>
        </ul>

      </div>
    </nav>
  </header>
  
  <main role="main">
    <div class="container">
      <div class="jumbotron text-center shadow">
      <h1 class="display-3 mt-4">Welcome to the Car Shop</h1>
        <p class="lead">Here you can shop for various classic cars or brand new sports cars!</p>
      </div>
      <div class="row Carous">
        <div class="col-lg-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://jooinn.com/images/classic-cars-5.jpg" class="d-block w-100" alt="...">
              </div>
              
              <div class="carousel-item">
                <img src="https://rmsothebys-cache.azureedge.net/0/6/5/7/0/7/0657073051ca7a4b6b9cf253e53a56315039c027.jpg" class="d-block w-100" alt="...">
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
        </div>
      </div>
      <div class="shadow p-4 m-5 text-center">
      <h1 class="display-4">Explore our Website!<h1>
        <p class="lead">Our website has a ton to offer.</p>
        </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">About Us</h5>
              <p class="card-text">Read about our story building our collection and all about how are awesome company started.</p>
              <a href="#" class="btn btn-primary">About</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card  h-100">
            <img src="http://more.standard.net/wp-content/uploads/2016/09/newspaper-image.jpg" class="card-img-top" alt="bootstraplogo">
            <div class="card-body">
              <h5 class="card-title">Newsletter</h5>
              <p class="card-text">Subscribe to our newsletter to hear all about our amazing updates concerning new cars and about the company.</p>
              <a href="#" class="btn btn-primary">Join</a>
            </div>
          </div>
        </div>
    </div>
  </main>
  <footer class="footer navbar-dark bg-dark mt-auto py-3">
    <div class="container">
      <span class="text-muted">Place sticky footer content here.</span>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>