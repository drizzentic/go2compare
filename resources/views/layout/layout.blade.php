<!DOCTYPE html>
<html>
<head>
	<title>got2compare</title>

<link rel="stylesheet" type="text/css" href="/components/Materialize/dist/css/materialize.min.css">

<link rel="stylesheet" type="text/css" href="/components/font-awesome/css/font-awesome.min.css">
 
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Khand' rel='stylesheet' type='text/css'>


 <script type="text/javascript" src="/components/jquery/dist/jquery.min.js"></script>
   <script type="text/javascript" src="/components/Materialize/dist/js/materialize.min.js"></script>
   <script type="text/javascript" src="/components/jquery-ui/jquery-ui.min.js"></script>
 <script type="text/javascript" src="/js/jquery.steps.js"></script>

</head>
<body>
<div class="wrapper">

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<div class="navbar-fixed">
<nav id="mynavbar">
  <div class="nav-wrapper">
    <a href="/" class="brand-logo">g2c</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i>
</a>
    <ul class="right hide-on-med-and-down">
     <li><a href="/">Home</a></li>
      <li><a href="/#abtus">About Us</a></li>
      
       <li><a href="">Contact Us</a></li>
     
    </ul>

    <ul class="side-nav" id="mobile-demo">
        <li><a href="/">Home</a></li>
      <li><a href="/#abtus">About Us</a></li>
      
       <li><a href="">Contact Us</a></li>
      </ul>
  </div>
</nav>
</div>
        
   @yield('content')





<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Thank You!</h4>
      <p>You will be contacted soon by our agents</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
     <div class="row">

<h4 align="center">Select Insurance Cover</h4>
<div class="col m3">
  <div class="card small">
    <img src="/images/life.jpg" width="100%">
    <div class="card-content">
     <h5>Life Insurance</h5>
    </div>
  </div>
</div>

<div class="col m3">
  <div class="card small">
    <img src="/images/car5.jpg" width="100%">
    <div class="card-content">
     <h5>Accident Insurance</h5>
    </div>
  </div>
</div>

<div class="col m3">
  <div class="card small">
    <img src="/images/health.jpg" width="100%">
    <div class="card-content">
     <h5>Health Insurance</h5>
    </div>
  </div>
</div>

<div class="col m3">
  <div class="card small">
    <img src="/images/car6.jpg" width="100%">
    <div class="card-content">
     <h5>Car Insurance</h5>
    </div>
  </div>
</div>

</div>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
</div><!-- end of wrapper -->

<div class="push"></div>


    <footer class="page-footer" id="myfooter">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">go2compare</h5>
                <p class="grey-text text-lighten-4">text</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Pages</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Services</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contact Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Quotes</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2015 go2compare
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
        </footer>


  

<script type="text/javascript">
	
$(document).ready(function(){

   $(".button-collapse").sideNav();


$(".dropdown-button").dropdown();

 $('select').material_select();

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        
 $('.modal-trigger').leanModal();






 


});

</script>




</body>
</html>