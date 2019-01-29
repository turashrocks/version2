@extends('layouts.manage')

@section('content')
<div class="column">
  <div class="box"  style="border: none; border-radius: 0px;">
    <div class="container">
      <div class="columns">
        <div class="column">
        <h1 class="title">Create New Role</h1>
      </div>
    </div>
    <form action="{{route('roles.store')}}" method="POST">
      {{ csrf_field() }}
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
                      <input type="text" class="input" name="display_name" value="{{old('display_name')}}" id="display_name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="name" class="label">Slug (Can not be changed)</label>
                      <input type="text" class="input" name="name" value="{{old('name')}}" id="name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Description</label>
                      <input type="text" class="input" value="{{old('description')}}" id="description" name="description">
                    </p>
                  </div>
                  <input type="hidden" :value="permissionsSelected" name="permissions">
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">

          <button class="button is-primary">Create New Role</button>
        </div>
      </div>
    </form>
  </div>
@endsection


@section('scripts')
  <script>

  var app = new Vue({
    el: '#app',
    data: {
      permissionsSelected: []
    }
  });

  </script>
@endsection
