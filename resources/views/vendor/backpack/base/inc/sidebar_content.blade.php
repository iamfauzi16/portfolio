{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('banner') }}"><i class="nav-icon la la-bookmark"></i> Banners</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('experience') }}"><i class="nav-icon la la-question"></i> Experiences</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('portfolios') }}"><i class="nav-icon la la-question"></i> Portfolios</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('designs') }}"><i class="nav-icon la la-question"></i> Designs</a></li>