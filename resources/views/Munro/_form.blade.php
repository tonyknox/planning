
	<div class="row">
		<div class="col">
			
		<div class="form-group">
			{!! Form::label('amname', 'Page Name:') !!}
			{!! Form::text('amname', NULL, ['class' => 'form-control' ]) !!}
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
			{!! Form::label('amdescription', 'Page Description:') !!}
			{!! Form::text('amdescription', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		
		<div class="form-group">
			{!! Form::label('amchapter', 'Chapter Name:') !!}
			{!! Form::text('amchapter', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	
	</div>

	<div class="col">
		
		<div class="form-group">
			{!! Form::label('aminfo', 'Info:') !!}
			{!! Form::textarea('aminfo', NULL, ['class' => 'form-control', 'rows' => 32 ]) !!}
		</div>
	
	</div>
</div>