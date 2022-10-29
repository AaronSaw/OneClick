@extends('layouts.admin_common')
@section('content')

<div class="category_cform">
    <div class="card">
        <h2>Create New Category</h2>
        <hr>
        <form action="{{ route('category.store') }}" method="post">
            @csrf
            <div class="d-flex">
                <input type="text" name="ctitle" value="{{ old('ctitle') }}"
                    class="form-control @error('title') is-invalid @enderror">

                <button class="button-primary">
                    Add Category
                </button>
            </div>
            @error('ctitle')
            <p class="error">{{ $message }}</p>
            @enderror
        </form>
    </div>
</div>

    </div>
@endsection
