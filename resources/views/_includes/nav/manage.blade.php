<!--<div class="side-menu">-->
<!--<div class="column is-narrow">
  <div class="box" style="width: 200px; border: none; box-shadow: none; border-radius: 0px;">
    <aside class="menu">
        <p class="menu-label">
          General
        </p>
        <ul class="menu-list">
          <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
        </ul>
        <p class="menu-label">
          Administration
        </p>
        <ul class="menu-list">
          <li>
            <a href="{{route('users.index')}}">Manage Users</a>
          </li>
          <li>
            <a  href="{{route('permissions.index')}}" class="is-active">Roles and Permissions</a>
            <ul>
              <li><a href="{{route('roles.index')}}">Roles</a></li>
              <li><a href="{{route('permissions.index')}}">Permissions</a></li>
            </ul>
          </li>
          <li><a>sample</a></li>
        </ul>
      </aside>
  </div>
</div>-->
<!--</div>-->
<div class="column is-narrow">
<!--<div class="side-menu">-->
    <aside class="menu m-t-30 m-l-10">
      <p class="menu-label">
        General
      </p>
      <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
      </ul>
  
      <p class="menu-label">
        Administration
      </p>
      <ul class="menu-list">
        <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
        <li>
          <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions<span class="icon is-pulled-right"><i class="fa fa-caret-down"></i></span></a>
          <ul class="submenu">
            <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
            <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
          </ul>
        </li>
        <li>
          <a class="has-submenu">Example Accordion<span class="icon is-pulled-right"><i class="fa fa-caret-down"></i></span></a>
          <ul class="submenu">
            <li><a href="{{route('roles.index')}}">Roles</a></li>
            <li><a href="{{route('permissions.index')}}">Permissions</a></li>
          </ul>
        </li>
        <li>
          <a class="has-submenu">Another Example<span class="icon is-pulled-right"><i class="fa fa-caret-down"></i></span></a>
          <ul class="submenu">
            <li><a href="{{route('roles.index')}}">Roles</a></li>
            <li><a href="{{route('permissions.index')}}">Permissions</a></li>
          </ul>
        </li>
      </ul>
    </aside>
 <!-- </div>-->
</div>
  
      