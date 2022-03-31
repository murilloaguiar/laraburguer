@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <h1>Dados de usuário</h1>

@stop

@section('content')
   @auth
      <h4>Name: {{$user->name}}</h4>
      <h4>Sobrenome: {{$user->lastname}}</h4>
      <h4>Email: {{$user->email}}</h4>
      
   @endauth
@stop

@section('js')
   <script>
      
   </script>
@stop