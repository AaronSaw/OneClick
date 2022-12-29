@extends('layouts.admin_common')
@section('content')
    <div class="category_cform">
        <div class="ccard ">
            <h2 class="tblttl edit-ttl">Edit Category</h2>
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="">
                    <label for="">Title</label>
                    <input type="text" name="ctitle" value="{{ old('ctitle', $category->ctitle) }}"
                        class="category-forminput">
                    @error('ctitle')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <div class="form-footerBtn">
                        <div></div>
                        <div>
                            <button class="button cancel" type="reset"><a href="{{ url('category') }}">Cancel<a></button>
                            <button class="button-primary"> Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
