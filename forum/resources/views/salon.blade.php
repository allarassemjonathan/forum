<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Salons</title>
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
  <link rel="stylesheet" href="css/salon.css">

</head>
<body class="hold-transition layout-top-nav">
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
            <a href="index3.html" class="nav-link">Accueil</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Salons</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Departements</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Mon Profil</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">Annonces</a>
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
  <!-- /.navbar -->
<!-- Container -->
<div class="container a" >
<div class="row">
  <!-- Col -->
  <div class="col">
    <div class="card">
      <div class="card-header">
        <a href="{{ url('salon_discussion') }}"><h3 class="card-title">Salles de discussion</h3></a>
      
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
            </div>
          </div>
      </div>              
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>User</th>
              <th>Date</th>
              <th>Theme</th>
              <th>mentions</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor sit</td>
                <th><span class="float-right badge bg-primary">84 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">42 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Alexander Pierce</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor sit </td>
                <th><span class="float-right badge bg-primary">374 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">23 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Bob Doe</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor </td>
                <th><span class="float-right badge bg-primary">839 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">15 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor </td>
                  <th><span class="float-right badge bg-primary">428 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                  <br><span class="float-right badge bg-orange">842 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor sit</td>
                <th><span class="float-right badge bg-primary">84 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">42 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Alexander Pierce</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor sit </td>
                <th><span class="float-right badge bg-primary">374 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">23 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Bob Doe</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor </td>
                <th><span class="float-right badge bg-primary">839 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">15 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor </td>
                  <th><span class="float-right badge bg-primary">428 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                  <br><span class="float-right badge bg-orange">842 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>John Doe</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor sit</td>
                <th><span class="float-right badge bg-primary">84 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">42 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Alexander Pierce</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor sit </td>
                <th><span class="float-right badge bg-primary">374 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">23 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Bob Doe</td>
                <td>11-7-2014</td>
                <td>Bacon ipsum dolor </td>
                <th><span class="float-right badge bg-primary">839 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                <br><span class="float-right badge bg-orange">15 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
              <tr>
                <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor </td>
                  <th><span class="float-right badge bg-primary">428 <i class="fa fa-thumbs-up" aria-hidden="true"></i></span>
                  <br><span class="float-right badge bg-orange">842 <i class="fa fa-comment" aria-hidden="true"></i></span></th>
              </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- Col-->

  <!-- Col2 -->
  <div class="col">
        <!-- START PROGRESS BARS -->
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <a href="{{ url('salon_jeux') }}"><h3 class="card-title">Salles de jeux</h3></a>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p><code>Quizz biblique</code></p>
                

                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
                <p><code>Choix multiple</code></p>

                <div class="progress progress-sm active">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                       aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
                <p><code>Vie de Abraham</code></p>

                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <p><code>Personnages de la bible</code></p>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <p><code>Quizz biblique</code></p>
                

                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
                <p><code>Choix multiple</code></p>

                <div class="progress progress-sm active">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                       aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
                <p><code>Vie de Abraham</code></p>

                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <p><code>Personnages de la bible</code></p>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <p><code>Quizz biblique</code></p>
                

                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
                <p><code>Choix multiple</code></p>

                <div class="progress progress-sm active">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                       aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
                <p><code>Vie de Abraham</code></p>

                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <p><code>Personnages de la bible</code></p>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <p><code>Quizz biblique</code></p>
                

                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                  </div>
                </div>
                <p><code>Choix multiple</code></p>

                <div class="progress progress-sm active">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                       aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
                <p><code>Vie de Abraham</code></p>

                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                <p><code>Personnages de la bible</code></p>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                       aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  </div>
  <!--Col-->
</div>
<!--Row-->
</div>
<!--Container-->
  </div>
</body>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="css/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="css/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="css/dist/js/demo.js"></script>

</body>
</html>
