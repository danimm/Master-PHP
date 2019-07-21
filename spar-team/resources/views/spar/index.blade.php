@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message')}}
            </div>
            @endif
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
                    @foreach ($data as $shop)
                    <tr>
                        <th scope="row">{{ $shop->id }}</th>
                        <td>{{ $shop->name }}</td>
                        <td>{{ $shop->address }}</td>
                        <td>{{ $shop->postcode }}</td>
                        <td>{{ $shop->place }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('shops.edit',['id' => $shop->id ]) }}">Modify</a>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-toggle="modal"
                                data-target="#deleteModal">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Esta acción no se puede revertir</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Estas a punto de borrar una tienda de la base de datos, ¿Estás seguro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                            <a class="btn btn-danger" href="{{ route('shops.delete',['id' => $shop->id ]) }}">Eliminar
                                Tienda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col">
            <iframe src="{{ $data->map}}" width="90%" height="650" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div> --}}
</div>
</div>
@endsection
