@if(isset($options->model) && isset($options->type))
	
	@if(class_exists($options->model))

		@php $relationshipField = $row->field; @endphp

		@if($options->type == 'belongsTo')

			@if(isset($view) && ($view == 'browse' || $view == 'read'))

				@php 
					$relationshipData = (isset($data)) ? $data : $dataTypeContent;
					$model = app($options->model);
					if (method_exists($model, 'getRelationship')) {
						$query = $model::getRelationship($relationshipData->{$options->column});
					} else {
						$query = $model::find($relationshipData->{$options->column});
					}
            	@endphp

            	@if(isset($query))
					<p>{{ $query->{$options->label} }}</p>
				@else
					<p>No results</p>
				@endif

			@else
			
				<select class="form-control select2" name="{{ $options->column }}">
					@php 
						$model = app($options->model);
	            		$query = $model::all();
	            	@endphp
					@foreach($query as $relationshipData)
						<option value="{{ $relationshipData->{$options->key} }}" @if($dataTypeContent->{$options->column} == $relationshipData->{$options->key}){{ 'selected="selected"' }}@endif>{{ $relationshipData->{$options->label} }}</option>
					@endforeach
				</select>

			@endif
		
		@elseif($options->type == 'hasOne')

			@php 

				$relationshipData = (isset($data)) ? $data : $dataTypeContent;
			
				$model = app($options->model);
        		$query = $model::where($options->column, '=', $relationshipData->id)->first();
			
			@endphp

			@if(isset($query))
				<p>{{ $query->{$options->label} }}</p>
			@else
				<p>None results</p>
			@endif

		@elseif($options->type == 'hasMany')

			@if(isset($view) && ($view == 'browse' || $view == 'read'))

				@php
					$relationshipData = (isset($data)) ? $data : $dataTypeContent;
					$model = app($options->model);
            		$selected_values = $model::where($options->column, '=', $relationshipData->id)->pluck($options->label)->all();
				@endphp

	            @if($view == 'browse')
	            	@php
	            		$string_values = implode(", ", $selected_values); 
	            		if(strlen($string_values) > 25){ $string_values = substr($string_values, 0, 25) . '...'; } 
	            	@endphp
	            	@if(empty($selected_values))
		            	<p>No results</p>
		            @else
	            		<p>{{ $string_values }}</p>
	            	@endif
	            @else
	            	@if(empty($selected_values))
		            	<p>No results</p>
		            @else
		            	<ul>
			            	@foreach($selected_values as $selected_value)
			            		<li>{{ $selected_value }}</li>
			            	@endforeach
			            </ul>
			        @endif
	            @endif

			@else

				@php
					$model = app($options->model);
            		$query = $model::where($options->column, '=', $dataTypeContent->id)->get();
				@endphp

				@if(isset($query))
					<ul class="list-inline">
						@foreach($query as $query_res)
							
							<li>
								@if(get_class($query_res) == 'App\Attachment')
							
									@php $attachments = json_decode($query_res->path) @endphp

									@foreach($attachments as $attachment)

										<a href="/admin/anexos/{{ $query_res->id }}">
											<div class="panel text-center">
												<div class="panel-body">
													@php $path = "storage/" . $attachment->download_link @endphp
													
													@if(exif_imagetype($path))
														<img src="/{{ $path }}" alt="{{ $query_res->title }}" title="{{ $query_res->title }}" class="img-responsive center-block" />
													
													@else

														<h1 class="voyager-file-text"></h1>

													@endif
													
												</div>
												<div class="panel-footer">
													<h5>{{ $query_res->title }}</h5>
													@if($query_res->active)
														<span class="label label-default">Anexo Ativo</span>
													@endif
												</div>
											</div>
										</a>

									@endforeach
								
								@else
									{{ $query_res->{$options->label} }}
								@endif
							</li>
						@endforeach
					</ul>
					
				@else
					<p>No results</p>
				@endif

			@endif

		@elseif($options->type == 'belongsToMany')

			@if(isset($view) && ($view == 'browse' || $view == 'read'))

				@php
					$relationshipData = (isset($data)) ? $data : $dataTypeContent;
	            	$selected_values = isset($relationshipData) ? $relationshipData->belongsToMany($options->model, $options->pivot_table)->pluck($options->label)->all() : array();
	            @endphp

	            @if($view == 'browse')
	            	@php
	            		$string_values = implode(", ", $selected_values); 
	            		if(strlen($string_values) > 25){ $string_values = substr($string_values, 0, 25) . '...'; } 
	            	@endphp
	            	@if(empty($selected_values))
		            	<p>No results</p>
		            @else
	            		<p>{{ $string_values }}</p>
	            	@endif
	            @else
	            	@if(empty($selected_values))
		            	<p>No results</p>
		            @else
		            	<ul>
			            	@foreach($selected_values as $selected_value)
			            		<li>{{ $selected_value }}</li>
			            	@endforeach
			            </ul>
			        @endif
	            @endif

			@else

				<select class="form-control select2" name="{{ $relationshipField }}[]" multiple>
					
			            @php 
					$selected_values = isset($dataTypeContent) ? $dataTypeContent->belongsToMany($options->model, $options->pivot_table)->pluck($options->table.'.'.$options->key)->all() : array();
			                $relationshipOptions = app($options->model)->all();
			            @endphp

			            @foreach($relationshipOptions as $relationshipOption)
			                <option value="{{ $relationshipOption->{$options->key} }}" @if(in_array($relationshipOption->{$options->key}, $selected_values)){{ 'selected="selected"' }}@endif>{{ $relationshipOption->{$options->label} }}</option>
			            @endforeach

			    </select>

			@endif

		@endif

	@else

		cannot make relationship because {{ $options->model }} does not exist.

	@endif

@endif
