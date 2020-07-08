
@extends('layouts.base_home')
<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>

  @section('metas&links')
     @parent
  @endsection

</head>
<body class="hold-transition layout-top-nav">

@section('navmenu')
	   @parent
 


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          
            <!-- Profile Image -->
            <h4 class="text-center"> Bienvenue</h4>
            <div class="card card-orange card-outline ">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="css/IMG_0142.jpg"
                       alt="User profile picture">
                </div>
                
                <a href="{{ url('profile') }}" class="btn btn-indigo btn-block profile-username text-center"><b>Philippe Keita</b></a>


                

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-orange">
              <div class="card-header">
                <h3 class="card-title">Nouveautés</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-dice-three"></i> Un Nouveau Jeu ete ajoute</strong>

                <p class="text-muted">
                  "Quizz biblique" <br>le 24 juin 2020 à 18:30
                </p>

                <hr>

                <strong><i class="fas fa-comments"></i> Une nouvelle discussion à été ouverte</strong>

                <p class="text-muted">"Rôle du st-esprit dans la vie du Jeune Chretien" <br>le 22 juin 2020 à 12:00</p>

                <hr>
 
                <strong><i class="fas fa-comments"></i> Une nouvelle discussion à été ouverte</strong>

                <p class="text-muted">
                  "Jeunesse et Musique" <br>le 22 juin 2020 à 11:47
                </p>

                <hr>

                <strong><i class="fas fa-calendar-day"></i> Un nouvelle événement a été ajouté au departements sport</strong>

                <p class="text-muted">le 21 juin 2020 à 20:06</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-lg">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">FJEED</h5>

                <p class="card-text">
                  <h1>Bienvenue</h1><br> Bienvenue sur le forum de la jeunnesse. Un forum prevu pour la discussion sur plusieurs sujet relatifs 
                  à la jeunesse et promouvoir l'edification et la communion des jeunes au sain de notre église. Mieux encore les differents departements 
                  sont mis a votre disposition ici meme - avec des salons reservé specialement par departement. Annonces, salon de discussion, salon de jeu, vite!! Rejoignez des departements.<br>La FJEED vous accueil.
                </p>

      
                            <!-- /.Carousel -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="css/6E371BAB-D410-447A-BF45-CE7652BF39E9.JPEG" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="css/camp.JPEG" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="css/0BC76D9C-320A-4A69-B77E-BF8B8BF8BCC1.JPEG" alt="Third slide">
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
            </div>

            @endsection
            
</body>
</html>


