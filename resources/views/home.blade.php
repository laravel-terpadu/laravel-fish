@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Kamu Telah Login Sebagai  {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
@endsection
