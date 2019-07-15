@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('shops.create') }}">Add new Spar</a>
            <table class="table table-striped table-borderless table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Postcode</th>
                        <th scope="col">Place</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->postcode }}</td>
                        <td>{{ $data->place }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- <div class="col">
            <iframe src="{{ $data->map}}" width="90%" height="650" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div> --}}
</div>
</div>
@endsection
