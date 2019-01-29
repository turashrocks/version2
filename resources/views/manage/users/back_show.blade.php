@extends('layouts.manage')

@section('content')
<div class="column">
    <div class="box"  style="border: none; border-radius: 0px;">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title">View User Details</h1>
          </div>
          <div class="column">
              <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit User</a>
          </div>
        </div>
        
        <div class="columns">
          <div class="column">
            <div class="field">
              <label for="name" class="label">Name</label>
              <pre>{{$user->name}}</pre>
            </div>

            <div class="field">
              <div class="field">
                <label for="email" class="label">Email</label>
                <pre>{{$user->email}}</pre>
              </div>
            </div>

            <div class="field">
              <div class="field">
                  <label for="email" class="label">Created at</label>
                  <pre>{{$user->created_at->format('H:i')}}&nbsp;{{$user->created_at->toFormattedDateString()}}</pre>
              </div>
            </div>

            <div class="field" style="margin: 25px 0px 25px 0px;">
              <label for="email" class="label">Roles</label>
              <ul>
                {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}}
                @foreach ($user->roles as $role)
                  <pre><li>{{$role->display_name}} ({{$role->description}})</li></pre>
                @endforeach
              </ul>
          </div>


          </div>
        </div><!--END of Columns-->
      </div><!--END of Container-->
  </div><!--END of Box-->
</div>
@endsection
