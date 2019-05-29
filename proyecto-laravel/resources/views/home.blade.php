@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.message')
            @foreach ($images as $image)
                
            <div class="card mb-4">
                <div class="card-header">
                    @if($image->user->image)
                        <img class="avatar" src="{{ route('user.avatar', ['filename' =>$image->user->image]) }}" alt="">
                    @else
                        <img class="avatar" src="http://www.stickpng.com/assets/images/585e4beacb11b227491c3399.png" alt="">
                    @endif
                    {{ $image->user->name. ' '.$image->user->surname.' | @'.$image->user->nick }} 
                </div>
                <img src="{{ route('image.file', ['filename' => $image->image_path])}}" class="card-img-top" alt="Error al cargar la imagen">
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h5 class="card-title">
                        <img src="{{asset('images/heart.png')}}" class="likes"/> 
                        {{ $image->description }}
                    </h5>
                    @if(count($image->likes) > 0)
                        <h6 class="card-subtitle">{{ count($image->likes )}} Likes</h6>
                    @else
                        <h6 class="card-subtitle pb-2">No Likes</h6>
                    @endif
                    <a href="#" class="btn btn-warning">
                            Comentarios({{count($image->comments)}})
                        </a>
                    @if(count($image->comments) > 0)
                        @foreach($image->comments as $comment)
                        
                        <p class="card-text">{{$comment->user->name.': '.$comment->content}}</p>
                        @endforeach
                    @else
                        {{-- <p class="card-text">Todavía no existen comentarios para esta foto</p> --}}
                    @endif
                    
                </div>
            </div>
            @endforeach
            <!-- Paginación -->
            {{$images->links()}}
        </div>
    </div>
</div>
@endsection
