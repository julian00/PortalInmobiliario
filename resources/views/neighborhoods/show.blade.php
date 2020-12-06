@extends('layouts.app')

@section('title',"Portal inmobiliario - Home")

@section('content')

<h1>{{  $neighborhood->neighborhood }}</h1>



<!--deveria recivirlo desde el controlador-->
@php
    $count=12;
@endphp
<!--
<livewire:neighborhoods count="1"/>
-->
<livewire:neighborhoods :count="$count"/>

@endsection