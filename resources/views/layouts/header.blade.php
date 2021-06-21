<div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="{{route('dashboard.index')}}">Siakad</a></div>
    </div>
    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"></i></div>
    <div class="nav-right col pull-right right-menu">
      <ul class="nav-menus">
        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li class="onhover-dropdown p-0">
          <div class="media profile-media">
            <img class="b-r-10" src="{{asset('assets/images/dashboard/profile.jpg')}}" alt="">
            <div class="media-body">
              <span>Administrator</span>
              <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><i data-feather="user"></i><span>Account </span></li>
            <li><i data-feather="mail"></i><span>Inbox</span></li>
            <li><i data-feather="file-text"></i><span>Taskboard</span></li>
            <li><i data-feather="settings"></i><span>Settings</span></li>
            <li><i data-feather="log-in"> </i><span>Log in</span></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
  </div>
</div>