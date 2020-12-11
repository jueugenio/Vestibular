@extends('layouts.app')
@section('content')
<div class="text-center">
<a href= "{{url("../user")}}" class="btn text-white btn-dark ">Voltar </a>

<br>
<br>
<table class="table table-primary">
<tr>
       <th scope="col">Identificador</th>
       <td>{{$user->id}}</td>
  </tr>
  <tr>
       <th scope="col">Nome</th>
       <td>{{$user->name}}</td>
  </tr>
   <tr>
       <th scope="col">E-mail</th>
       <td>{{$user->email}}</td>
  </tr>
</table>
	<br>

  
@endsection