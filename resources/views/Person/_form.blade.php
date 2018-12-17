<div class="row">
	
	<div class="col">
		<div class="form-group">
			{!! Form::label('ppid', 'ID:') !!}
			{!! Form::text('ppid', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('directory_dirid', 'Directory ID:') !!}
			{!! Form::text('directory_dirid', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('first', 'First Name:') !!}
			{!! Form::text('first', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('last', 'Surname:') !!}
			{!! Form::text('last', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('salutation', 'Salutation:') !!}
			{!! Form::text('salutation', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('honorifics', 'Honorifics:') !!}
			{!! Form::text('honorifics', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('bioauthor', 'Author:') !!}
			{!! Form::text('bioauthor', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('ppimage', 'Image:') !!}
			{!! Form::textarea('ppimage', NULL, ['class' => 'form-control', 'rows' => 4 ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('ppcaption', 'Caption:') !!}
			{!! Form::text('ppcaption', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('pptag', 'Tag:') !!}
			{!! Form::text('pptag', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
		{!! Form::label('type', 'Type:') !!}
		{!! Form::text('type', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	</div>
	<div class="col">

		<div class="form-group">
			{!! Form::label('biography', 'Biography:') !!}
			{!! Form::textarea('biography', NULL, ['class' => 'form-control', 'rows' => 24 ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ppsidebar', 'Sidebar:') !!}
			{!! Form::textarea('ppsidebar]]', NULL, ['class' => 'form-control', 'rows' => 9 ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('ppcomments', 'Comments:') !!}
			{!! Form::textarea('ppcomments', NULL, ['class' => 'form-control', 'rows' => 2 ]) !!}
		</div>
	</div>
</div>