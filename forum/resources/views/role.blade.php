@extends('layouts.base_profile')
@section('navprofile')
  @parent
<br>
<h4 align="center">mon rôle</h4>
<div align="center">
<?php

use Faker\Factory as Faker;

$faker=Faker::create();

echo"<p>$faker->text</p>"

?>
<div>
@endsection