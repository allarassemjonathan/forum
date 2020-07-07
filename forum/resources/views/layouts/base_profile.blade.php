

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

<body class="hold-transition layout-top-nav">
<!-- -->@section('bar')
<div align="center" style="background-color:orange; height:50px">
<h4 style="padding-top:5px">mon profile</h4>
</div>
<!-- -->@show
  <!-- /.navbar -->
   <!-- Main content -->

 
    <section class="content">
@section('navprofile')  
  <!-- Profile Image -->
       <div class="b" style="padding-top:10px" >
       <div class="widget-user-image">
            <img class=" img-circle text-center mt-5" " 
                  style="margin-left:45%; width:10%;"
                  src="css/IMG_0142.jpg"
                       alt="User profile picture">
                       <h3 class=" text-center" style="color:orange">@section('name')@endsection</h3></div>




<div class="text-center"> 
<li class="a">
<a href = "{{ url('Departements') }}">
<b style="color:#FF8C00">Mes départements</b></a>
</li >


  <li class="a" >
<a href = "{{ url('mes_salons') }}">
<b style="color:#FF8C00">Mes Salons </b></a>
</li >    
  
<li class="a" >
<a href = "{{ url('profile') }}">
<b style="color:#FF8C00">Accueil</b></a>
</li > 


  <li class="a" >
<a href = "{{ url('editer') }}">
<b style="color:#FF8C00">modifer</b></a>
</li >    
  

  <li class="a" >
<a href = "{{ url('parametres') }}">
<b style="color:#FF8C00">Mes parametres</b></a>
</li >    
  

  <li  class="a">
<a href = "{{ url('role') }}">
<b style="color:#FF8C00">Mon rôle</b></a>
</li >    


</div>
</div>

@show