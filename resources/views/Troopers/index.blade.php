@extends('layers.header')

@section('content')

<div class="container">

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr class="text-center">
                    <th scope="col">Neve</th>
                    <th scope="col">Típusa</th>
                    <th scope="col">Sisak</th>
                    <th scope="col">Fegyver</th>
                    <th scope="col" colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trooper as $item )
                <tr class="text-center">
                    <td>{{$item->name}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->helmet}}</td>
                    <td>{{$item->gun}}</td>
                    <td>
                                <form action="{{ route('troopers.show', $item) }}" method="GET"><button
                                        class="btn btn-info">Show</button></form>
                            </td>
                            <td>
                                <form action="{{ route('troopers.edit', $item) }}" method="GET"><button
                                        class="btn btn-warning">Edit</button></form>
                            </td>
                            <td>
                                <form action="{{ route('troopers.destroy', $item) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row mb-3">
            <div class="col-4">
                <a href="{{ route('troopers.create') }}" class="btn btn-outline-primary">Add a new tank</a>
            </div>
        </div>
    </div>




</div>

@endsection