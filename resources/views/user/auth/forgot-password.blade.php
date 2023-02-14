@extends('user.layouts.app')

@section('content')
    <div class="h-screen w-10/12 mx-auto md:w-full flex items-center justify-center">
        <div class="w-full md:w-4/12 p-5 bg-gray-200 rounded-md">
            <h1 class="text-2xl font-bold text-center">Forget Password</h1>
            <form method="POST" action="{{ route('user.password.email') }}" class="flex flex-col gap-y-2">
                @csrf
                <div class="form-control">
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" class="input input-bordered" placeholder="Enter email">
                    @error('email')
                        <label class="label text-error">{{ $message }}</label>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
