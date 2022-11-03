@extends('layouts.admin_common')
@section('content')
    <div class="category_cform">
        <div class="ccard">
            <h2>Create New Category</h2>
            <hr>
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="">
                    <label for="">Title:</label><br>
                    <input type="text" name="ctitle" value="{{ old('ctitle') }}" class="category-forminput">
                    @error('ctitle')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <div class="form-footerBtn">
                        <div></div>
                        <div>
                            <button type="reset" class="button cancel">CANCEL</button>
                            <button class="button-primary">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
