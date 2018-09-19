@if(!empty($childs) && Dashboard::menu()->container->where('location',$slug)->count())
    <li class="nav-item @isset($active) {{active($active)}} @endisset @if (!empty($childs)) dropdown @endif">
        <a href="{{$route ?? '#'}}" class="nav-link padder-v"    @if (!empty($childs)) data-toggle="dropdown" @endif>
            @isset($badge)
                <b class="badge {{$badge['class']}} pull-right">{{$badge['data']()}}</b>
            @endisset
            <i class="{{$icon}} m-r-xs"></i>
            {{trans($label)}}
        </a>
        @if (!empty($childs))
            <div class="dropdown-menu dropdown-menu-arrow bg-white">
                @isset($groupname)
                    <div class="hidden-folded padder m-t-xs m-b-xs text-muted text-xs">{{trans($groupname)}}</div>
                @endisset
                {!! Dashboard::menu()->render($slug,'platform::partials.dropdownMenu') !!}
            </div>
        @endif
    </li>

    @isset($divider)
        <li class="divider b-t b-dark"></li>
    @endisset
@endif
