@extends('layouts.main')

@section('content')
    <div class="row test">
        <div class="card text-center col-md background">
            <div class="card-body" id="card-word">
                <h5 class="card-title">{{ $words[$randNum]['word'] }}</h5>
                <p class="card-text">{{ $words[$randNum]['transcription'] }}</p>
                <p class="card-text">{{ $words[$randNum]['translate'] }}</p>
                <a href="/" class="btn btn-primary">Next-></a>
            </div>
        </div>
    </div>
@endsection
