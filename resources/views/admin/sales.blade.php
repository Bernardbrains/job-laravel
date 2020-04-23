@extends('layouts.adminmaster')

@section('title')
Admin Sales
@endsection


@section('content')
<div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Sales</h3>
        </div>

              <div class="card-body">
                <div class="table-responsive table-upgrade">
                <p style="color:green">New sale</p>
                <form >
                @csrf
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
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <thead>
                      <th>Item</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Quantity</th>
                      <th class="text-center">Price</th>
                      <th class="text-center"></th>
                    </thead>
                    <tbody>
                    <form name="sale" action="/sale" method="post">
                    @csrf
                      <tr>
                        <td><input type="text" class="form-control" name="item" placeholder="Item" value="" requred></td>
                        <td class="text-center"><input type="text" class="form-control" name="description" placeholder="Description" value="" required></td>
                        <td class="text-center"><input type="text" class="form-control" name="quantity" placeholder="Quantity" value="" required></td>
                        <td class="text-center"><input type="text" class="form-control" name="price" placeholder="Price" value="" reqiuired></td>
                        </td>
                        <td class="text-center">
                          <input type="submit" class="btn btn-round btn-primary" value="Make sale">
                        </td>
                      </tr>
                      </form>
</tbody>
</table>
                
                    <p style="color:green">Today's record</p>
                  <table class="table">
                    <thead>
                      <th>Item</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Quantity</th>
                      <th class="text-center">Price</th>
                      <th class="text-center"></th>
                    </thead>
                    <tbody>
                    @if(isset($sales))
                    @foreach($sales as $sales)
                    <tr>
                        <form action="/updatesales" method="post">
                        @csrf
                        <script>
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
stan = y + "-" + m + "-" + d;
document.write("<input type='hidden' name='date' value='"+stan+"'>")
</script>
                        <input type="hidden" name="id" value="{{ $sales->id}}">
                        <td>{{ $sales->item }}</td>
                        <td class="text-center">{{ $sales->description }}</td>
                        <td class="text-center"><input type="number" class="form-control" name="quantity" placeholder="Quantity" value="{{ $sales->quantity }}"></td>
                        <td class="text-center"><input type="number" class="form-control" name ="price" placeholder="Price" value="{{ $sales->price }}"></td>
                        <td class="text-center">
                          <input type="submit" class="btn btn-round btn-primary" value="Update">
                        </td>
</form>
                      </tr>
                      @endforeach
                      
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                        <td class="text-center">
                          <a target="_blank" href="/allsales" class="btn btn-round btn-primary">All sales Record</a>
                        </td>
                        <td class="text-center">
                          <a href="#" class="btn btn-round btn-default disabled">Total = Ksh{{ $sales->sum('price') }}</a>
                        </td>
                      @endif
                        <td class="text-center"></td>
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