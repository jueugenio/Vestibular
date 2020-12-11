
@extends('layouts.app')
@section('content')
<h1 class="text-center"><b>Vestibulares</b></h1><hr>
<div class="col-8 m-auto"> 
  <a href= "{{url("../home")}}" class="btn text-white btn-dark ">Voltar </a>
  <a href= "{{url("../adm")}}" class="btn text-white btn-dark ">Vestibulares</a>
	

		<a href="{{url('user/create')}}">
		<button class="btn btn-dark">Criar</button>
	</a>

	<br>
	<br>
	@csrf
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col"></th>
     
  

 
  
    </tr>
  </thead>
  <tbody>
  	@foreach($user as $users)

    <tr>
      <th scope="row"><b>{{$users->id}}</b></th>
      <td><b>{{$users->name}}</b></td>
      
           
   <td>
       <a href="{{url("user/$users->id")}}">
		<button class="btn btn-dark">Visualizar</button>
	</a>
</td>

	 </tr>
@endforeach
</tbody>
</table>
</div>
@endsection