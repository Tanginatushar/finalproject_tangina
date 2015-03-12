<div class="form-group">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author') !!}
</div>
<div class="form-group">
    {!! Form::label('summery', 'Article Title:') !!}
    {!! Form::text('summery') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>

