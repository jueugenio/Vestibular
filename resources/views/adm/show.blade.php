@extends('layouts.app')
@section('content')
<div class="text-center">
<a href= "{{url("../adm")}}" class="btn text-white btn-dark ">Voltar </a>


<br>
<table class="table table-primary">
<tr>
       <th scope="col">Identificador</th>
       <td>{{$adm->id}}</td>
  </tr>
  <tr>
       <th scope="col">Instituição</th>
       <td>{{$adm->inst}}</td>
  </tr>
   <tr>
       <th scope="col">Site Oficial</th>
       <td>{{$adm->site}}</td>
  </tr>
</table>
	<br>
	
	<tr>
<table class="table table-warning table-bordered">
       <th scope="col">Matéria</th>
       <td><b>Conteúdo</b></td>
   </tr>
   <tr>
       <th scope="col">Matemática:</th>
       <td> {{$adm->mat}}</td>
   </tr>
   <tr>
       <th>Gramática:</th>
       <td> {{$adm->gram}}</td>
   </tr>
   <tr>
       <th>Literatura:</th>
       <td> {{$adm->lit}}</td>
   </tr>
    <tr>
       <th>Texto:</th>
       <td> {{$adm->texto}}</td>
   </tr>
    <tr>
       <th>Inglês:</th>
       <td> {{$adm->ing}}</td>
   </tr>
    <tr>
       <th>Física:</th>
       <td> {{$adm->fis}}</td>
   </tr>
    <tr>
       <th>Química:</th>
       <td> {{$adm->quim}}</td>
   </tr>
    <tr>
       <th>História:</th>
       <td> {{$adm->hist}}</td>
   </tr>
    <tr>
       <th>Geografia:</th>
       <td> {{$adm->geo}}</td>
   </tr>
    <tr>
       <th>Sociologia:</th>
       <td> {{$adm->socio}}</td>
   </tr>


</table>


	
@endsection