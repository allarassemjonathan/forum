@extends('layouts.base_home')

@section('metas&links')
  @parent
@endsection
@section('navmenu')
  @parent

<br>

<h4 align="center"><img align="center" src="css/logoeed.png"><br> Départements de l'EED
</h4>
<br>
<?php 
use Faker\Factory as Faker;
$faker=Faker::create();

$departements=['Jeunesse','Sport','Famille','Prière','Hymnologie','Mission','Trésorerie'];

?>
<div >
@foreach ($departements as $departement)
     <h4 align="center">{{$departement}}</h4>
     
     <p align="center">Petite description du département {{$departement}}:<br><?php echo"$faker->text";?></p>
     <a href="{{url('departements/'.$departement)}}"><h5 align="center">En savoir plus</h5></a>
     <br><br>
@endforeach
</div>
@endsection




