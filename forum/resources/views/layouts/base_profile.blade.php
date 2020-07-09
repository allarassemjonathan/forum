
@section('metas&links')

	<title>Profil</title>
	<!-- Font Awesome Icons -->
  	<link rel="stylesheet" href="css/plugins/fontawesome-free/css/all.min.css">
  	<!-- overlayScrollbars -->
  	<link rel="stylesheet" href="css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="css/dist/css/adminlte.min.css">
  	<!-- Google Font: Source Sans Pro -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
  <link rel="stylesheet" href="css/list.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="stylesheet" href="css/salon.css">
  <link rel="stylesheet" href="css/role.css" >
  
@show

<body class="hold-transition layout-top-nav">

@section('navprofile')
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-dark navbar-orange">
  <div class="container">
    <a href="../../index3.html" class="navbar-brand">
      <span class="brand-text font-weight-light">FJEED</span>
    </a>
    
    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
      <li class="nav-item">
        <a href="{{url('home')}}" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item">
        <a href="{{url('salons')}}" class="nav-link">Salons</a>
      </li>
      <li class="nav-item">
        <a href="{{url('departements')}}" class="nav-link">Departements</a>
      </li>
      <li class="nav-item">
        <a href="{{url('profile')}}" class="nav-link">Mon Profil</a>
      </li>

      <li class="nav-item">
        <a href="{{ url('annonces')}}" class="nav-link">Annonces</a>
      </li>
    </ul>
      <!-- SEARCH FORM -->
      <form class="form-inline ml-0 ml-md-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>

  </div>
</nav>




 
    <section class="content">
    

 
       <div class="b" style="padding-top:10px" >
       <div class="widget-user-image">
            <img class=" img-circle text-center mt-5" " 
                  style="margin-left:45%; width:10%;"
                  src="css/IMG_0142.jpg"
                       alt="User profile picture">
                       <h3 class=" text-center" style="color:orange"></h3></div>




<div class="text-center"> 
<li class="a">
<a href = "{{ url('profile/mes_departements') }}">
<b style="color:#FF8C00">Mes départements</b></a>
</li >


  <li class="a" >
<a href = "{{ url('profile/mes_salons') }}">
<b style="color:#FF8C00">Mes Salons </b></a>
</li >    
  
<li class="a" >
<a href = "{{ url('profile/profile') }}">
<b style="color:#FF8C00">Accueil</b></a>
</li > 


  <li class="a" >
<a href = "{{ url('profile/editer') }}">
<b style="color:#FF8C00">modifer</b></a>
</li >    
  

  <li class="a" >
<a href = "{{ url('profile/parametres') }}">
<b style="color:#FF8C00">Mes parametres</b></a>
</li >    
  

  <li  class="a">
<a href = "{{ url('profile/s') }}">
<b style="color:#FF8C00">Mon rôle</b></a>
</li >    
<br>
</div>
</div>


 <!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="css/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="css/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="css/dist/js/demo.js"></script>

@show

