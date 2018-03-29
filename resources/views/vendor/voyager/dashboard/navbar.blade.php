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
        <ul class="nav navbar-nav navbar-right navbar-btn">
            <div class="btn-group">
                <button id="btnTxt" type="button" class="btn btn-danger" data-toggle="modal" data-target="#customer-create-modal">Novo cliente</button>
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right fast-links" role="menu">
                    <li><a href="/admin/participacoes/create">Nova participação</a></li>
                </ul>
            </div>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button"
                   aria-expanded="false"><img src="{{ $user_avatar }}" class="profile-img"> <span
                            class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <img src="{{ $user_avatar }}" class="profile-img">
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
<div id="customer-create-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
            <i class="voyager-people"></i>
            Adicionar Cliente
        </h4>
      </div>
      <form ref="form" action="/admin/clientes" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
                <label for="name" class="control-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required autofocus>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone" class="control-label">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
        </div>
        <div class="modal-footer text-left">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
