@extends('user.layouts.auth')

@section('content')
    <div class="w-4/12">
        <form action="{{ route('user.profile.edit') }}" method="POST">
            @method('PATCH')
            <div class="form-control">
                <label for="name" class="label">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="input input-bordered">
            </div>
            <div class="form-control">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="input input-bordered">
            </div>
            <div class="form-control">
                <label for="password" class="label">Password</label>
                <input type="password" name="password" class="input input-bordered" autocomplete="new-password">
            </div>
            <div class="form-control">
                <label for="password_confirmation" class="label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input input-bordered">
            </div>
            <button class="btn btn-block btn-success mt-2">Update Profile</button>
        </form>
    </div>
@endsection
