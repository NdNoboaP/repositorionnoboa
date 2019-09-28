@extends('layouts.app')
@section('content')
<div class='container'> 

<div class="card">
  <div class="card-header bg-primary text-white">
    Ingreso de Categorias
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="{{ route('categoria.index')}}" class="btn btn-primary">REGRESAR</a>

    {!! Form::open!!}
        {!! Field::text('name',null,['label'=>'Nombre','placeholder'=> 'Ingrese el nombre'])!!}

        {!! Field::textarea('name',null,['description', null,['label'=> 'Descripcion', 'placeholder'=> 'Ingrese la descripcion'])!!}
    {!! Form::close!!}
  </div>
</div>

</div>

@endsection