@extends('layouts.main')

@section('title','exemplo')

@section('content')

<h1>meu primeiro sit</h1>

{{-- condiçao if --}}
@if(10 > 5)
<p>a condiçao é verdadeira</p>
@endif

{{-- condiçao if e else --}}
@if($nome == "manuel")
<p>o nome é manuel</p>
@else
<p>o nome nao é manuel vc escreveu {{$nome}} talves nem tenha {{$idade}}</p>
@endif

{{-- condiçao for --}}
@for($i = 0; $i < count($id); $i++)
<p>{{$id [$i]}}--{{$nomes[$i]}}</p>
@endfor

{{-- condiçao foreach cria index automatico e lista os nomes --}}
@foreach($nomes as $nome)
<p>{{$loop->index}}</p>
<p>{{$nome}}</p>
@endforeach

{{-- para poder utilizar o php puro --}}
@php
$nome="joao";
echo $nome;
@endphp

<!--comentario do html-->
{{-- comentario do blade --}}

@endsection