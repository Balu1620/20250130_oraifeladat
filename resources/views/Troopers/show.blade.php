@extends('layers.header')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="card col-4">
            <div class="card-body">
                
                <h4 class="card-title">{{ $trooper->name }} Details</h4>
                <p class="card-text">{{ $trooper->type }}</p>
                <p class="card-text">{{ $trooper->gun }}</p>
                <p class="card-text">{{ $trooper->helmet }}</p>
            </div>
        </div>
    </div>
@endsection