@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Spar SuperMarkt {{ $data->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $data->address .' '.$data->postcode . ' ' . $data->place }}
                    </h5>
                    <iframe src="{{ $data->map}}" width="400" height="450" frameborder="0" style="border:0"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <h3>Spar SuperMarkt {{ $data->name }}</h3>
            <h6>{{ $data->address .' '.$data->postcode . ' ' . $data->place }}</h6>
            <div class="form-group">
                <label for="" class="mb-4 mt-4">Noten</label>
                <p>Bitte überprüft ob der Fahrplan so Sinn macht und ändert die Planung gegebenenfalls.</p>
                <p>Freitag wie ihr seht ist Rapperswil, Claudia könntest du da noch kommen? Ich suche noch 1-2 Personen
                    die Muster legen können.</p>
                <p>Wenn ihr am Donnerstag in Wettingen zuviele Personen seid dürfen PR FR und ROB frei nehmen. Bitte
                    nicht vergessen mich zu orientieren.</p>
            </div>
        </div>
        <div class="col">
            <iframe src="{{ $data->map}}" width="90%" height="650" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
@endsection
