@extends('user.base')

@section('title')
69Animes | Watch All Types of Animes for Free
@endsection


@section('content')
<div id="recent">
    @foreach ($animes as $anime)
        <x-card :anime="$anime"/>
    @endforeach
</div>
@endsection
