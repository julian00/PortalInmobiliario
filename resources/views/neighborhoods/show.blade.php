@extends('layouts.app')

@section('title',"Portal inmobiliario - Home")

@section('content')

<!--deveria recivirlo desde el controlador-->
@php
    $count=12;

@endphp
<!--
<livewire:neighborhoods count="1"/>
-->
<livewire:neighborhoods :count="$count"/>

@endsection