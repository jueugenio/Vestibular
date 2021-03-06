@extends('layouts.app')
@section('content')
<h3 class="text-center">
@if(isset($vest))Editar @else Cadastrar @endif</h3>

<div class="col-8 m-auto">

<a href= "{{url("../adm")}}" class="btn text-white btn-dark ">Voltar </a>

<div class="text-center mt-4 mb-4 p-2">
	@if(isset($errors)&& count($errors)>0)
<div class="text-center mt-4 mb-4 p-2 alert-danger">
@foreach($errors->all() as $erro)
{{$erro}}
@endforeach
	</div>

	@endif

    	@if(isset($vest))
    <form name="formEdit" id="formEdit" method="post" action="{{url("adm/$vest->id")}}">
    @method ('PUT')

  @else 
    <form name="formCad" id="formCad" method="post" action="{{url("adm/")}}">
@endif


@csrf

    <input  value="{{$vest->inst ?? ''}}"  type = "text"  class="form-control"  name = "inst"  id = "inst"    placeholder = "Instituição "  required> 
    <br>
     <input value="{{$vest->site ?? ''}}"  type = "text"  class="form-control"  name = "site"  id = "site"    placeholder = "Site Oficial "  required>  
     <br>
      <input  value="{{$vest->ano ?? ''}}" type = "text"  class="form-control"  name = "ano"  id = "ano"    placeholder = "Ano (NÚMERO)"  required>  
      <br>
       <input value="{{$vest->mat ?? ''}}"  type = "text"  class="form-control"  name = "mat"  id = "mat"    placeholder = "Matemática"  required>  
       <br>
        <input value="{{$vest->gram?? ''}}" type = "text"  class="form-control"  name = "gram"  id = "gram"    placeholder = "Gramática"  required>
        <br>
         <input value="{{$vest->lit ?? ''}}"  type = "text"  class="form-control"  name = "lit"  id = "lit"    placeholder = "Literatura"  required>  
         <br> 
          <input value="{{$vest->texto ?? ''}}"  type = "text"  class="form-control"  name = "texto"  id = "texto"    placeholder = "Texto"  required>
          <br> 
           <input value="{{$vest->ing ?? ''}}" type = "text"  class="form-control"  name = "ing"  id = "ing"    placeholder = "Inglês "  required> 
           <br>  
            <input value="{{$vest->bio ?? ''}}"  type = "text"  class="form-control"  name = "bio"  id = "bio"    placeholder = "Biologia"  required> <br>
             <input value="{{$vest->fis ?? ''}}" type = "text"  class="form-control"  name = "fis"  id = "fis"    placeholder = "Física"  required> <br>
              <input value="{{$vest->quim ?? ''}}"  type = "text"  class="form-control"  name = "quim"  id = "quim"    placeholder = "Química"  required>   
              <br>
               <input value="{{$vest->hist ?? ''}}" type = "text"  class="form-control"  name = "hist"  id = "hist"    placeholder = "História"  required> 
               <br>
                <input value="{{$vest->geo ?? ''}}"  type = "text"  class="form-control"  name = "geo"  id = "geo"    placeholder = "Geografia"  required>  
                <br> 
                 <input value="{{$vest->socio ?? ''}}"  type = "text"  class="form-control"  name = "socio"  id = "socio"    placeholder = "Sociologia"  required>   
                 <br>
                  <input class="btn btn-dark" type="submit" value="@if(isset($vest))Editar @else Cadastrar @endif">
  </div>



@endsection