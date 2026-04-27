<x-layout title='home'>
    <div class='flex flex-col items-center justify-center h-dvh'>
        <div class='p-3 m-5 text-[20px]'>
             {{ $message }}
        </div>
        <div>
            <h1 class='text-[30px]'>hello there, welcome to home page <br> The email and password is: <br> {{ $email }} <br> {{ $password }}</h1>
        </div>
    </div>
</x-layout>