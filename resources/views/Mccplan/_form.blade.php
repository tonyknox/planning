
	<div class="row">
		<div class="col">
			
		<div class="form-group">
			{!! Form::label('mccname', 'Page Name:') !!}
			{!! Form::text('mccname', NULL, ['class' => 'form-control' ]) !!}
		</div>


		<div class="form-group">
			{!! Form::label('chapter_chapid', 'Chapter ID:') !!}
			{!! Form::text('chapter_chapid', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
		{!! Form::label('book_bkid', 'Book ID:') !!}
		{!! Form::text('book_bkid', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('mccdescription', 'Page Description:') !!}
			{!! Form::text('mccdescription', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		
		<div class="form-group">
			{!! Form::label('chapter', 'Chapter Name:') !!}
			{!! Form::text('chapter', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	
	</div>

	<div class="col">
		
		<div class="form-group">
			{!! Form::label('mccinfo', 'Info:') !!}
			{!! Form::textarea('mccinfo', NULL, ['class' => 'form-control', 'rows' => 32 ]) !!}
		</div>
	
	</div>
</div>