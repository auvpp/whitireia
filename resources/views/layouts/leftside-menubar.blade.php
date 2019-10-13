<script>
  $(document).ready(function () {
    $('.nav-item.active').removeClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').closest('ul').closest('li').addClass('active');
    $('a[href="' + window.location.href + '"]').closest('li').addClass('active');
  });
</script>
<style>
  .nav-item.active {
    background-color: #fce8e6;
    font-weight: bold;
  }

  .nav-item.active a {
    color: #d93025;
  }

  .nav-link-text {
    padding-left: 10%;
  }

  #side-navbar ul>li>a {
    padding: 8px 15px;
  }
</style>

<ul class="nav flex-column">
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('home') }}"><i class="material-icons">dashboard</i> <span class="nav-link-text">@lang('Dashboard')</span></a>
  </li>

  @if(Auth::user()->role != 'student')
  <li class="nav-item dropdown">
    <a role="button" href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">class</i> <span class="nav-link-text">@lang('Programmes &amp; Courses')</span> <i class="material-icons pull-right">keyboard_arrow_down</i></a>
    <ul class="dropdown-menu" style="width: 100%;">
      <!-- Dropdown menu links -->
      <li>
        <a class="dropdown-item" href="{{ url('programmes/business') }}"><i class="material-icons">business</i> <span class="nav-link-text">@lang('Business')</span></a>
      </li>
      <li>
        <a class="dropdown-item" href="{{ url('programmes/it') }}"><i class="material-icons">computer</i> <span class="nav-link-text">@lang('Information Technology')</span></a>
      </li>
    </ul>
  </li>
  @else
  <li class="nav-item">
    <a href="{{ url('courses/selection') }}" class="nav-link"><i class="material-icons">class</i> <span class="nav-link-text">@lang('Courses Selection')</span></a>
  </li>
  @endif

  <li class="nav-item">
    <a class="nav-link" href="{{url('users/'.Auth::user()->school_id.'/teachers')}}"><i class="material-icons">contacts</i>
      <span class="nav-link-text">@lang('Teachers')</span></a>
  </li>
  @if(Auth::user()->role != 'student')
  <li class="nav-item">
    <a class="nav-link" href="{{url('users/'.Auth::user()->school_id.'/students')}}"><i class="material-icons">contacts</i>
      <span class="nav-link-text">@lang('Students')</span></a>
  </li>
  @endif

  <li class="nav-item" style="border-bottom: 1px solid #dbd8d8;"></li>

  @if(Auth::user()->role == 'admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('settings.index') }}"><i class="material-icons">settings</i> <span class="nav-link-text">@lang('Academic Settings')</span></a>
  </li>
  @endif

  @if(Auth::user()->role == 'student')
  <li class="nav-item">
    <a class="nav-link" href="{{ url('mycourses') }}"><i class="material-icons">subject</i>
      <span class="nav-link-text">@lang('My Courses')</span></a>
  </li>
  @endif
  
  @if(Auth::user()->role == 'teacher')
  <li class="nav-item">
    <a class="nav-link" href="{{ url('tcourses') }}"><i class="material-icons">import_contacts</i>
      <span class="nav-link-text">@lang('My Courses')</span></a>
  </li>
  @endif
</ul>