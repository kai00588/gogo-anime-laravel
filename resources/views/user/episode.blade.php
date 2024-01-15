@extends('user.base')
@section('title')
{{$anime->animeTitle}} || Watch Free Online Only on 69Animes.xyz
@endsection
@section('content')
<div id="content mt-2">
    <h2 class="ml-2">{{$anime->animeTitle}}</h2>
    <p class="ml-2">Type: {{$anime->type}}</p>
    <p class="ml-2">Released: {{$anime->releasedDate}}</p>
    <p class="ml-2">Status: {{$anime->status}}</p>
    <div id="grenes" class="flex flex-wrap ml-2 gap-2">
        @foreach ($anime->genres as $genre)
            <span class="bg-orange-400 rounded-lg px-2">{{$genre}}</span>
        @endforeach
    </div>
    <p class="ml-2">Other Names: {{$anime->otherNames}}</p>
    <div class="" id="player">
        <x-player :episodeId="$slug"/>
    </div>
    <div id="epinate" class="flex flex-wrap p-2 justify-between">
        <a href="/anime/{{$id[0]}}-episode-{{$id[1] - 1}}" class="text-orange-300 cursor-pointer">Episode: {{$id[1] - 1}}</a>
        <a href="/anime/{{$id[0]}}-episode-{{$id[1] + 1}}" class="text-orange-300 cursor-pointer">Episode: {{$id[1] + 1}}</a>
    </div>
</div>
@endsection
@section('style')
<style>
    .epinate {
        width: 100%;
    }
</style>
@endsection

