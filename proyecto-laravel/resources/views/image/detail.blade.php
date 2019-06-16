@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.message')
            <div class="card mb-4">
                <div class="card-header">
                    @if($image->user->image)
                        <img class="avatar" src="{{ route('user.avatar', ['filename' =>$image->user->image]) }}" alt="">
                    @else
                        <img class="avatar" src="http://www.stickpng.com/assets/images/585e4beacb11b227491c3399.png" alt="">
                    @endif
                    {{ $image->user->name. ' '.$image->user->surname.' | @'.$image->user->nick }}
                    <p style="color:grey">{{ \FormatTime::LongTimeFilter($image->created_at)}}</p>
                </div>
                <img src="{{ route('image.file', ['filename' => $image->image_path])}}" class="card-img-top" alt="Error al cargar la imagen">
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h5 class="card-title">
                        <!-- Comprobar si el usuario le dió like -->
                        <?php $user_like = false; ?>
                        @foreach ($image->likes as $like)
                            @if ($like->user_id == Auth::user()->id)
                                <?php $user_like = true; ?>
                            @endif
                        @endforeach
                        @if ($user_like)
                            <img src="{{asset('images/heart-rojo.png')}}" data-id="{{$image->id}}" class="btn-dislike likes"/>
                        @else
                            <img src="{{asset('images/heart.png')}}" data-id="{{$image->id}}" class="likes btn-like"/> 
                        @endif
                        {{ $image->description }}
                    </h5>
                    @if(count($image->likes) > 0)
                        <h6 class="card-subtitle">{{ count($image->likes )}} Likes</h6>
                    @else
                        <h6 class="card-subtitle pb-2">No Likes</h6>
                    @endif
                    
                    <form action="{{ route('comment.save') }}" method="POST">
                        @csrf
                        <input type="hidden" name="image_id" value="{{$image->id}}">
                        <p> 
                            <textarea class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="" cols="10" rows="4">
                            </textarea>
                            @if ($errors->has('content'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('content')}}</strong>
                            </span>
                            @endif
                        </p>
                        <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                    </form>
                        
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                <p>
                    {{ count($image->comments)}}
                    {{ count($image->comments) > 1 ? 'comentarios' : 'comentario'}}
                </p>
                </div>
                <div class="card-body">
                    @if(count($image->comments) > 0)
                    @foreach($image->comments as $comment)
                    <img class="avatar avatar-comment" src="{{ route('user.avatar', ['filename' =>$comment->user->image]) }}" alt="">
                    <span>{{$comment->user->nick.' | '}}</span><span style="color:grey" style="font-size:10px">{{ \FormatTime::LongTimeFilter($comment->created_at)}}</span>
                    <p class="card-text">
                        {{$comment->content}}
                    @if (Auth::check() && ($comment->user_id == Auth::user()->id) || $comment->image->user_id == Auth::user()->id)
                        <a class="btn btn-sm btn-danger" href="{{ route('comment.delete', ['id' => $comment->id])}}">
                            Borrar comentario
                        </a>
                    @endif
                    </p>
                    @endforeach
                    @else <p class="card-text">Todavía no existen comentarios para esta foto</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
