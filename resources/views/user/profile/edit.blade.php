@extends('user.layouts.auth')

@section('content')
    <div class="w-4/12">
        <form action="{{ route('user.profile.edit') }}" method="POST" id="profile-form">
            @csrf
            @method('PATCH')
            <div class="form-control">
                <label for="name" class="label">Name</label>
                <input type="text" name="name" value="{{ $user->name }}" class="input input-bordered" required>
                @error('name')
                    <label class="label text-error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-control">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="input input-bordered" required>
                @error('email')
                    <label class="label text-error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-control">
                <label for="password" class="label">Password</label>
                <input type="password" name="password" id="password" class="input input-bordered"
                    autocomplete="new-password">
                @error('password')
                    <label class="label text-error">{{ $message }}</label>
                @enderror
            </div>
            <div class="form-control">
                <label for="password_confirmation" class="label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="input input-bordered">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update Profile</button>
        </form>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $("#profile-form").validate({
                errorClass: "text-error label",
                errorElementClass: "text-error",
                errorElement: "label",
                validClass: "text-success border-success",
                rules: {
                    password: {
                        minlength: 8
                    },
                    password_confirmation: {
                        equalTo: "#password"
                    }
                },
            });
        });
    </script>
@endpush
