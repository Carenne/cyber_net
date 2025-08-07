<!-- dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenue {{ Auth::user()->name }}</h1>
    <p>Rôle : {{ Auth::user()->role }}</p>
    <p>Point de vente : {{ Auth::user()->point_vente }}</p>
</div>
@endsection
