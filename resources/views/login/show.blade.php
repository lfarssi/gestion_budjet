<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-blue-800 mb-6">Welcome Back!</h2>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label  class="text-sm font-semibold text-gray-600">Email Address</label>
                    <input type="email" id="email" name="email" class="block w-full mt-1 p-3 rounded-md bg-gray-100 border-transparent focus:outline-none focus:bg-white focus:border-gray-300" value="{{old('email')}}" placeholder="Your Email Address">
                    @error('email')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label  class="text-sm font-semibold text-gray-600">Password</label>
                    <input type="password" id="password" name="password" class="block w-full mt-1 p-3 rounded-md bg-gray-100 border-transparent focus:outline-none focus:bg-white focus:border-gray-300" placeholder="Your Password">
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember_me" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">Forgot Password?</a>
                </div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md py-3 transition duration-300 mt-4 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
