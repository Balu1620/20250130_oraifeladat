@extends('layers.header')

@section('content')
<div class="container">
    <form action="{{ route('troopers.update', $trooper) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-floating mb-3">
            <input type="text" value="{{ old('name') }}" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}" />
            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" value="{{ old('gun') }}" name="gun" id="gun" placeholder="" />
            <label for="gun">Gun</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" value="{{ old('type') }}" name="type" id="type" placeholder="" />
            <label for="type">Type</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" value="{{ old('helmet') }}" name="helmet" id="Helmet" placeholder="" />
            <label for="Helmet">Helmet</label>
        </div>
        <div class="text-center">
            <button name="submit" id="submit" type="submit" class="btn btn-outline-success">Hozzáadás</button>
        </div>
    </form>
</div>
@endsection