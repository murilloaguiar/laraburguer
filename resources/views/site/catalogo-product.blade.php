@extends('site.layouts.app')

@include('site.layouts._partials.topo')

@section('css')
@endsection

@section('conteudo')
   <h1>{{$product->name}}</h1>
@endsection
