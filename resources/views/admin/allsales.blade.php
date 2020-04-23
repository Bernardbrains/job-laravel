@extends('layouts.adminmaster')

@section('title')
Admin Full Record 
@endsection


@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Full Sales Record</h3>
        </div>

              <div class="card-body">
                <div class="table-responsive table-upgrade">
                <p style="color:green">{{ Auth::user()->name }}</p>
                <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <table class="table">
                    <thead>
                    @if(isset($sales))
                      <th>Item</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Quantity</th>
                      <th class="text-center">Price</th>
                      <th class="text-center">Date</th>
                    </thead>
                    <tbody>
                    
                    @foreach($sales as $sales)
                    <tr>
                      <td class="text-center">{{ $sales->item }}</td>
                      <td class="text-center">{{ $sales->description }}</td>
                      <td class="text-center">{{ $sales->quantity }}</td>
                      <td class="text-center">{{ $sales->price }}</td>
                      <td class="text-center">{{ $sales->created_at }}</td>
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