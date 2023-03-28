@extends('layouts.main')
<section class="px-6 py-9">
    <main class="max-w-lg mx-auto mt-10 bg-gray-900 p-6 border border-yellow-400 rounded-2xl">
        <h1 class="text-center text-2xl">Login</h1>
        <form method="POST" action="/login" class="mt-10">
            @csrf
            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-yellow-500">
                    email address
                </label>
                <input class="border rounded-lg border-yellow-400 p-1 w-full text-gray-700"
                       type="email"
                       name="email"
                       value="{{old('email')}}"
                       id="email"
                       required
                >
                @error('email')
                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-yellow-500">
                    password
                </label>
                <input class="border rounded-lg border-yellow-400 p-1 w-full text-gray-700"
                       type="password"
                       name="password"
                       id="password"
                       required
                >
                @error('password')
                <p class="text-red-500 text-xs mt-2"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                        class="block w-full rounded-lg bg-yellow-500 font-bold text-gray-900 rounded py-2 px-2 hover:bg-yellow-400 my-0 mx-auto"
                >
                    Login
                </button>
            </div>
        </form>
    </main>
</section>
