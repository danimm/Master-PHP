@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <form action="{{ route('shops.update', ['id' => $spar->id]) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        placeholder="Enter a name" value="{{ $spar->name }}">
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                        name="address" placeholder="Enter the address" value="{{ $spar->address }}">
                </div>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="postcode">Postcode</label>
                    <input type="text" class="form-control @error('postcode') is-invalid @enderror" id="postcode"
                        name="postcode" placeholder="Ej: 1234" value="{{ $spar->postcode }}">
                </div>
                @error('postcode')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="place">Place</label>
                    <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place"
                        placeholder="Enter a Place" value="{{ $spar->place }}">
                </div>
                @error('place')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="check" name="check">
                    <label class="form-check-label" for="check">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Modify</button>
            </form>
        </div>
    </div>
</div>

@endsection
