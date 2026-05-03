<x-layout title='Log In'>
<body class='bg-blue-200 font-sans h-dvh flex flex-col items-center justify-center  '>
    <form method='POST' Action='/logIn' class='bg-gray-700 p-10 m-10 rounded-[20px]'>
    @csrf   
        <div class='text-white font-bold text-[30px]'>
            <h1>Hello there!!</h1>
        </div>
        <div class="justify-center items-center">
            <div>
                <!--pwede rasad nga type kay email and butngag required both pero letsdo the laravel way-->
                <input value="{{ old('email') }}" type="text" name="email" id="email" placeholder='Email Address' class='bg-white px-10 py-4 text-lg rounded-[20px] text-[1rem] mb-1 mt-4 focus:outline-none focus:placeholder-transparent'>

            </div>
            <div>
                <input  type="password" name="password" id="password" placeholder='Password' class='bg-white px-10 py-4 text-lg rounded-[20px] text-[1rem] mt-1 mb-4 focus:outline-none focus:placeholder-transparent'>
            </div>
            <div class='flex items-center justify-center'>
                <button type="submit" class='py-2 px-7 rounded-[10px] bg-cyan-500 hover:bg-blue-200'>Log In</button>
            </div>
            <div class="p-2 m-1">
                <p class=" text-white"><i>Not yet registered? <span><a href="/signUp" class="text-blue-500">Sign up</a></span> here!</i></p>
            </div>
        </div>
        <div class='mt-2 flex flex-col items-center justify-center'>
            @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            @if(!$errors->has('email'))
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            @endif

            <div class='text-red-500 text-sm'>
                {{ session('error') }}
            </div>
        </div>
</form>
</body>
</x-layout>