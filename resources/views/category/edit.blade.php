@extends('layouts.admin_common')
@section('content')
    <div class="category_cform">
        <div class="card ">
            <h2>Edit Category</h2>
            <hr>
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="d-flex">
                    <label for="">Title</label>
                    <input type="text" name="ctitle" value="{{ old('ctitle', $category->ctitle) }}"
                        class="category-forminput">
                    @error('ctitle')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <div class="form-footerBtn">
                        <div></div>
                        <div>
                            <button class="button cancel" type="reset">CANCEL</button>
                            <button class="button-primary">
                                update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection


