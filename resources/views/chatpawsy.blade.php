@extends('layout.app')
@section('content')
<div class="bg-[#3B8A97] w-full">
    <div class="flex justify-between py-10 mx-10 gap-x-10">
        <div>
            <div class="pb-4 pt-4 p-10">
                <a href="" class='text-white text-7xl font-bold '>Care Mind</a>
            </div>
            <div class="w-full">
                <div class="bg-[#71B9C5] rounded-lg opacity-25 w-96 h-44  ">
                </div><br>
                <div class="bg-[#71B9C5] rounded-lg opacity-25 p-7 w-96 h-16 ">
                </div><br>
                <div class="bg-[#71B9C5] rounded-lg opacity-25 p-7 w-96 h-16">
                </div><br>
                <div class="bg-[#2E5A61] rounded-lg opacity-25 p-7 w-96 h-16">
                </div><br>
            </div>
        </div>
        <div class="top-2.5 width-[400%] height-[300%] w-full">
            <div class="flex h-screen flex-col bg-gray-100 rounded-2xl">
                <div class="bg-[#3B8A97] opacity-80 py-2 flex justify-items-start">
                    <img class="w-36 px-2" src="images/oren-hi.png" alt="">
                    <div class=" flex justify">
                        <h1 class="text-lg p-12 text-left text-white "> PAWSY</h1>
                        <p class=" p-12 text-left text-white ">your friend </p>
                    </div>
                </div>
                <div class="flex-grow overflow-y-auto">
                    <div class="flex flex-col space-y-2 p-4">
                        <!-- Individual chat message -->
                        <div class="flex items-center self-end rounded-xl rounded-tr bg-blue-500 py-2 px-3 text-white">
                            <p>This is a sender message</p>
                        </div>
                        <div class="flex items-center self-start rounded-xl rounded-tl bg-gray-300 py-2 px-3">
                            <p>This is a receiver message</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-4">
                    <input type="text" placeholder="Type your message..." class="w-full rounded-lg border border-gray-300 px-4 py-2" />
                    <button class="ml-2 rounded-lg bg-blue-500 px-4 py-2 text-white">Send</button>
                </div>
            </div>
        </div>

    </div>
    @endsection