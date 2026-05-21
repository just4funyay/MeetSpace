@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <x-auth.auth-card>

        {{-- Header --}}
        <div class="mb-6 text-center">
            <h2 class="text-2xl font-bold text-gray-900">
                Create Account
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Register to start using the system
            </p>
        </div>

        {{-- Form --}}
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            {{-- Name --}}
            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Enter your name"
                    value="{{ old('name') }}"
                >

                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Username --}}
            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">
                    Username
                </label>

                <input
                    type="text"
                    name="username"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Enter your username"
                    value="{{ old('username') }}"
                >
            </div>

            {{-- Email --}}
            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                >

                @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Create password"
                >

                @error('password')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Button --}}
            <button
                type="submit"
                class="w-full rounded-xl bg-blue-600 px-4 py-3 font-medium text-white transition hover:bg-blue-700 cursor-pointer"
            >
                Register
            </button>

        </form>

        {{-- Link --}}
        <p class="mt-6 text-center text-sm text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                Login
            </a>
        </p>

    </x-auth.auth-card>
@endsection