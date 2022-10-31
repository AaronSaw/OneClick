@extends('layouts.admin_common')
@section('content')
    <div class="product_pform">
        <div class="card">
            <h2 class="ptitle">Create product</h2>
            <hr>
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="pinput">
                    <label for="">product Title</label><br>
                    <input type="text" value="{{ old('title') }}" class="product-forminput" name="title">
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pinput">
                    <label for="">Select Category</label><br>
                    <select name="category" class="product-formSelect">
                        <option value="0">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == old('category') ? 'selected' : ' ' }}>
                                {{ $category->ctitle }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pinput">
                    <label for="">product Description</label><br>
                    <textarea name="description" rows="10" class="product-formTextarea">
                {{ old('description') }}
                </textarea>
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pinput">
                    <label for="">Price</label><br>
                    <input type="text" value="{{ old('price') }}" name="price" class="product-forminput">
                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <label for="">Product Image</label>
                <input type="file" name="image" value="{{ old('image') }}" class="pinput product-forminput"
                    id="image">
                @error('image')
                    <div class="error">{{ $message }}
                    </div>
                @enderror
                <label for="">preview image</label><br>
                <img id="preview-image" src=""  style="max-height: 250px;">
                <div class="productform-footerBtn">
                        <button class="button cancel" type="reset">CANCEL</button>
                        <button class="button-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
