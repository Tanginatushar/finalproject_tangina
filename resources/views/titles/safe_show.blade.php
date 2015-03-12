<!-- /resources/views/titles/index.blade.php -->
@extends('layouts/search')

@section('content')
    <h2>Title of Article</h2>

    @if ( !$titles->count() )
        You have no titles
    @else
        <ul>
            @foreach( $titles as $title )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('titles.destroy', $title->summery))) !!}
                        <a href="{{ route('titles.show', $title->summery) }}">{{ $title->author }}</a>
                        (
                            {!! link_to_route('titles.edit', 'Edit', array($title->summery), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('titles.create', 'Create Title') !!}
    </p>
@endsection