@extends('layouts.app')
@section('content')
<h1 class="text-center">Vestibular</h1><hr>


<table class="table table-warning table-bordered">
	<tr>
       <th scope="col">Matéria</th>
       <td>Conteúdo</td>
   </tr>
   <tr>
       <th scope="col">Matemática:</th>
       <td> {{$vest->mat}}</td>
   </tr>
   <tr>
       <th>Gramática:</th>
       <td> {{$vest->gram}}</td>
   </tr>
   <tr>
       <th>Literatura:</th>
       <td> {{$vest->lit}}</td>
   </tr>
    <tr>
       <th>Texto:</th>
       <td> {{$vest->texto}}</td>
   </tr>
    <tr>
       <th>Inglês:</th>
       <td> {{$vest->ing}}</td>
   </tr>
    <tr>
       <th>Física:</th>
       <td> {{$vest->fis}}</td>
   </tr>
    <tr>
       <th>Química:</th>
       <td> {{$vest->quim}}</td>
   </tr>
    <tr>
       <th>História:</th>
       <td> {{$vest->hist}}</td>
   </tr>
    <tr>
       <th>Geografia:</th>
       <td> {{$vest->geo}}</td>
   </tr>
    <tr>
       <th>Sociologia:</th>
       <td> {{$vest->socio}}</td>
   </tr>





</table>
           
<div class="col-8 m-auto">
	



@endsection