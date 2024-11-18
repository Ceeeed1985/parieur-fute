@extends('layouts.app')

@section('title')
     | Se connecter
@endsection

@section('content')

<div class="w-full h-[100vh] bg-gray-100 flex justify-center items-center bg-cover" style="background-image: url('images/card-football.jpg')">
    
    <form action="" class="w-[400px] h-[400px] border-2 bg-gray-100 bg-opacity-40 border-white border-opacity-50 rounded-2xl backdrop-blur-md shadow-lg shadow-blue-500/50 flex justify-center px-8 flex-col">
        <h2 class="text-3xl font-bold pb-10 text-center text-gray-700">Login</h2>
        <div class="input-content flex border-b-2 border-b-gray-700 pb-3 mb-5 justify-between">
            <label for="email" class="hidden">Email</label>
            <input type="email" name="email" placeholder="Entrez votre email" class="bg-transparent border-none outline-none placeholder-gray-700">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-gray-700">
                <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
            </svg>
            </span>
        </div>
        <div class="input-content flex border-b-2 border-b-gray-700 pb-3 mb-5 justify-between">
            <label for="password" class="hidden">Password</label>
            <input type="password" name="password" placeholder="Entrez votre password" class="bg-transparent border-none outline-none placeholder-gray-700">
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-gray-700">
                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
              </svg>
              </span>
        </div>
        <div class="remember-forgot flex justify-between ">
            <label><input type="checkbox" class="mr-1">Remember me</label>
            <a href="#">Forgot password ?</a>
        </div>
        <button type="submit" class="bg-gray-700 text-white py-2 my-4 rounded-md">Log in</button>
        <div class="login-register text-center text-sm">
            <p>Don't have an account ? <a href="{{ route('register')}}" class="font-bold">Register</a></p>
        </div>
        
    </form>
</div>

@endsection