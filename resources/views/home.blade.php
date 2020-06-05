@extends('layouts.app')

@section('content')
    <div class="lg:flex justify-between">
        <div class="lg:w-32">
            @include('_sidebar-links')
        </div>
        <div class="lg:flex-1" style="max-width: 700px">
            @include('_publish-tweet-panel')
            <div class="border border-grey-300 rounded-lg">
                @foreach ($tweets as $tweet)
                    @include('_tweet')
                @endforeach
            </div>
        </div>
        <div class="lg:w-1/6 lg:mx-10 bg-blue-100 rounded-lg p-4 self-start">
            @include('_friends-list')
        </div>
    </div>
@endsection
