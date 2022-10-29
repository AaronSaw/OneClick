@extends('layouts.admin_common')
@section('content')
<div class="category_cform">

    <div class="card ">
            <h2>Edit Category</h2>
            <hr>
            <form action="{{ route('category.update',$category->id) }}" method="post">
                @csrf
                @method('put')

                    <div class="d-flex">
                        <input
                            type="text"
                            name="ctitle"
                            value="{{ old('ctitle',$category->ctitle) }}">
                        <button class="button-primary">
                            update category
                        </button>

                </div>
            </form>
            @error('ctitle')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

    </div>
    </div>
@endsection
