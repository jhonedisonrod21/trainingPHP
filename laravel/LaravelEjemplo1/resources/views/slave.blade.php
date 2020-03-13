@extends('layouts.master')
@section('title','slave')


@section('header')
    @parent()
    <h1>este es el mk titulo que va despues del parent1 y antes del parent 2</h1>
    @parent()
@stop
@section('content')
    <h3>acsdcmsbcsdc</h3>
@stop