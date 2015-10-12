

{!! Form::hidden('user_id',1) !!}
<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Publish on:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>