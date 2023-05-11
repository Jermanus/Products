@extends('layouts.app')

@section('content')
<style>
  .container{
    padding:10px;
  }
  .dataTables_filter,.paging_simple_numbers{
    float:right;
  }
  .table-responsive{
    overflow-x: hidden !important;
  }

</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
          <table id="dt-basic-checkbox" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">Name</th>
                <th class="th-sm">Price</th>
                <th class="th-sm">Description</th>
                <th class="th-sm">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $value)
              <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->price}}</td>
                <td>{{$value->description}}</td>
                <td>
                    <a href="{{ route('products.show', $value->id) }}" class="btn btn-primary">Buy Now</a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $('#dt-basic-checkbox').dataTable({
    columnDefs: [{
    orderable: false,
    className: 'select-checkbox',
    targets: 0
    }],
    select: {
    style: 'os',
    selector: 'td:first-child'
    }
  });
</script>
@endsection
