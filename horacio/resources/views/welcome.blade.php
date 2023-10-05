@extends('layouts.main')

@section('title','eventos')

@section('content')

    <h1>ControloManuell</h1>
    <p>lista nominal</p>
    @for($i = 0; $i < count($nome); $i++)
        <p>{{$nome[$i]}}</p>
    @endfor

@endsection