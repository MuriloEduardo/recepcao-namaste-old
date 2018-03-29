<ul class="nav navbar-nav">

@php
    $divider = 'header-menu';

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }
@endphp

@foreach ($items as $item)
    @php
        $listItemClass = [];
        $styles = null;
        $linkAttributes = null;
        $transItem = $item;

        if (Voyager::translatable($item)) {
            $transItem = $item->translate($options->locale);
        }

        $href = $item->link();

        // Current page
        if(url($href) == url()->current()) {
            array_push($listItemClass, 'active');
        }

        $permission = '';
        $hasChildren = false;

        // With Children Attributes
        if(!$item->children->isEmpty())
        {
            foreach($item->children as $child)
            {
                $hasChildren = $hasChildren || Auth::user()->can('browse', $child);

                if(url($child->link()) == url()->current())
                {
                    array_push($listItemClass, 'active');
                }
            }
            if (!$hasChildren) {
                continue;
            }

            $linkAttributes = 'href="#' . str_slug($transItem->title, '-') .'-dropdown-element" data-toggle="collapse" aria-expanded="'. (in_array('active', $listItemClass) ? 'true' : 'false').'"';
            array_push($listItemClass, 'dropdown');
        }
        else
        {
            if ($href) {
                $linkAttributes =  'href="' . url($href) .'"';
            }

            if ($item->icon_class == $divider) {
                array_push($listItemClass, $divider);
            }

            if(!Auth::user()->can('browse', $item)) {
                continue;
            }
        }
    @endphp

    <li class="{{ implode(" ", $listItemClass) }}">
        <a {!! $linkAttributes !!} target="{{ $item->target }}">
            @if($item->icon_class && $item->icon_class != $divider)
                <span class="icon {{ $item->icon_class }}"></span>
            @endif
            <span class="title">{{ $transItem->title }}</span>
        </a>
        @if($hasChildren)
            <div id="{{ str_slug($transItem->title, '-') }}-dropdown-element" class="panel-collapse collapse {{ (in_array('active', $listItemClass) ? 'in' : '') }}">
                <div class="panel-body">
                    @include('voyager::menu.admin_menu', ['items' => $item->children, 'options' => $options, 'innerLoop' => true])
                </div>
            </div>
        @endif
    </li>
@endforeach

</ul>
