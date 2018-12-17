
<div class="row">
	<div class="col">
		<table><tr><td>
			<div class="form-group">
				{!! Form::label('artid', 'ID:') !!}
				{!! Form::text('artid', NULL, ['class' => 'form-control' ]) !!}
			</div>
			</td><td>
				<div class="form-group">
					{!! Form::label('person_ppid', 'Person ID:') !!}
					{!! Form::text('person_ppid', NULL, ['class' => 'form-control' ]) !!}
				</div>
			</td><td>
				<div class="form-group">
					{!! Form::label('directory_dirid', 'Directory ID:') !!}
					{!! Form::text('directory_dirid', NULL, ['class' => 'form-control' ]) !!}
				</div>
		</td></tr></table>

		<div class="form-group">
			{!! Form::label('artsort', 'Sort:') !!}
			{!! Form::text('artsort', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('headline', 'Name/Headline:') !!}
			{!! Form::text('headline', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('artdate', 'Date:') !!}
			{!! Form::text('artdate', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('artauthor', 'Author:') !!}
			{!! Form::text('artauthor', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('artcredit', 'Credit:') !!}
			{!! Form::text('artcredit', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('artthumb', 'Thumbnail:') !!}
			{!! Form::textarea('artthumb', NULL, ['class' => 'form-control', 'rows' => 2 ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('artimage', 'Image:') !!}
			{!! Form::textarea('artimage', NULL, ['class' => 'form-control', 'rows' => 2 ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('artcaption', 'Caption:') !!}
			{!! Form::text('artcaption', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('arttag', 'Tag:') !!}
			{!! Form::text('arttag', NULL, ['class' => 'form-control' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
		</div>
	</div>

	<div class="col">

		<div class="form-group">
			{!! Form::label('abstract', 'Abstract:') !!}
			{!! Form::textarea('abstract', NULL, ['class' => 'form-control', 'rows' => 4 ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('article', 'Article:') !!}
			{!! Form::textarea('article', NULL, ['class' => 'form-control', 'rows' => 24 ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('artsidebar', 'Sidebar:') !!}
			{!! Form::textarea('artsidebar', NULL, ['class' => 'form-control', 'rows' => 5 ]) !!}
		</div>
	</div>
</div>
