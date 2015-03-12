@extends('layouts/search')
 
@section('content')
    <h2>Create Title</h2>
 
    {!! Form::model(new App\Title, ['route' => ['titles.store']]) !!}
        @include('titles/partials/_form', ['submit_text' => 'Create Title'])
    {!! Form::close() !!}
@endsection