@extends('layouts.adminmaster')

@section('title')
Admin Customers
@endsection


@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Customers</h3>
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
                  
        </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    <thead>
                      <th class="text-center">Phone No.</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Item</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">price</th>
                      <th></th>
                     
                    </thead>
                    <tbody>
                      <tr>
                        <form>
                        <td class="text-center"><input type="text" class="form-control" placeholder="Phone" value=""></td>
                        <td class="text-center"><input type="text" class="form-control" placeholder="Name" value=""></td>
                        <td class="text-center"><input type="text" class="form-control" placeholder="Item" value=""></td>
                        <td class="text-center"><input type="text" class="form-control" placeholder="Description" value=""></td>
                        <td class="text-center"><input type="text" class="form-control" placeholder="Price" value=""></td>
                      
                        <td class="text-center">
                          <input type="submit" class="btn btn-round btn-primary" value="Add">
                        </td>
</form>
                      </tr>        
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