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
                <div class="form-group {{ strtolower(preg_replace('/\s+/', '', $row->display_name)) }} @if($row->type == 'hidden') hidden @endif @if(isset($display_options->width)){{ 'col-md-' . $display_options->width }}@else{{ '' }}@endif" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
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
<form id="participations_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
        enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
    <input name="image" id="participations_upload_file" type="file"
                onchange="$('#participations_form').submit();this.value='';">
    <input type="hidden" name="type_slug" id="participations_type_slug" value="{{ $dataType->slug }}">
    {{ csrf_field() }}
</form>

@section('javascript')
    <script>

        $('document').ready(function () {

            let elEventSelect = $('select.select2[name="event_id"]'),
                elCustomerSelect = $('select.select2[name="participation_belongsto_customer_relationship_1[]"]'),
                elProfessionalSelect = $('select.select2[name="participation_belongstomany_professional_relationship[]"]'),
                customerModal = $('#customer-create-modal'),
                professionalModal = $('#professional-create-modal');

            elEventSelect
                .select2({
                    placeholder: 'Selecione o evento',
                    language: {
                        noResults: function(){
                            let newTag = elEventSelect.data('select2').$dropdown.find("input").val();
                            return `
                                <div id="newNoResults">
                                    <div class="noResults">Nenhum resultado encontrado</div>
                                </div>
                            `;
                        }
                    },
                    escapeMarkup: function (markup) {
                        return markup;
                    }
                });

            elCustomerSelect.select2({
                placeholder: 'Selecione quais clientes participaram deste evento',
                allowClear: true,
                language: {
                    noResults: function(){
                        let newTag = $('.form-group.clientes input.select2-search__field').val();
                        return `
                            <div id="newNoResults">
                                <div class="noResults">Nenhum resultado encontrado</div>
                                <div class="createNew">
                                    <a href="#customer-create-modal" data-keyboard="true" data-customer-name="` + newTag + `" data-toggle="modal" data-target="#customer-create-modal">Criar novo cliente: <strong>` + newTag + `</strong></a>
                                </div>
                            </div>
                        `;
                    }
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });

            elProfessionalSelect.select2({
                placeholder: 'Selecione quais profissionais participaram deste evento',
                allowClear: true,
                language: {
                    noResults: function(){
                        let newTag = $('.form-group.profissionais input.select2-search__field').val();
                        return `
                            <div id="newNoResults">
                                <div class="noResults">Nenhum resultado encontrado</div>
                                <div class="createNew">
                                    <a href="#professional-create-modal" data-keyboard="true" data-professional-name="` + newTag + `" data-toggle="modal" data-target="#professional-create-modal">Criar novo profissional: <strong>` + newTag + `</strong></a>
                                </div>
                            </div>
                        `;
                    }
                },
                escapeMarkup: function (markup) {
                    return markup;
                }
            });

            $('#submit-customer-create').on('click', function(){

                $('#submit-customer-create .save').hide();
                $('#submit-customer-create .keeping').removeClass('hidden');

                params = {
                    name: $('#customer-create-modal input[name="name"]').val(),
                    _token: '{{ csrf_token() }}'
                };

                $.post('/api/customers', params, function(data, status){

                    if (status == 'success') {

                        $('#submit-customer-create .save').show();
                        $('#submit-customer-create .keeping').addClass('hidden');
                        
                        toastr.success('Cliente ' + data.name + ' criado com sucesso!');

                        let newOption = new Option(data.name, data.id, true, true);
                        elCustomerSelect.append(newOption).trigger('change');

                        customerModal.modal('toggle');
                    } else {
                        toastr.error('Algo deu errado.');
                    }
                });
            });

            $('#submit-professional-create').on('click', function(){

                $('#submit-professional-create .save').hide();
                $('#submit-professional-create .keeping').removeClass('hidden');

                params = {
                    name: $('#professional-create-modal input[name="name"]').val(),
                    _token: '{{ csrf_token() }}'
                };

                $.post('/api/professionals', params, function(data, status){

                    if (status == 'success') {

                        $('#submit-professional-create .save').show();
                        $('#submit-professional-create .keeping').addClass('hidden');
                        
                        toastr.success('Profissional ' + data.name + ' criado com sucesso!');

                        let newOption = new Option(data.name, data.id, true, true);
                        elProfessionalSelect.append(newOption).trigger('change');

                        professionalModal.modal('toggle');
                    } else {
                        toastr.error('Algo deu errado.');
                    }
                });
            });

            customerModal.on('show.bs.modal', function(e) {

                //get data-id attribute of the clicked element
                var customerName = $(e.relatedTarget).data('customer-name');

                //populate the textbox
                $(e.currentTarget).find('input[name="name"]').val(customerName);
            });

            professionalModal.on('show.bs.modal', function(e) {

                //get data-id attribute of the clicked element
                var professionalName = $(e.relatedTarget).data('professional-name');

                //populate the textbox
                $(e.currentTarget).find('input[name="name"]').val(professionalName);
            });
        });
    </script>
@stop

<div id="customer-create-modal" class="modal fade" role="dialog" tabindex='-1'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Criar novo cliente rapidamente</h4>
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
            <button type="button" id="submit-customer-create" class="btn btn-primary login-button">
                <span class="keeping hidden"><span class="voyager-refresh"></span> Guardando...</span>
                <span class="save">Guardar</span>
            </button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="professional-create-modal" class="modal fade" role="dialog" tabindex='-1'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Criar novo profissional rapidamente</h4>
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
            <button type="button" id="submit-professional-create" class="btn btn-primary login-button">
                <span class="keeping hidden"><span class="voyager-refresh"></span> Guardando...</span>
                <span class="save">Guardar</span>
            </button>
        </div>
      </form>
    </div>
  </div>
</div>