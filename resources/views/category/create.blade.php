@extends('layouts.admin_common')
@section('content')
    <div class="category_cform">
        <div class="ccard">
            <h2>Create New Category</h2>
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="">
                    <label for="">Title:</label>
                    <input type="text" name="ctitle" value="{{ old('ctitle') }}" class="category-forminput">
                    @error('ctitle')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="form-footerBtn">
                        <button class="button cancel" type="reset"><a href="{{ url('category') }}">Cancel<a></button>
                        <button class="button-primary btn-create" type="submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
