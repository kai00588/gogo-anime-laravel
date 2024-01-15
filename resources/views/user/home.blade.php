@extends('user.base')

@section('title')
69Animes | Watch All Types of Animes for Free
@endsection


@section('content')
<div id="recent" class="bg-slate-600">
    @foreach ($animes as $anime)
        <x-card :anime="$anime"/>
    @endforeach
</div>
@endsection
@section('style')
    <style>
        #recent {
            margin-top: 1rem;
            display: flex;
            justify-content: space-around;
            width: 100%;
            flex-wrap: wrap;
        }
    </style>
@endsection
