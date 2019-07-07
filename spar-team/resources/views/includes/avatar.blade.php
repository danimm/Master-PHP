@if (Auth::user()->image)
<img class="avatar" src="{{ route('user.avatar', ['filename' =>Auth::user()->image]) }}" alt="">
@else
<img class="avatar" src="https://cdn2.iconfinder.com/data/icons/rcons-user/32/male-shadow-circle-512.png" alt="">
@endif
