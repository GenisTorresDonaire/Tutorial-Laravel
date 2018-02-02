@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <div class="row">
        <div class="col-sm-4">
            {{-- TODO: Imagen de la película --}}
            <img src="{{$pelicula->poster}}" style="height:400px; margin-left: 50px;"/>

        </div>
        <div class="col-sm-8">
            {{-- TODO: Datos de la película --}}
            <h1>{{$pelicula['title']}}</h1>
            <p><b>Año: </b>{{$pelicula['year']}}</p>
            <p><b>Director: </b>{{$pelicula['director']}}</p>
            <p><b>Resumen: </b>{{$pelicula['synopsis']}}</p>
            <p><b>Estado: </b> @if($pelicula['rented'] == true) Pelicula actualmente alquilada @else Película disponible @endif</p>
            <p>@if($pelicula['rented'] == true) <button type="button" class="btn btn-danger">Devolver Pelicula</button> @else <button type="button" class="btn btn-primary">Alquilar Pelicula</button> @endif <button onclick="window.location.href='/catalog/edit/{{$id}}'" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Editar Pelicula</button> <button type="button" onclick="window.location.href='/catalog'" style="border: 1px solid grey;" class="btn btn-light"><span class="glyphicon glyphicon-chevron-left"></span> Volver al Listado</button></p>
            
        </div>
    </div>


@stop