@extends('layouts/search')

@section('content')
    <h2>
        {!! link_to_route('titles.show', $title->author, [$title->summery]) !!} -
        {{ $result->author }}
    </h2>

    {{ $result->detail }}
@endsection