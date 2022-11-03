@extends('layouts.admin_common')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="edit-container">
    <h3 class="edit-ttl">Edit Your Information</h3>
    <form action="" method="POST" class="edit-form">
        <label for="name">Name</label><br>
        <input type="text" name="name" value=""><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" value=""><br>
        <label for="address">Address</label><br>
        <input type="text" name="address" value=""><br>
        <div>
            <button class="update-btn"><a href="{{ url('adminProfile') }}">Cancel</a></button>
            <button class="update-btn"><a href="">Update</a></button>
        </div>

    </form>
</div>
@endsection
