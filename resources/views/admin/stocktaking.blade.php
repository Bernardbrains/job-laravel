@extends('layouts.adminmaster')

@section('title')
Admin Dashbord
@endsection


@section('content')
<div class="content" >
        <div class="row">
          <div class="stan">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Goods And Services</h3>
                <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                <form name="search" action="/searchitem" method="post">
                  @csrf
              <div class="input-group no-border">
                <input type="text" value="" name="search" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                    <tr>
                        <p style="color:green">Add New Item</p>
                    <thead>
                      <th>ItemName</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Quantity</th>
                      <th class="text-center">Buying Price</th>
                      <th class="text-center">Selling price</th>
                    </thead>
                    <tbody>
                    <form name="additem" action="/additem" method="post"> 
                      @csrf
                      <tr>
                      <td class="text-center"><input type="text" class="form-control" colspan="2"placeholder="Item" name="item" value=""></td>
                        <td class="text-center"><input type="text" class="form-control" name="description" placeholder="Description" value=""></td>
                        <td class="text-center"><input type="number" class="form-control" name="quantity" placeholder="Quantity" value=""></td>
                        <td class="text-center"><input type="number" class="form-control" name="bp" placeholder="Buying Price" value=""></td>
                        
                        <td class="text-center"><input type="number" class="form-control" name="sp" placeholder="Selling Price" value=""></td>
                        <td class="text-center">
                          <input type="submit" class="btn btn-round btn-primary" value="Add">
                        </td>
                      </tr>
</form>
        </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    <thead>
                    
                    <th>ItemName</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Availability</th>
                      <th class="text-center">Quantity</th>
                      <th class="text-center">Price</th>
                      <th class="text-center"></th>
                    </thead>
                    <tbody>
                      @if(isset($searchresult))
                      @if(count($searchresult)<=0)
                      <script>
                        alert('No Results Found')
                       document.location.href="/stocktaking";
                      </script>
                      @endif
                      <tr><p style="color:green">Search Results</p> </tr>
                      @foreach($searchresult as $product)
                      <tr>
                        <form name="updateitem" action="/updateitem" method="post">
                        @csrf
                        <input type="hidden" class="form-control" name="id" placeholder="id" value="{{ $product->id }}">
                        <td><input type="text" class="form-control" name="item" placeholder="Item" value="{{ $product->item }}"></td>
                        <td class="text-center"><input type="text" class="form-control" name="description" placeholder="Description" value="{{ $product->description }}"></td>
                        <td class="text-center">@if($product->quantity<=0)
                          <i class="now-ui-icons ui-1_simple-remove text-danger">
                            @else
                            <i class="now-ui-icons ui-1_check text-success">
                            @endif
                          </td>
                        <td class="text-center"><input type="number" class="form-control" name="quantity" placeholder="Quantity" value="{{ $product->quantity }}"></td>
                        <td class="text-center"><input type="number" class="form-control" name="price" placeholder="price" value="{{ $product->selling_price }}"></td>
                        <td class="text-center">
                          <input type="submit" class="btn btn-round btn-primary" value="Update">
                        </td>
                     </form>
                    </tr>
                  @endforeach
                      @else
                      @foreach($products as $product)
                      <tr>
                        <form name="updateitem" action="/updateitem" method="post">
                        @csrf
                        <input type="hidden" class="form-control" name="id" placeholder="id" value="{{ $product->id }}">
                        <td><input type="text" class="form-control" name="item" placeholder="Item" value="{{ $product->item }}"></td>
                        <td class="text-center"><input type="text" class="form-control" name="description" placeholder="Description" value="{{ $product->description }}"></td>
                        <td class="text-center">@if($product->quantity<=0)
                          <i class="now-ui-icons ui-1_simple-remove text-danger">
                            @else
                            <i class="now-ui-icons ui-1_check text-success">
                            @endif
                          </td>
                        <td class="text-center"><input type="number" class="form-control" name="quantity" placeholder="Quantity" value="{{ $product->quantity }}"></td>
                        <td class="text-center"><input type="number" class="form-control" name="price" placeholder="price" value="{{ $product->selling_price }}"></td>
                        <td class="text-center">
                          <input type="submit" class="btn btn-round btn-primary" value="Update">
                        </td>
                     </form>
                    </tr>
                  @endforeach
                  @endif
                  <!-- <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></td> -->
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