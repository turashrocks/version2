@extends('layouts.manage')
@section('content')

<div class="column">
    <div class="box"  style="border: none; border-radius: 0px;">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title">Create Users</h1>
          </div>
        </div>

        <div class="columns">
          <div class="column">
            <form action="{{route('users.store')}}" method="POST">
              {{csrf_field()}}
              <div class="field">
                <label for="name" class="label">Name</label>
                <p class="control">
                  <input type="text" class="input" name="name" id="name">
                </p>
              </div>

              <div class="field">
                <label for="email" class="label">Email:</label>
                <p class="control">
                  <input type="text" class="input" name="email" id="email">
                </p>
              </div>

              <div class="field">
                <label for="password" class="label">Password</label>
                <p class="control">
                  <input type="text" class="input" name="password" id="password">
                </p>
              </div>

              <button class="button is-success m-t-10">Create User</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- end of .flex-container -->
@endsection
