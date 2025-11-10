@extends('layouts.app')
@section('title',$categoria->nombre)

@section('content')
  <h2>{{ $categoria->nombre }}</h2>
  <p>{{ $categoria->descripcion }}</p>
  <p><strong>Precio:</strong> {{ number_format($categoria->precio,2) }} €</p>
  <p><strong>Stock:</strong> {{ $categoria->stock }}</p>
  <a href="{{ route('categorias.index') }}">Volver</a>
@endsection
