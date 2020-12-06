
@extends('layouts.app')
@section('content')
<h1 class="text-center"><b>Administradores</b></h1><hr>
<div class="col-8 m-auto">

		
		<a href="{{url('adm/create')}}">
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
      <th scope="col"></th>
      <th scope="col"></th>

 
  
    </tr>
  </thead>
  <tbody>
  	@foreach($user as $users)

    <tr>
      <th scope="row"><b>{{$users->id}}</b></th>
      <td><b>{{$users->name}}</b></td>
           
   <td>
       <a href="{{url("perfils/$users->id")}}">
		<button class="btn btn-dark">Visualizar</button>
	</a>
</td>
<td>

</td>
<td>
 <a class="jsdel" href="{{url("perfils/$users->id")}}" >
		<button class="btn btn-dark">Deletar</button>
	</a>
	 </tr>
	</td>
@endforeach
</tbody>
</table>
</div>
@endsection