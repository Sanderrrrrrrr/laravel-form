<x-layout title='home'>
    <div>
        <div class=" flex flex-col items-center justify-center h-dvh bg-gray-600">
            <div class="text-white m-20 flex flex-col items-center justify-center">
                <h1 class='p-2 text-[30px]'>LOGIN SUCCESSFULLY!</h1>
                <h1 class="p-2">Welcome {{ $email }}</h1>
            </div>
            <div class="font-white bg-blue-700 py-3 px-5 m-10 rounded-[10px]">
                <a href="/del">LOGOUT</a>
            </div>
        </div>
    </div>
</x-layout>