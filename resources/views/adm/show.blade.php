@extends('layouts.app')
@section('content')
<h1 class="text-center">Vestibular</h1><hr>
<b>ID:</b>{{$adm->id}}<br>
<b>Instituição</b> {{$adm->inst}}<br>
<b>site:</b> {{$adm->site}}<br><br>
<b>Matemática:</b> {{$adm->mat}}<br><br>
<b>Gramática:</b> {{$adm->gram}}<br><br>
<b>Literatura</b>: {{$adm->lit}}<br><br>
<b>Texto:</b> {{$adm->texto}}<br><br>
<b>Inglês:</b> {{$adm->ing}}<br><br>
<b>Física:</b> {{$adm->fis}}<br><br>
<b>Química:</b> {{$adm->quim}}<br><br>
<b>História:</b> {{$adm->hist}}<br><br>
<b>Geografia:</b> {{$adm->geo}}<br><br>
<b>Sociologia</b> {{$adm->socio}}<br>

<div class="col-8 m-auto">
	



@endsection