@extends('user.layouts.app')

@section('content')
    <div class="h-screen w-10/12 mx-auto md:w-full flex items-center justify-center">
        <div class="w-full md:w-4/12 p-5 bg-gray-200 rounded-md">
            <h1 class="text-2xl font-bold text-center">Login</h1>
            <form method="POST" action="" class="flex flex-col gap-y-2">
                @csrf
                <div class="form-control">
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" class="input input-bordered">
                    @error('email')
                        <label class="label text-error">{{ $message }}</label>
                    @enderror
                </div>
                <div class="form-control">
                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" class="input input-bordered">
                    @error('password')
                        <label class="label text-error">{{ $message }}</label>
                    @enderror
                </div>
                <div class="form-control items-end">
                    <a href="{{ route('user.password.request') }}" class="btn btn-link">Forget Password</a>
                </div>
                <div>
                    <button type="submit" class="btn">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
