@extends('layouts.main')
@section('content')
    <div class="container-fluid p-5">
        <div class="col-md-12 px-0 table-box">
            <div class="table-top-panel border-bottom d-flex align-items-center justify-content-between px-5 pt-5 pb-4">
                <p class="account-title mb-2">Litsenziya yaratish oynasi</p>
                <p class="account-title mb-2">{{$expertice12->licence_number}}</p>
            </div>
            @if(session('message'))
                <div class="alert alert-danger">
                    {{session('message')}}
                </div>
            @endif
            <div class="form-group col-md-12">
            {{Form::open(['route' => ['expertice.store'], 'method' => 'post'])}}
            @csrf
            @include('client.expertise._form')
                <div class="form-group">
                    {{Form::submit(('Saqlash'), ['class' => 'btn btn-primary'])}}
                </div>
            {{Form::close()}}
            </div>
        </div>
    </div>
@endsection


