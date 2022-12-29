@extends('layouts.admin_common')

@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
  {{ session()->get('message') }}
</div>
@endif
<div class="edit-container">
  <form action="{{ route('user.userUpdate', Auth::user()->id) }}" method="POST" class="edit-form">
    @csrf
    @method('put')
    <h3 class="edit-ttl">Edit Your Information</h3>
    <label for="name">Name</label><br>
    <input type="text" name="name" value="{{ Auth::user()->name }}" class=" @error('name') is-invalid @enderror">
    @error('name')
    <div class="error">{{ $message }}</div>
    @enderror
    <label for="email">Email</label><br>
    <input type="email" name="email" value="{{ Auth::user()->email }}" class=" @error('email') is-invalid @enderror">
    @error('email')
    <div class="error">{{ $message }}</div>
    @enderror
    <label for="address">Address</label><br>
    <input type="text" name="address" value="{{ Auth::user()->address }}" class=" @error('address') is-invalid @enderror">
    @error('address')
    <div class="error">{{ $message }}</div>
    @enderror 
    <div>
      <button class="button cancel" type="button"><a href="{{ url('adminProfile') }}">Cancel</a></button>
      <button class="button-primary" type="submit">Update</button>
    </div>
  </form>
</div>
@endsection
