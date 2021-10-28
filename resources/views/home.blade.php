@extends('layouts.main')

@section('content')
        <div class="row test">
            <div class="card text-center col-md background">
                <div class="card-body" id="card-word">
                    <p class="card-title card-font-control"><span id="word">Word</span></p>
                    <p class="card-text">transcription</p>
                    <p class="card-text card-font-control" id="translation">translation</p>
                    <button class="btn btn-primary" id="next-button">Next-></button>
                </div>
            </div>
        </div>
@endsection
