@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta página podrás editar un curso</h1>
    <form action="{{route('cursos.update',$curso)}}" method="post">
        @csrf
        @method('put')


        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>
        <br>
        @error('name')
            <span>*{{$message}}</span>
        @enderror
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        <br>
        @error('descripcion')
            <span>*{{$message}}</span>
        @enderror
        <br>
        <label>
            Categoría:
            <br>    
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        <br>
        @error('categoria')
            <span>*{{$message}}</span>
        @enderror
        <br>
        <button type="submit">Actualizar formulario</button>

    </form>
@endsection
