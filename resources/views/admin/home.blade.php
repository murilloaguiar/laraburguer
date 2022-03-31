@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Dashboard - <strong>{{Auth::user()->name}}</strong></h1>
@stop

@section('content')
   @auth<p>Bem vindo ao Painel do administrador </p>@endauth
@stop
