@extends('user.base')

@section('title')
69Animes | Watch All Types of Animes for Free
@endsection


@section('content')
<div id="recent">
    <h2>Wellcome to Recent Page</h2>
    @foreach ($animes as $anime)
        <h2>{{$anime['title']}}</h2>
    @endforeach
</div>
@endsection
