<!DOCTYPE HTML>
<html lang="hu">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>AUTÓ SHOP</title>

</head>
<body>
@include('includes/colorswitcher')
@include('includes/header')
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>BMW X5 2021</h1>
            <p>Tarts velem és találjuk számodra a nyerő autót! </p>
            <a href="#" class="btn">Olvasd tovább <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Legjobb választás <span>NÁLUNK</span></h2>
      <p>Nálunk találod a legjobb BMW-ket az országba</p>
    </div>
    <div class="row"> 
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Új BMW</a></li>
        </ul>
      </div>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">


< <div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=" "><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Benzin</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>350LE</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 ajtó</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href=" ">BMW M35 2020</a></h6>
<span class="price">21 000 000FT</span> 
</div>
<div class="inventory_info_m">
<p></p>
</div>
</div>
</div>




<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Dizel</li>
<li><i class="fa fa-calendar" aria-hidden="true"></i>450LE</li>
<li><i class="fa fa-user" aria-hidden="true"></i>5 ajtó</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="">BMW X6 2022</a></h6>
<span class="price">60 000 000FT</span> 
</div>
<div class="inventory_info_m">
<p></p>
</div>
</div>
</div>



<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href=""><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i>Elektromos</li>
<li><i class="fa fa-calendar" aria-hidden="true">500LE</i></li>
<li><i class="fa fa-user" aria-hidden="true"></i>3 ajtós</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="">BMW I8 2023</a></h6>
<span class="price">100 000 000FT</span> 
</div>
<div class="inventory_info_m">
<p></p>
</div>
</div>
</div>



       
      </div>
    </div>
  </div>
</section>
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>Évek az üzleti életben</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
            <p>Új autók eladva</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
            <p>Eladó használt autók</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
            <p>Elégedett ügyfelek</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Csak ma <span>NEM HOLNAP</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
      <div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div></div></div></div>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
@include('includes/footer')

<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
@include('includes/login')
@include('includes/registration')
@include('includes/forgotpassword')
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
</body>
</html>