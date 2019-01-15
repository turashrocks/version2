@extends('layouts.manage')

@section('content')
<div class="column">
    <div class="box"  style="border: none; border-radius: 0px;">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title">Edit Users</h1>
          </div>
        </div>

        <div class="columns">
          <div class="column">
            <form action="{{route('users.update', $user->id)}}" method="POST">
              {{method_field('PUT')}}
              {{csrf_field()}}
              <div class="field">
                <label for="name" class="label">Name:</label>
                <p class="control">
                  <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
                </p>
              </div>

              <div class="field">
                <label for="email" class="label">Email:</label>
                <p class="control">
                  <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
                </p>
              </div>

              <div class="field">
                <label for="password" class="label">Password</label>
                <p class="control">
                    <input type="text" class="input" name="password" id="password" value="{{$user->password}}">
                  </p>
              </div>

              <button class="button is-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
  </div>
</div> 
@endsection


@section('scripts')
  <script>

    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep'
      }
    });

  </script>
@endsection
