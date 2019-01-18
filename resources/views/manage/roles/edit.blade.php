@extends('layouts.manage')

@section('content')
<div class="column">
  <div class="box"  style="border: none; border-radius: 0px;">
    <div class="container">
      <div class="columns">
        <div class="column">
        <h1 class="title">Edit {{$role->display_name}}</h1>
        </div>
      </div>
    <form action="{{route('roles.update', $role->id)}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="columns">
        <div class="column">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Role Details:</h1>
                  <div class="field">
                    <p class="control">
                      <label for="display_name" class="label">Name (Human Readable)</label>
                      <input type="text" class="input" name="display_name" value="{{$role->display_name}}" id="display_name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="name" class="label">Slug (Can not be edited)</label>
                      <input type="text" class="input" name="name" value="{{$role->name}}" disabled id="name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Description</label>
                      <input type="text" class="input" value="{{$role->description}}" id="description" name="description">
                    </p>
                  </div>
                  <input type="hidden" name="permissions" :value="permissionsSelected">
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

      <div class="columns" id="editRoles">
        <div class="column">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Permissions:</h1>
                  
                      @foreach($permissions as $permission)
                      @if($role->hasPermission($permission->name))
                         <div class="field">
                             <b-checkbox :value="true">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                           </div>
                       @else
                       <div class="field">
                              <b-checkbox :value="false">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                        </div>
                        @endif
                   @endforeach
                 
                </div>
              </div>
            </article>
          </div> <!-- end of .box -->

          <button class="button is-primary">Save Changes to Role</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
@endsection


@section('scripts')
  <script>

  var editRoles = new Vue({
    name: 'EditRoles',
    el: '#editRoles',
    data: {
     permissionsSelected: {!!$role->permissions->pluck('id')!!}
    }
  });

  </script>
@endsection
