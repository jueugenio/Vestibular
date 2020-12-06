@extends('layouts.app')
@section('content')
<h1 class="text-center">Administrador</h1><hr>
<b>ID:</b>{{$user->id}}<br>
<b>Nome:</b> {{$user->name}}<br>
<b>Email:</b> {{$user->email}}<br><br>



<div class="col-8 m-auto">
	



@endsection