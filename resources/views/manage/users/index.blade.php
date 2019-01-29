@extends('layouts.manage')
@section('content')
<div class="column">
    <div class="box"  style="border: none; border-radius: 0px;">
      <div class="container">
        <div class="columns">
          <div class="column">
            <h1 class="title">Manage Users</h1>
          </div>
          <div class="column">
            <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
          </div>
        </div>
        <div class="column">
          <table class="table is-narrow">
              <thead>
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                          </tr>
              </thead>
            
              <tbody>
                          @foreach ($users as $user)
                            <tr>
                              <th>{{$user->id}}</th>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->created_at->toFormattedDateString()}}</td>
                              <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('users.show', $user->id)}}">View</a>
                                <a class="button is-light" href="{{route('users.edit', $user->id)}}">Edit</a>
                              </td>
                            </tr>
                          @endforeach
              </tbody>
            </table> 
          </div>              
        </div>  
    </div>
    {{$users->links()}} 
</div>
@endsection
