@extends('layouts.app')

@section('content')
    <!-- ovde ide tvoj sadržaj -->
@endsection

@extends('layouts.app')

@section('content')
<h1>Kandidati</h1>
<ul>
    @foreach($kandidati as $kandidat)
        <li>{{ $kandidat->ime_kandidata }} {{ $kandidat->prezime_kandidata }}</li>
    @endforeach
</ul>
@endsection
