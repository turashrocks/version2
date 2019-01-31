<div class="column is-narrow">
    <aside class="menu m-t-30 m-l-10">
      <p class="menu-label">
        General
      </p>
      <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
      </ul>
      <p class="menu-label">
        Content
      </p>
      <ul class="menu-list">
      <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('post', 2)}}">Posts</a></li>
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
            <li><a href="#">Sub Menu 1</a></li>
            <li><a href="#">Sub Menu 2</a></li>
          </ul>
        </li>
        <li>
          <a class="has-submenu">Another Example<span class="icon is-pulled-right"><i class="fa fa-caret-down"></i></span></a>
          <ul class="submenu">
            <li><a href="#">Sub Menu 1</a></li>
            <li><a href="#">Sub Menu 2</a></li>
          </ul>
        </li>
      </ul>
    </aside>
</div>
  
      