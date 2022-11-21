@extends('layouts.admin_common')

@section('content')
    @if (session('status'))
        <div class="alert user-alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="laravelExcel">
        <button class="excelBtn" id="download-btn"><a href="{{ route('user.export') }}" style="color: #fff"><i
                    class="fa fa-download"></i> Download</a></button>
        <div class="importExcel">
            <div id="ex7" class="import-modal modal">
                <form action="{{ route('user.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="excel-input" name="file" accept="xlsx,xls,csv" required>
                    <button class="excelBtn uploadBtn"><i class="fa fa-upload"></i> Upload</button>
                </form>
            </div>
            <!-- Link to open the modal -->
            <p><a href="#ex7" rel="modal:open" class="excelBtn"><i class="fa fa-upload"></i> Upload</a></p>
        </div>
        <!-- Modal HTML embedded directly into document -->
    </div>
    <div class="ccard user-ccard">
        <h2 class="tblttl">Users Information</h2>
        <div class="tbl-common">
            @if ($errors->any())
                @foreach ($errors->all() as $item)
                    <li class="error">{{ $item }}</li>
                @endforeach
            @endif
            @error('row2')
                <div class="error">{{ $message }}</div>
            @enderror
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
                            @if ($user->role == 1)
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
                                    <a href="#" type="button" class="button cancel"
                                            rel="modal:close">No</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" class="d-inline-block"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="button  danger">
                                            Yes
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <a href="#ex{{ $user->id }}" rel="modal:open" class="deletebtn"><i
                                    class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tbody>
                @endforeach
            </table>
            {{ $users->links('vendor.pagination.custom-pagi') }}
        </div>
    </div>
@endsection
