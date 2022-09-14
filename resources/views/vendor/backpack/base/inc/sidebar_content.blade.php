{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i
            class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon las la-list-ol"></i>
        Danh mục</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('grade') }}"><i class="nav-icon lab la-laravel"></i> Khóa học</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon las la-tags"></i> Nhãn</a></li>
