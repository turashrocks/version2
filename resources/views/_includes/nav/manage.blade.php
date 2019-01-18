<!--<div class="side-menu">-->
<div class="column is-narrow">
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
</div>
<!--</div>-->
      