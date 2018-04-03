<form role="form"
        class="form-edit-add"
        action="@if(!is_null($dataTypeContent->getKey())){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
        method="POST" enctype="multipart/form-data">
    <!-- PUT Method if we are editing -->
    @if(!is_null($dataTypeContent->getKey()))
        {{ method_field("PUT") }}
    @endif

    <!-- CSRF TOKEN -->
    {{ csrf_field() }}

    <div class="panel-body">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Adding / Editing -->
        @php
            $dataTypeRows = $dataType->{(!is_null($dataTypeContent->getKey()) ? 'editRows' : 'addRows' )};
        @endphp

        @foreach($dataTypeRows as $row)
            <!-- GET THE DISPLAY OPTIONS -->
            @php
                $options = json_decode($row->details);
                $display_options = isset($options->display) ? $options->display : NULL;
            @endphp
            @if ($options && isset($options->formfields_custom))
                @include('voyager::formfields.custom.' . $options->formfields_custom)
            @else
                <div class="form-group @if($row->type == 'hidden') hidden @endif @if(isset($display_options->width)){{ 'col-md-' . $display_options->width }}@else{{ '' }}@endif" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                    {{ $row->slugify }}
                    <label for="name">{{ $row->display_name }}</label>
                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                    @if($row->type == 'relationship')
                        @include('voyager::formfields.relationship')
                    @else
                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                    @endif

                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                    @endforeach
                </div>
            @endif
        @endforeach

    </div><!-- panel-body -->

    <div class="panel-footer">
        <button type="submit" class="btn btn-primary save">{{ __('voyager.generic.save') }}</button>
    </div>
</form>

<iframe id="form_target" name="form_target" style="display:none"></iframe>
<form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
        enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
    <input name="image" id="upload_file" type="file"
                onchange="$('#my_form').submit();this.value='';">
    <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
    {{ csrf_field() }}
</form>

@section('javascript')
    <script>

        $('document').ready(function () {

            let elEventSelect = $('.select2[name="event_id"]'),
                eventModal = $('#event-create-modal');

            elEventSelect.select2({
                language: {
                    noResults: function(e){
                        let newTag = elEventSelect.data('select2').$dropdown.find("input").val();
                        return `
                            <div id="newNoResults">
                                <div class="noResults">Nenhum resultado encontrado</div>
                                <div class="createNew">
                                    <a href="#event-create-modal" data-event-name="` + newTag + `" data-toggle="modal" data-target="#event-create-modal">Criar novo evento: <strong>` + newTag + `</strong></a>
                                </div>
                            </div>
                        `;
                    }
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });

            $('#submit-event-create').on('click', function(){

                $('#submit-event-create .save').hide();
                $('#submit-event-create .keeping').removeClass('hidden');

                params = {
                    name: $('#event-create-modal input[name="name"]').val(),
                    _token: '{{ csrf_token() }}'
                };

                $.post('/api/eventos', params, function(data, status){

                    if (status == 'success') {

                        $('#submit-event-create .save').show();
                        $('#submit-event-create .keeping').addClass('hidden');
                        
                        toastr.success('Evento ' + data.name + ' criado com sucesso!');

                        let newOption = new Option(data.name, data.id, true, true);
                        elEventSelect.append(newOption).trigger('change');

                        eventModal.modal('toggle');
                    } else {
                        toastr.error('Algo deu errado.');
                    }
                });
            });

            eventModal.on('show.bs.modal', function(e) {

                //get data-id attribute of the clicked element
                var eventName = $(e.relatedTarget).data('event-name');

                //populate the textbox
                $(e.currentTarget).find('input[name="name"]').val(eventName);
            });
        });
    </script>
@stop

<div id="event-create-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Criar novo evento rapidamente</h4>
      </div>
      <form ref="form">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Nome</label>
                <input required="" type="text" class="form-control" name="name" placeholder="Nome" autofocus>
            </div>
        </div>
        <div class="modal-footer text-left">
            <button type="button" id="submit-event-create" class="btn btn-primary login-button">
                <span class="keeping hidden"><span class="voyager-refresh"></span> Guardando...</span>
                <span class="save">Guardar</span>
            </button>
        </div>
      </form>
    </div>
  </div>
</div>