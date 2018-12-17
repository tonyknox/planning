<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('dirid', 'ID:') !!}
			{!! Form::text('dirid', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('dname', 'Name:') !!}
			{!! Form::text('dname', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('dirDescription', 'Description:') !!}
			{!! Form::textarea('dirDescription', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('headlineCol1', 'Headline Column 1:') !!}
			{!! Form::text('headlineCol1', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('infoCol1', 'Column 1:') !!}
			{!! Form::textarea('infoCol1', NULL, ['class' => 'form-control' ]) !!}
		</div>

			<div class="form-group">
			{!! Form::label('headlineCol2', 'Headline Column 2:') !!}
			{!! Form::text('headlineCol2', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('infoCol2', 'Column 2:') !!}
			{!! Form::textarea('infoCol2', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{!! Form::label('headlineCol3', 'Headline Column 3:') !!}
			{!! Form::text('headlineCol3', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('infoCol3', 'Column 3:') !!}
			{!! Form::textarea('infoCol3', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('dirImage', 'Main Image:') !!}
			{!! Form::text('dirImage', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('dirCaption', 'Caption:') !!}
			{!! Form::text('dirCaption', NULL, ['class' => 'form-control' ]) !!}
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