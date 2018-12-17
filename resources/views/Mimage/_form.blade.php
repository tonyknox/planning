<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('imgid', 'ID:') !!}
			{!! Form::text('imgid', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('imgname', 'Image Name:') !!}
			{!! Form::text('imgname', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('imgpath', 'Path:') !!}
			{!! Form::text('imgpath', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('imgext', 'Extension:') !!}
			{!! Form::text('imgext', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('alt', 'Alt:') !!}
			{!! Form::text('alt', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('caption', 'Caption:') !!}
			{!! Form::text('caption', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('credit', 'Credit:') !!}
			{!! Form::text('credit', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('person_ppid', 'Person ID:') !!}
			{!! Form::text('person_ppid', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('place_plid', 'Place ID:') !!}
			{!! Form::text('place_plid', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('article_artid', 'Article ID:') !!}
			{!! Form::text('article_artid', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('imgcomments', 'Comments:') !!}
			{!! Form::textarea('imgcomments', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('created_at', 'Created:') !!}
			{!! Form::text('created_at', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('updated_at', 'Updated:') !!}
			{!! Form::text('updated_at', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	</div>
</div>