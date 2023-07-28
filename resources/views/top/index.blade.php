@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            @include('shared.top-title')
        </div>
        <div class="box">
            <h2 class="top-description">{{ __('messages.app_description') }}</h2>
        </div>
        <div class="box">
            <a href="{{ route('question', ['id' => '1']) }}" class="btn btn-solid-gold">エントリー</a>
            </a>
        </div>
    </div>
@endsection
