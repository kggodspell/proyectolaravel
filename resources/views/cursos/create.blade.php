@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podrás crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <br>
        @error('name')
            <span>*{{$message}}</span>
        @enderror
        <br>

                    <label>
                        Slug:
                        <br>
                        <input type="text" name="slug" value="{{old('slug')}}">
                    </label>
                    <br>
                    @error('slug')
                        <span>*{{$message}}</span>
                    @enderror
                    <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        <br>
        @error('descripcion')
            <span>*{{$message}}</span>
        @enderror
        <br>
        <label>
            Categoría:
            <br>    
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>
        <br>
        @error('categoria')
            <span>*{{$message}}</span>
        @enderror
        <br>
        <button type="submit">Enviar formulario</button>

    </form>
@endsection
