@extends('layouts.app')

@section('content')
<div class="profile-form">
    <h1>Profile Saya</h1>
    <form action="">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" value="{{ $username ?? 'Guest' }}" readonly>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" value="{{ $password }}" readonly>
        </div>

        @isset($nama)
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" value="{{ $nama }}" readonly>
        </div>
        @endisset
    </form>
</div>
@endsection
