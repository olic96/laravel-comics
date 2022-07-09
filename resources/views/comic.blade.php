@extends('layouts.base')

@section('title')
    Comic
@endsection

@section('page-content')
    <main>
        <h1>{{$comic["title"]}}</h1>
    </main>
@endsection