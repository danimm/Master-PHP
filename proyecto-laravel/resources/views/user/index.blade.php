@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.message')
            @if(count($users) == 0)
            <p>No existen resultados</p>
            @endif
            @foreach ($users as $user)
            <div class="card mb-3" style="max-width: 650px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        @if ($user->image)
                        <img src="{{ route('user.avatar', ['filename' =>$user->image]) }}"
                            style="width: 100%; height: 100%; object-fit: cover;" alt="error al cargar la imagen"
                            class="card-img">
                        @else
                        <img src="https://cdn1.iconfinder.com/data/icons/rcons-user-action/512/user-512.png"
                            style="width: 100%;" alt="Error al cargar la imagen">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ '@'.$user->nick }}</h5>
                            <p class="card-text">Nombre: {{ $user->name }}</p>
                            <p class="card-text">Apellidos: {{ $user->surname }}</p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Fecha de creación: {{ \FormatTime::LongTimeFilter($user->created_at)}}
                                </small>
                            </p>
                            <a href="{{ route('profile', ['id' => $user->id]) }}">
                                <button class="btn btn-success">Ver perfil</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Paginación -->
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection
