@extends('layouts.admin_common')

@section('content')
<div class="container">
  <div class="tableinfo">
    <div class="tblttl">
      <p>Users Information</p>
    </div>
    <table id="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Role</th>
          <th>Email</th>
          <th>Address</th>
          <th>Created At</th>
          <th>Delete</th>
        </tr>
      </thead>
      @foreach ($users as $user)
      <tbody>
        <td>{{ $user->name }}</td>
        <td>
            @if($user->role == 1)
                User
            @else
                Admin
            @endif
        </td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->created_at->format('d M Y') }}</td>
        <td>
          <div id="ex1" class="modal clearfix">
            <p class="modal-text">Are you sure to delete?</p>
            <hr>
            <div class="modal-footer">
              <form action="{{ route('user.destroy', $user->id) }}" class="d-inline-block" method="post">
                @csrf
                @method('delete')
                <button class="button  danger">
                  Yes
                </button>
                <button type="button" class="button cancel"><a href="#" rel="modal:close">No</a></button>
              </form>
            </div>
          </div>
          <a href="#ex1" rel="modal:open" class="deletebtn"><i class="fa fa-trash"></i></a>
        </td>
      </tbody>
      @endforeach
    </table>
    {{ $users->links('vendor.pagination.custom-pagi') }}
  </div>
</div>
<body>
@endsection
