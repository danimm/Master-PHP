@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    @if($image->user->image)
                    <img class="avatar" src="{{ route('image.file', ['filename' =>$image->image_path]) }}" alt="">
                    @else
                    <img class="avatar" src="http://www.stickpng.com/assets/images/585e4beacb11b227491c3399.png" alt="">
                    @endif
                    Editar mi publicación
                </div>
                <div class="card-body">
                    <form action="{{route('image.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="image_id" value="{{$image->id}}">
                        <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">Imagen</label>

                            <div class="col-md-6">
                                @if($image->user->image)
                                <img style="max-width: 30%; margin-bottom: 20px;"
                                    src="{{ route('image.file', ['filename' =>$image->image_path]) }}" alt="">
                                @else
                                <img class="avatar"
                                    src="http://www.stickpng.com/assets/images/585e4beacb11b227491c3399.png" alt="">
                                @endif
                                <input type="file" id="image_path" name="image_path"
                                    class="form-control {{ $errors->has('image_path') ? 'is-invalid' : '' }}">
                                @if($errors->has('image_path'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image_path') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">Descripción</label>
                            <div class="col-md-6">
                                <textarea type="text" id="image_path" name="description"
                                    class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" required>{{$image->description}}
                                </textarea>
                                @if($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="Actualizar imagen">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
