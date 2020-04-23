@extends('layouts.adminmaster')

@section('title')
Admin Users
@endsection


@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Users</h3>
                <form name="search" action="/searchuser" method="post">
                @csrf
              <div class="input-group no-border">
                <input type="text" name="search" value="{{ old('name') }}" required autocomplete="search" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
                  
        </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <thead>
                      
                      <th class="text-center">UserName</th>
                      <th class="text-center">Phone</th>
                      <th class="text-center">Usertype</th>
                      <th class="text-center"></th>
                     
                    </thead>
                    <tbody>
                    @if(isset($searchresult))
                      @if(count($searchresult)<=0)
                      <script>
                        alert('No Results Found')
                       document.location.href="/users";
                      </script>
                      @endif 
                      <tr><p style="color:green">Search Results</p> </tr>
                      @foreach($searchresult as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td class="text-center">{{ $user->phone }}</td>
                        <td class="text-center">{{ $user->usertype }}</td>
                        <td class="text-center">
                        <a target="_blank" href="/updateuser{{ $user->id }}" class="btn btn-round btn-primary">Update</a>
                        </td>
                        <td class="text-center">
                      @if($user->id ==Auth::User()->id )
                      <a target="_blank" href="/deleteuser{{ $user->id }}"  disabled="" class="btn btn-round btn-primary">Delete</a>
                      @else
                        <a target="_blank" href="/deleteuser{{ $user->id }}" class="btn btn-round btn-primary">Delete</a>
                        @endif
                        </td>
                      </tr>
                      @endforeach  
                      @else
                    @foreach($users as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td class="text-center">{{ $user->phone }}</td>
                        <td class="text-center">{{ $user->usertype }}</td>
                        <td class="text-center">
                        <a target="_blank" href="/updateuser{{ $user->id }}" class="btn btn-round btn-primary">Update</a>
                        </td>
                        <td class="text-center">
                      @if($user->id ==Auth::User()->id )
                      <a target="_blank" href="/deleteuser{{ $user->id }}"  disabled="" class="btn btn-round btn-primary">Delete</a>
                      @else
                        <a target="_blank" href="/deleteuser{{ $user->id }}" class="btn btn-round btn-primary">Delete</a>
                        @endif
                        </td>
                      </tr>
                      @endforeach  
                      @endif 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
@endsection


@section('scripts')

@endsection