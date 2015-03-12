@extends('layouts/search')

@section('content')
    <h2>{{ $title->author }}</h2>


        <ul>
            @foreach( $title->results as $result )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('titles.results.destroy', $title->summery, $result->summery))) !!}
                    <a href="{{ route('titles.results.show', [$title->summery, $result->summery]) }}">{{ $result->author }}</a>
                    (
                    {!! link_to_route('titles.results.edit', 'Edit', array($title->summery, $result->summery), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>


    <p>
        {!! link_to_route('titles.index', 'Back to Titles') !!} |
        {!! link_to_route('titles.results.create', 'Create Article', $title->summery) !!}
    </p>
@endsection