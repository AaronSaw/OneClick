@extends('layouts.admin_common')

@section('content')
<div class="ccard">
  <div class="tableinfo">
    <div class="tblttl">
      <p>Order List</p>
      <hr>
    </div>
    <table id="table">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>User ID</th>
          <th>Product ID</th>
          <th>Created At</th>
          <th>Action</th>
        </tr>
      </thead>
      @foreach ($orders as $order)
      <tbody>
        <td>{{ $order->id }}</td>
        <td>{{ $order->user_id }}</td>
        <td>{{ $order->product_id }}</td>
        <td>{{ $order->created_at->format('d M Y') }}</td>
        <td>
          <div id="ex{{ $order->id }}" class="modal clearfix">
            <p class="modal-text">Are you sure to delete?</p>
            <hr>
            <div class="modal-footer">
              <form action="{{ route('order.destroy', $order->id) }}" class="d-inline-block" method="post">
                @csrf
                @method('delete')
                <button class="button  danger">
                  Yes
                </button>
                <button type="button" class="button cancel"><a href="#" rel="modal:close">No</a></button>
              </form>
            </div>
          </div>
          <a href="#ex{{ $order->id }}" rel="modal:open" class="deletebtn"><i class="fa-regular fa-trash-can"></i></a>
        </td>
      </tbody>
      @endforeach
    </table>
    {{ $orders->links('vendor.pagination.custom-pagi') }}
  </div>
</div>
<body>
@endsection
