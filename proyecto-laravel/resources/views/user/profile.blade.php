@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row mb-4">
                <div class="col">
                    @if ($user->image)
                    <img src="{{ route('user.avatar', ['filename' =>$user->image]) }}" style="width: 18rem;"
                        alt="error">
                    @else
                    <img src="https://cdn1.iconfinder.com/data/icons/rcons-user-action/512/user-512.png"
                        style="width: 18rem;" alt="Error al cargar la imagen">
                    @endif

                </div>
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ '@'.$user->nick }}</h5>
                            <p class="card-text">Nombre: {{ $user->name }}</p>
                            <p class="card-text">Apellidos: {{ $user->surname }}</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Fecha de creación: {{ \FormatTime::LongTimeFilter($user->created_at)}}
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Publicaciones de: {{ '@'.$user->nick }}</h3>
            @if (count($user->images))
            <div class="grid-container">
                @foreach ($user->images as $image)
                <a href="{{ route('image.detail', ['id' => $image->id])}}">
                    <img src="{{ route('image.file', ['filename' => $image->image_path])}}" class="img-grid"
                        alt="Error al cargar la imagen">
                </a>
                @endforeach
            </div>
            @else
            <h4>Este usuario todavia no tiene publicaciones</h4>
            @endif


        </div>
    </div>
</div>
@endsection
