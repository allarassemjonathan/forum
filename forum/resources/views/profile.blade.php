@extends('layouts.base_profile')
@section('navprofile')
    @parent

<br>
<h4  align="center"> Informations publiques</h4>
<div  class="z" align="center" >
<?php
use Faker\Factory as Faker;

$faker=Faker::create();
$fn=$faker->firstname;
$ln=$faker->lastname;
        
echo"Prenom:$fn <br> <br>
Nom: $ln <br> <br>
email: $fn.$ln@gmail.com <br> <br>
Numero: $faker->phoneNumber <br> <br>
Addresse:$faker->streetAddress<br><br>
"
?>
<input type="submit" value="modifier les informations publiques">

</div>
<br>

<h4 align="center"> <a  style="color:black"href="" >Derniers  départements rejoins</a></h4>
<div  class="z" align="center" >
<table>
<tr>
<?php
$departements=['Jeunesse','Enseignement','Famille','Trésorerie'];

foreach($departements as $departement){
    echo"<td>";
    echo"$departement"; 
    echo" &nbsp &nbsp &nbsp";
    echo"</td>";
    
}

?>


</tr>
</table>

<input type="submit" value="voire tous mes départements">

</div>


<br>
<h4 align="center"> <a  style="color:black"href="" >Derniers salons de discussion rejoins  </a></h4>
<div class="z" align="center" >
<table>
<tr>

<?php
$salonsds=['Chretien,sels et lumière du monde','Comment produire du fruit?','Jésus-Christ Fils de DIeu','Résister à la tentation!'];

foreach($salonsds as $salond){

    echo"$salond"; 
    echo"<br>";
    
}

?>


</tr>
</table>

<input type="submit" value="voire tous mes salons de discussion">

</div>


<br>
<h4 align="center"> <a  style="color:black"href="" >Derniers salons de jeux rejoins  </a></h4>
<div class="z" align="center" >
<table>
<tr>

<?php
$salonsjx=['quizz biblique'];

foreach($salonsjx as $salonj){

    echo"$salonj"; 
    echo"<br>";
    
}

?>


</tr>
</table>

<input type="submit" value="voire tous mes salons de jeux">

</div>



@endsection