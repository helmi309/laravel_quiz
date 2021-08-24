@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse" style="background: #F2F5F5">
        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">

                <li class="{{ $request->segment(1) == 'lucky_draw' ? 'active active-sub' : '' }}">
                    <a href="{{ route('lucky_draw') }}">
                        <i class="fa fa-th-list"></i>
                        <span class="title" style="color: black">
                                @lang('quickadmin.lucky_draw')
                            </span>
                    </a>
                </li>
                <li class="{{ $request->segment(1) == 'box_page' ? 'active active-sub' : '' }}">
                    <a href="{{ route('box_page') }}">
                        <i class="fa fa-th-list"></i>
                        <span class="title" style="color: black">
                                @lang('quickadmin.box_page')
                            </span>
                    </a>
                </li>
                <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title" style="color: black">@lang('quickadmin.logout')</span>
                </a>
            </li>
        </ul>

            </div>
</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
