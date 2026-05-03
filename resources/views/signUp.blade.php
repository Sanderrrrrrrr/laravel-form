<x-layout title="Sign Up">
    <body class='bg-blue-200 font-sans h-dvh flex flex-col items-center justify-center'>
        <form method='POST' action='/signUp' class='bg-gray-700 p-10 m-10 rounded-[20px]'>
            @csrf
            <div class='text-white font-bold text-[30px]'>
                <h1>Create Account</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <input value="{{ old('email') }}" type="text" name="email" placeholder='Email Address'
                    class='bg-white px-10 py-4 text-lg rounded-[20px] text-[1rem] mb-1 mt-4 focus:outline-none focus:placeholder-transparent'>

                <input type="password" name="password" placeholder='Password'
                    class='bg-white px-10 py-4 text-lg rounded-[20px] text-[1rem] mt-1 mb-1 focus:outline-none focus:placeholder-transparent'>

                <input type="password" name="password_confirmation" placeholder='Confirm Password'
                    class='bg-white px-10 py-4 text-lg rounded-[20px] text-[1rem] mt-1 mb-4 focus:outline-none focus:placeholder-transparent'>
            </div>

            <div class='flex items-center justify-center'>
                <button type="submit" class='py-2 px-7 rounded-[10px] bg-cyan-500 hover:bg-blue-200'>Sign Up</button>
            </div>

            <div class='mt-2 flex flex-col items-center justify-center'>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
                @if(session('success'))
                    <span class="text-green-400 text-sm">{{ session('success') }}</span>
                @endif
            </div>

            <div class='text-white text-sm text-center mt-3'>
                Already have an account? <a href="/" class='text-cyan-400 underline'>Log In</a>
            </div>
        </form>
    </body>
</x-layout>