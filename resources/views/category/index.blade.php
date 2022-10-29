@extends('layouts.admin_common')
@section('content')
    <div class="card">
        <h2>Category Lists</h2>
        <hr>
        <table id="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Action</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>
                            {{ $category->ctitle }}

                        </td>
                        <td>
                            <div class="action-btngroup">
                                <a href="{{ route('category.edit', $category->id) }}" class="button success">
                                    edit
                                </a>

                                <div id="ex1" class="modal">
                                    <p class="modal-text">Are you sure to delete</p>
                                    <hr>
                                    <div class="modal-footer">
                                        <a href="#" rel="modal:close" class="button cancel">No</a>
                                      <form action="{{ route('category.destroy', $category->id) }}" class="d-inline-block"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button onclick="mydelete()" class="button  danger">
                                            Yes
                                        </button>
                                    </form>
                                    </div>

                                  </div>

                                  <!-- Link to open the modal -->
                                  <p><a href="#ex1" rel="modal:open" class="button danger">delete</a></p>
                            </div>
                        </td>
                        <td>
                            <p>
                                {{ $category->created_at->format('d M Y') }}
                            </p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
    $('a[data-modal]').on('click', function() {
      $($(this).data('modal')).modal({
    fadeDuration: 250
  });
      return false;
    });
  });
    </script>
@endpush
