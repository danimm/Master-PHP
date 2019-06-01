@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
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
                        <img src="{{asset('images/heart.png')}}" class="likes"/> 
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
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
