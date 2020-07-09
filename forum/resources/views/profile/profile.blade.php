@extends('layouts.base_profile')
@section('navprofile')
    @parent

<br>
<h4  align="center"> Informations publiques</h4>
<div  class="z" align="center" >
<?php
use Faker\Factory as Faker;

$departements=['Jeunesse','Enseignement','Famille','Trésorerie'];
$salonsds=['Chretien,sels et lumière du monde','Comment produire du fruit?','Jésus-Christ Fils de DIeu','Résister à la tentation!'];
$salonsjx=['quizz biblique'];
$faker=Faker::create();
$fn=$faker->firstname;
$ln=$faker->lastname;
?>

Prenom:{{$fn}} <br> <br>
Nom: {{$ln}} <br> <br>
email: {{$fn}}.{{$ln}}@gmail.com <br> <br>
Numero: {{$faker->phoneNumber}} <br> <br>
Addresse:{{$faker->streetAddress}}<br><br>


<input type="submit" value="modifier les informations publiques">

</div>
<br>




<h4 align="center">Derniers  départements rejoins</h4>
<div  class="z" align="center" >
<table>
<tr>

@foreach($departements as $departement)
    
    <tr> <br>
    {{ $departement }}
    </tr>
@endforeach

</tr>
</table>
<input type="submit" value="voire tous mes départements">
</div>

<br>




<h4 align="center">Derniers salons de discussion rejoins</h4>
<div class="z" align="center" >
<table>
<tr>

@foreach($salonsds as $salond)

    {{$salond}}
    <br>
    
@endforeach

</tr>
</table>

<input type="submit" value="voire tous mes salons de discussion">
</div>


<br>



<h4 align="center">Derniers salons de jeux rejoins</h4>
<div class="z" align="center" >
<table>
<tr>

@foreach($salonsjx as $salonj)

    {{$salonj}}
    <br>
@endforeach


</tr>
</table>

<input type="submit" value="voire tous mes salons de jeux">

</div>


@endsection