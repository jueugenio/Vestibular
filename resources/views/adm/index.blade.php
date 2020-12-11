
@extends('layouts.app')
@section('content')
<h1 class="text-center"><b>Vestibulares</b></h1><hr>
<div class="col-8 m-auto"> 
  <a href= "{{url("../home")}}" class="btn text-white btn-dark ">Voltar </a>
    <a href= "{{url("../user")}}" class="btn text-white btn-dark ">Administradores </a>
	

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
      <th scope="col">Instituição</th>
      <th scope="col">Site</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
       <th scope="col"></th>

 
  
    </tr>
  </thead>
  <tbody>
  	@foreach($vest as $vests)

    <tr>
      <th scope="row"><b>{{$vests->id}}</b></th>
      <td><b>{{$vests->inst}}</b></td>
      <td><b>{{$vests->site}}</b></td>
      <td><b>{{$vests->ano}}</b></td>
           
   <td>
       <a href="{{url("adm/$vests->id")}}">
		<button class="btn btn-dark">Visualizar</button>
	</a>
</td>
<td>
		<a href="{{url("adm/$vests->id/edit")}}">
		<button class="btn btn-dark">Editar</button>
	</a>
</td>
<td>
 <a class="js-del" href="{{url("adm/$vests->id")}}">
		<button class="btn btn-dark">Deletar</button>
	</a>

	</td>
	 </tr>
@endforeach
</tbody>
</table>
</div>
@endsection