@extends('layouts.manage')
@section('content')

<div class="column">
    <div class="box"  style="border: none; border-radius: 0px;">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title">View Permission Details</h1>
          </div> <!-- end of column -->

          <div class="column">
            <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-edit m-r-10"></i> Edit Permission</a>
          </div>
        </div>

        <div class="columns">
          <div class="column">
            <div class="box">
              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>{{$permission->display_name}}</strong> <small>{{$permission->name}}</small>
                      <br>
                      {{$permission->description}}
                    </p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
