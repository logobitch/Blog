<!--- Title Field --->
<div class="form-group">
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('content', 'Content:') !!}
	{!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>
<!--- PublishAt Field --->
<div class="form-group">
	{!! Form::label('published_at', 'PublishedAt:') !!}
	{!! Form::input('date','published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
{!! Form::submit($submitButton,['class'=>'btn btn-primary form-control']) !!}