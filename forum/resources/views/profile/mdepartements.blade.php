@extends('layouts.base_profile')
@section('navprofile')
  @parent
 <br>

<?php

use Faker\Factory as Faker;
$departements=['Jeunesse','Famille','Enseignement','Sport','Prière','Hymnologie','Trésorerie','Mission'];
$faker=Faker::create();


?>


@foreach ($departements as $departement)

    <h4 align="center">{{ $departement }}</h4>
    <p align="center" style="padding:20px"><?php echo" $faker->text"; ?></p>
    <div  class="za"align="center" ><a href="{{url('departements/'.$departement)}}">
    Département&nbsp{{ $departement }}</a>
    <br>
    </div>
    <br>
@endforeach





@endsection