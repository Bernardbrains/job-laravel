@extends('layouts.adminmaster')

@section('title')
Admin Update
@endsection


@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form name="update" action="/updateuser" method="post">
                @csrf
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" name="company" value="Brains Tech Inc.">
                      </div>
                    </div>
                    <input type="hidden" class="form-control" name="id" value="{{ $user->id }}">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" value="{{ $user->name }}">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $user->email }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="{{ $user->fastname }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ $user->lastname }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Phone No.</label>
                        <input type="number" class="form-control" name="phone" placeholder="phone" value="{{ $user->phone}}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>User Type</label>
                        <select class="form-control" name="usertype">
                        <option value="{{ $user->usertype }}">{{ $user->usertype }}</option>
                        <option value="admin">Admin</option>
                        <option value="NormalUser">Normal User</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <p style="color:red">This section to be filled only if u want to change the password</p>
                  <div class="row">
                  <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>New password</label>
                        <input type="text" class="form-control" name="newpassword" placeholder="New password" value="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm new password" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" cols="80" class="form-control" name="aboutme" placeholder="Here can be your description" value="{{ $user->name }}">{{ $user->aboutme }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                       <input class="btn btn-primary btn-block" type="submit" value="Update">
                      </div>
                    </div>
                  </div> 
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                    <h5 class="title">{{ $user->name }}</h5>
                  </a>
                  <p class="description">
                  {{ $user->email }}
                  </p>
                </div>
                <p class="description text-center">
                {{ $user->aboutme }}
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
   
@endsection


@section('scripts')

@endsection