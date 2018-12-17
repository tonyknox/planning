<div class="row">
	<div class="col">
		<div class="form-group">
			{!! Form::label('bkid', 'ID:') !!}
			{!! Form::text('bkid', NULL, ['class' => 'form-control' ]) !!}
		</div>
	
		<div class="form-group">
			{!! Form::label('bkname', 'Name:') !!}
			{!! Form::text('bkname', NULL, ['class' => 'form-control' ]) !!}
		</div>
	<div class="form-group">
			{!! Form::label('bkauthor', 'Author:') !!}
			{!! Form::text('bkauthor', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('publisher', 'Publisher:') !!}
			{!! Form::text('publisher', NULL, ['class' => 'form-control' ]) !!}
		</div>
	
		<div class="form-group">
			{!! Form::label('isbn', 'ISBN:') !!}
			{!! Form::text('isbn', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('datepublished', 'Publication Date:') !!}
			{!! Form::text('datepublished', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('bktype', 'Type:') !!}
			{!! Form::text('bktype', NULL, ['class' => 'form-control' ]) !!}
		</div>
	
		<div class="form-group">
			{!! Form::label('bkthumb', 'Thumbnail:') !!}
			{!! Form::text('bkthumb', NULL, ['class' => 'form-control' ]) !!}
		</div>
	</div>
	<div class="col">
		
	
		
	<div class="form-group">
			{!! Form::label('bkdescription', 'Description:') !!}
			{!! Form::textarea('bkdescription', NULL, ['class' => 'form-control' ]) !!}
		</div>

		<div class="form-group">
			{!! Form::label('bkinfo', 'Info:') !!}
			{!! Form::textarea('bkinfo', NULL, ['class' => 'form-control' ]) !!}
		</div>
		
	
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control']) !!}
		</div>
	</div>
</div>