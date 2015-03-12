<!-- /resources/views/results/create.blade.php -->
@extends('layouts/search')
 
@section('content')
    <h2>Create Result for Title "{{ $title->author }}"</h2>
 
    {!! Form::model(new App\Result, ['route' => ['titles.results.store', $title->summery], 'class'=>'']) !!}
        @include('results/partials/_form', ['submit_text' => 'Create Result'])
    {!! Form::close() !!}
@endsection