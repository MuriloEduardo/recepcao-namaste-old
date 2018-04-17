<nav id="navbar" class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="hamburger btn-link">
                <span class="hamburger-inner"></span>
            </button>
            @section('breadcrumbs')
            <ol class="breadcrumb hidden-xs">
                @if(count(Request::segments()) == 1)
                    <li class="active"><i class="voyager-boat"></i> {{ __('voyager.generic.dashboard') }}</li>
                @else
                    <li class="active">
                        <a href="{{ route('voyager.dashboard')}}"><i class="voyager-boat"></i> {{ __('voyager.generic.dashboard') }}</a>
                    </li>
                @endif
                <?php $breadcrumb_url = url(''); ?>
                @for($i = 1; $i <= count(Request::segments()); $i++)
                    <?php $breadcrumb_url .= '/' . Request::segment($i); ?>
                    @if(Request::segment($i) != ltrim(route('voyager.dashboard', [], false), '/') && !is_numeric(Request::segment($i)))

                        @if($i < count(Request::segments()) & $i > 0 && array_search('database',Request::segments())===false)
                            <li class="active"><a
                                        href="{{ $breadcrumb_url }}">{{ ucwords(str_replace('-', ' ', str_replace('_', ' ', Request::segment($i)))) }}</a>
                            </li>
                        @else
                            <li>{{ ucwords(str_replace('-', ' ', str_replace('_', ' ', Request::segment($i)))) }}</li>
                        @endif

                    @endif
                @endfor
            </ol>
            @show
        </div>
        <ul class="nav navbar-nav navbar-right">
            @if(!Request::is('admin/participacoes/create'))
                <li class="fast-link pull-left">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#participation-create-modal">Nova Participação</button>
                </li>
            @endif
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false">
                   <div class="profile-img profile-first-letter">{{ Auth::user()->name[0] }}</div>
                   <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <div class="profile-img profile-first-letter">{{ Auth::user()->name[0] }}</div>
                        <div class="profile-body">
                            <h5>{{ Auth::user()->name }}</h5>
                            <h6>{{ Auth::user()->email }}</h6>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <?php $nav_items = config('voyager.dashboard.navbar_items'); ?>
                    @if(is_array($nav_items) && !empty($nav_items))
                    @foreach($nav_items as $name => $item)
                    <li {!! isset($item['classes']) && !empty($item['classes']) ? 'class="'.$item['classes'].'"' : '' !!}>
                        @if(isset($item['route']) && $item['route'] == 'voyager.logout')
                        <form action="{{ route('voyager.logout') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-block">
                                @if(isset($item['icon_class']) && !empty($item['icon_class']))
                                <i class="{!! $item['icon_class'] !!}"></i>
                                @endif
                                {{$name}}
                            </button>
                        </form>
                        @else
                        <a href="{{ isset($item['route']) && Route::has($item['route']) ? route($item['route']) : (isset($item['route']) ? $item['route'] : '#') }}" {!! isset($item['target_blank']) && $item['target_blank'] ? 'target="_blank"' : '' !!}>
                            @if(isset($item['icon_class']) && !empty($item['icon_class']))
                            <i class="{!! $item['icon_class'] !!}"></i>
                            @endif
                            {{$name}}
                        </a>
                        @endif
                    </li>
                    @endforeach
                    @endif
                </ul>
            </li>
        </ul>
    </div>
</nav>

@if(!Request::is('admin/participacoes/create'))
    <div id="participation-create-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <i class="voyager-list-add"></i>
                        Adicionar Participação
                    </h4>
                </div>
                @php
                    $dataType = Voyager::model('DataType')->where('slug', '=', 'participacoes')->first();

                    $dataTypeContent = (strlen($dataType->model_name) != 0)
                                ? new $dataType->model_name()
                                : false;

                    foreach ($dataType->addRows as $key => $row) {
                        $details = json_decode($row->details);
                        $dataType->addRows[$key]['col_width'] = isset($details->width) ? $details->width : 100;
                    }

                    // If a column has a relationship associated with it, we do not want to show that field
                    App\Http\Controllers\Traits\BreadRelationshipParser::removeRelationshipField($dataType, 'add');

                    // Check if BREAD is Translatable
                    $isModelTranslatable = is_bread_translatable($dataTypeContent);
                @endphp

                @include('vendor.voyager.participacoes.form', compact('dataType', 'dataTypeContent', 'isModelTranslatable'))
            </div>
        </div>
    </div>
@endif