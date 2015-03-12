@extends('layouts/search')
 
@section('content')
    <h2>Edit Title</h2>
 
    {!! Form::model($title, ['method' => 'PATCH', 'route' => ['titles.update', $title->summery]]) !!}
        @include('titles/partials/_form', ['submit_text' => 'Edit Title'])
    {!! Form::close() !!}
@endsection