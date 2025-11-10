@extends('layouts.app')
@section('title','Listado de categorías')

@section('content')
  <h2>Listado</h2>

  @if($categorias->isEmpty())
    <p>No hay categorías aún.</p>
  @else
    <ul>
      @foreach($categorias as $c)
        <li>
          <a href="{{ route('categorias.show',$c->id) }}">
            {{ $c->nombre }} — {{ number_format($c->precio,2) }} € (Stock: {{ $c->stock }})
          </a>
        </li>
      @endforeach
    </ul>
  @endif

  <h3>Nueva categoría</h3>
  <form action="{{ route('categorias.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="descripcion" placeholder="Descripción">
    <input type="number" step="0.01" name="precio" placeholder="Precio" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <button type="submit">Guardar</button>
  </form>

  @if($errors->any())
    <p style="color:red">
      @foreach($errors->all() as $error)
        {{ $error }}<br>
      @endforeach
    </p>
  @endif
@endsection
