@extends('layouts.app')
@section('content')
<div id="app">
    <v-header></v-header>
    <v-content></v-content>
    <router-view></router-view>
</div>
@endsection