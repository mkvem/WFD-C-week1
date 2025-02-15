@extends('base.base')

@section('content')
    <div class="row mx-auto border border-primary">
        <div>    
            halo1.blade.php
        </div>
        <div class="col-md-4 border border-secondary">
            <h1>Hello Controller !</h1>
            <p>
                Parameter 1: {{ $param1 }}
                <br>
                Parameter 2: {{ $param2 }}
            </p>
        </div>
        <div class="col-md-5 border border-secondary">
            Second column
        </div>
    </div>
@endsection
