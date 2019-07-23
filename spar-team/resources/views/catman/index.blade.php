@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('catman.store') }}" method="post">
                @csrf
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Place</th>
                            <th scope="col">Region</th>
                            <th scope="col">Anmelden</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spar as $item)
                        <tr></tr>

                        <td>{{ $item->date }}</td>
                        <td>{{ $item->spar->name }}</td>
                        <td>{{ $item->spar->place }}</td>
                        <td>{{ $item->spar->region }}</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="checkbox"
                                    value="{{ $item->date }}" name="angemeldet[]">
                                <span id="apuntado">&#10003;</span>
                            </div>
                        </td>
                        @endforeach
                    </tbody>
                </table>
                <input type=" text" name="text" id="1">
                <button type="submit" class="btn btn-primary">Subscribe</button>

            </form>
        </div>
    </div>
</div>
@endsection
