@extends('layouts.master')
@section('content')
    <div class="p-2">
        <div class="block lg:flex bg-white lg:shadow-lg rounded-lg">
            <div class="w-full lg:w-1/3 flex lg:border-r border-gray-200">
                <div class="m-auto rounded-full">
                    <a href="/" class="flex items-base pt-10 lg:p-2 -mb-10 lg:-mb-0">
                        <img src="https://parsinta.com/logo/blue.png" alt="" class="w-12 lg:w-48">
                        <div class="block lg:hidden text-2xl text-primary hover:text-primary tracking-wide font-semibold uppercase">Parsinta</div>
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-2/3 px-6 py-16">
                <div class="mb-4 font-light tracking-widest text-2xl">LOGIN</div>
                <form>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm text-gray-800">Email</label>
                        <input type="email" name="email" id="email" class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" autocomplete="email" required>
                        <div v-if="feedback.email.error">
                            <div class="text-sm text-red-500 mt-2" v-text="feedback.email.message"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-2 text-sm text-gray-800">Your password</label>
                        <input type="password" name="password" id="password" class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" autocomplete="current-password" required>
                    </div>
                    <label class="mb-4 flex items-center">
                        <input type="checkbox" class="form-checkbox" name="remeber" id="remeber" checked>
                        <span class="ml-2">I want to remember you ?</span>
                    </label>
                    <div class="block md:flex items-center justify-between">
                        <button type="submit" class="align-middle bg-blue-500 hover:bg-blue-600 text-center px-4 py-2 text-white text-sm font-semibold rounded-lg inline-block shadow-lg">LOGIN</button>

                        <a class="text-gray-600 hover:text-gray-700 no-underline block mt-3" href="/password/reset">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="-m-2 text-center">
        <div class="p-2">
            <div class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm">
                <span class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center">Pink</span>
                <span class="inline-flex px-2">Donec sit amet neque risus. Pellentesque leo mauris, dictum et ligula in.</span>
            </div>
        </div>

        <div class="p-2">
            <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-sm">
                <span class="inline-flex bg-purple-600 text-white rounded-full h-6 px-3 justify-center items-center text-">Purple</span>
                <span class="inline-flex px-2">Aliquam condimentum, odio ac finibus fermentum neque risus.</span>
            </div>
        </div>

        <div class="p-2">
            <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-teal text-sm">
                <span class="inline-flex bg-indigo-600 text-white rounded-full h-6 px-3 justify-center items-center">Indigo</span>
                <span class="inline-flex px-2">Praesent ex nibh, laoreet id luctus vitae, porttitor at turpis. </span>
            </div>
        </div>
    </div>
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <div class="inline-block relative">
                <div class="relative w-16 h-16 rounded-full overflow-hidden">
                    <img class="absolute top-0 left-0 w-full h-full bg-cover object-fit object-cover" src="https://picsum.photos/id/646/200/200" alt="Profile picture">
                    <div class="absolute top-0 left-0 w-full h-full rounded-full shadow-inner"></div>
                </div>
                <svg class="fill-current text-white bg-green-600 rounded-full p-1 absolute bottom-0 right-0 w-6 h-6 -mx-1 -my-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M19 11a7.5 7.5 0 0 1-3.5 5.94L10 20l-5.5-3.06A7.5 7.5 0 0 1 1 11V3c3.38 0 6.5-1.12 9-3 2.5 1.89 5.62 3 9 3v8zm-9 1.08l2.92 2.04-1.03-3.41 2.84-2.15-3.56-.08L10 5.12 8.83 8.48l-3.56.08L8.1 10.7l-1.03 3.4L10 12.09z"/>
                </svg>
            </div>
        </div>
        <div class="ml-6">
            <p class="flex items-baseline">
                <span class="text-gray-600 font-bold">Mary T.</span>
                <span class="ml-2 text-green-600 text-xs">Verified Buyer</span>
            </p>
            <div class="flex items-center mt-1">
                <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                <svg class="w-4 h-4 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                <svg class="w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
            </div>
            <div class="flex items-center mt-4 text-gray-600">
                <div class="flex items-center">
                    <span class="text-sm">Product Quality</span>
                    <div class="flex items-center ml-2">
                        <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-3 h-3 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </div>
                </div>
                <div class="flex items-center ml-4">
                    <span class="text-sm">Purchasing Experience</span>
                    <div class="flex items-center ml-2">
                        <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-3 h-3 fill-current text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-3 h-3 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="w-3 h-3 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <span class="font-bold">Sapien consequat eleifend!</span>
                <p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="flex items-center justify-between mt-4 text-sm text-gray-600 fill-current">
                <button class="flex items-center">
                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z"/></svg>
                    <span class="ml-2">Share</span>
                </button>
                <div class="flex items-center">
                    <span>Was this review helplful?</span>
                    <button class="flex items-center ml-6">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 0h1v3l3 7v8a2 2 0 0 1-2 2H5c-1.1 0-2.31-.84-2.7-1.88L0 12v-2a2 2 0 0 1 2-2h7V2a2 2 0 0 1 2-2zm6 10h3v10h-3V10z"/></svg>
                        <span class="ml-2">56</span>
                    </button>
                    <button class="flex items-center ml-4">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 20a2 2 0 0 1-2-2v-6H2a2 2 0 0 1-2-2V8l2.3-6.12A3.11 3.11 0 0 1 5 0h8a2 2 0 0 1 2 2v8l-3 7v3h-1zm6-10V0h3v10h-3z"/></svg>
                        <span class="ml-2">10</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
