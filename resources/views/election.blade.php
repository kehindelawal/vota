@extends('layouts.dashboard')

@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            @include('includes.action')
        </nav>

        <div class="content">
            <div class="container-fluid">
                @include('includes.create-election')
                @include('includes.view-election')
            </div>
        </div>
    </div>
@endsection
