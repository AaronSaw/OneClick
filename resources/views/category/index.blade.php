@extends('layouts.admin_common')
@section('content')
    <div class="ccard">
        <h2 class="tblttl">Category Lists</h2>
        <hr>
        @if (session('status'))
            <div class="alert ">
                {{ session('status') }}
            </div>
        @endif
        <table id="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td>
                            {{ $category->ctitle }}
                        </td>
                        <td>
                            <p>
                                {{ $category->created_at->format('d M Y') }}
                            </p>
                        </td>
                        <td>
                            <div class="action-btngroup" style="margin-left: 40%">
                                <a href="{{ route('category.edit', $category->id) }}" class="button success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <div id="ex{{ $category->id }}" class="modal" style="">
                                    <p class="modal-text">Are you sure to delete</p>
                                    <hr>
                                    <div class="modal-footer">
                                        <a href="#" rel="modal:close" class="button cancel">No</a>
                                        <form action="{{ route('category.destroy', $category->id) }}" class="d-inline-block"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="button danger">
                                                Yes
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Link to open the modal -->
                                <p><a href="#ex{{ $category->id }}" rel="modal:open" class="button danger"><i class="fa-regular fa-trash-can"></i></a></p>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="empty">Empty Categories</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="paginate">
            {{ $categories->onEachSide(1)->links() }}
        </div>
    </div>
    </div>
@endsection
