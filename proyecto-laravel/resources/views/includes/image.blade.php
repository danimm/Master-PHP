<div class="card mb-4">
  <div class="card-header">
      @if($image->user->image)
          <img class="avatar" src="{{ route('user.avatar', ['filename' =>$image->user->image]) }}" alt="">
      @else
          <img class="avatar" src="http://www.stickpng.com/assets/images/585e4beacb11b227491c3399.png" alt="">
      @endif
      <a href="{{ route('profile', ['id' => $image->user->id])}}">
          {{ $image->user->name. ' '.$image->user->surname.' | @'.$image->user->nick }} 
      </a>
  </div>
  <a href="{{ route('image.detail', ['id' => $image->id])}}">
      <img src="{{ route('image.file', ['filename' => $image->image_path])}}" class="card-img-top" alt="Error al cargar la imagen">
  </a>
  
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
      
      <a href="#" class="btn btn-primary">
          Comentarios: <span class="badge badge-light">{{count($image->comments)}}</span>
      </a>
      {{-- @if(count($image->comments) > 0) --}}
          {{-- @foreach($image->comments as $comment)
          
          <p class="card-text">{{$comment->user->name.': '.$comment->content}}</p>
          @endforeach --}}
          {{-- <p class="card-text">Todavía no existen comentarios para esta foto</p> --}}
      {{-- @endif --}}
      <p style="color:grey">{{ \FormatTime::LongTimeFilter($image->created_at)}}</p>
      
  </div>

</div>