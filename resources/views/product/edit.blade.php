@extends('layouts.admin_common')
@section('content')
    <div class="product_pform">
        <div class="ccard">
            <h2 class="tblttl">Edit product</h2>
            <hr>
            <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="pinput">
                    <label for="">product Title</label><br>
                    <input type="text" value="{{ old('title', $product->title) }}" name="title"
                        class="product-forminput">
                    @error('image')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pinput">
                    <label for="">Select Category</label><br>
                    <select type="text" name="category" class="product-formSelect">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == old('category', $product->category_id) ? 'selected' : ' ' }}>
                                {{ $category->ctitle }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pinput">
                    <label for="">product Description</label>
                    <textarea name="description" rows="10" cols="35" class="product-formTextarea">
                    {{ old('description', trim($product->description)) }}
                    </textarea>
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="pinput">
                    <label for="">Price</label><br>
                    <input type="text" value="{{ old('price', $product->price) }}" name="price"
                        class="product-forminput">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <label for="">Product Image</label>
                <input type="file" name="image" class="pinput product-forminput" id="image">
                @error('image')
                    <div class="error">{{ $message }}</div>
                @enderror
                <label for="">preview image</label><br>
                <img id="preview-image" src="{{ asset('storage/' . $product->image) }}" alt="preview image"
                    style="max-height: 250px;">
                <div class="productform-footerBtn">
                    <button class="button cancel" type="reset"><a href="{{ url('product') }}">Cancel<a></button>
                    <button class="button-primary" type="submit">Update</button>
                </div>
            </form>
            {{-- run command to connect public folder ,storage/public
        command-> php artisan storage:link
            --}}
        </div>
    </div>
@endsection
