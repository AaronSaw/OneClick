@extends('layouts.admin_common')

@section('content')
<div class="ccard">
  <div class="tableinfo">
    <div class="tblttl">
      <p>Users Information</p>
      <hr>
    </div>
    <table id="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Role</th>
          <th>Email</th>
          <th>Address</th>
          <th>Created At</th>
          <th>Action</th>
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
          <div id="ex{{ $user->id }}" class="modal clearfix">
            <p class="modal-text">Are you sure to delete?</p>
            <hr>
            <div class="modal-footer">
              <form action="{{ route('user.destroy', $user->id) }}" class="d-inline-block" method="post">
                @csrf
                @method('delete')
                <button type="button" class="button cancel"><a href="#" rel="modal:close">No</a></button>
                <button class="button  danger">
                    Yes
                </button>
              </form>
            </div>
          </div>
          <a href="#ex{{ $user->id }}" rel="modal:open" class="deletebtn"><i class="fa-regular fa-trash-can"></i></a>
        </td>
      </tbody>
      @endforeach
    </table>
    {{ $users->links('vendor.pagination.custom-pagi') }}
  </div>
</div>
<body>
@endsection
