@extends('layouts.main')
@section('container')
    <h1>Halaman About</h1>

    <h2>{{ $name }} </h2>
    <h3>{{ $email }} </h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, eaque quos? Aliquam, itaque aspernatur? Eos accusantium at in laborum dolores nihil tempore ratione excepturi optio vel incidunt, magni reprehenderit itaque.</p>
    <img src="img/{{$image}} " alt="{{$name}}" width="700px">
@endsection