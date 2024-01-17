@extends('layout.app')
@section('content')
    <title>
        Chat Pawsy
    </title>
    <div class="bg-[#3B8A97] w-full">
        <div class="md:hidden block pt-4 px-2">
            <a href="{{ url('home') }}" class='text-white text-3xl font-bold'>Care Mind</a>
        </div>
        <div class="flex justify-between md:mx-10 md:h-screen min-h-screen">
            <div class="hidden md:block">
                <div class="ps-11 pb-4 pt-10">
                    <a href="" class='text-white text-7xl font-bold '>Care Mind</a>
                </div>
                <div class="ps-16 flex flex-col gap-y-5">
                    <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 w-96 h-28  ">
                        <p class="text-white px-6 pt-3 text-2xl">Meditasi yang bisa dilakukan saat terpuruk</p>
                    </div>
                    <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 p-7 w-96 h-28 ">
                        <p class="text-white -px-1 -pt-9 text-sm">"Bukanlah harta yang menjadikan hidup kaya, melainkan
                            bagaimana kita memandangnya."
                            ~Epicurus </p>
                    </div>
                    <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 p-7 w-96 h-28">
                        <p class="text-white -px-1 -pt-9 text-lg"> Merasa butuh penanganan lebih?</p>
                        <div class="pt-2">
                            <a href="{{ url('chatpsikolog') }}"
                                class="bg-[#3B8A97] hover:bg-[#2E5A61] text-white font-bold py-2 px-4 rounded-lg">Hubungi
                                Psikolog</a>
                        </div>
                    </div>
                    <div class="bg-[#2E5A61] rounded-lg bg-opacity-25 p-7 w-96 h-40 text-white">
                        <p class="-px-1 -pt-9 text-lg"> Layanan Darurat </p>
                        <p class="">Hotline </p>
                        <p class="">>> 119 extension 8</p>
                        <p class="">Call Center Halo Kemenkes </p>
                        <p class=""> >> 1500-567</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row max-w-full">
                <div class="md:w-[800px] pt-10">
                    <div class="md:flex md:flex-col bg-gray-100 rounded-2xl">
                        <div class="bg-[#3B8A97] opacity-80 py-2 flex justify-items-start">
                            <img class="w-24 px-2" src="img/pawsy.png" alt="">
                            <div class=" flex flex-col justify my-auto">
                                <h1 class="text-lg text-left text-white "> PAWSY</h1>
                                <p class="  text-left text-white ">your friend </p>
                            </div>
                        </div>
                        <div class="flex-grow overflow-y-scroll h-[32rem] max-h-[32rem]">
                            <div class="flex flex-col space-y-2 md:p-4 p-2 chat-message">
                            </div>
                        </div>
                        <form>
                            <div class="flex md:p-3 p-3">
                                <input type="text" name="message" id="message" placeholder="Sampaikan pesanmu..."
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2" />
                                <button type="submit" class="ml-2 rounded-lg bg-[#3B8A97] px-4 py-2 text-white">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="md:hidden block pt-3 pb-5 px-2">
                    <div class=" flex flex-col gap-y-4">
                        <div class="bg-[#71B9C5] px-3 shadow-lg rounded-lg bg-opacity-25 flex justify-start items-center p-1 h-28">
                            <p class="text-white">Meditasi yang bisa dilakukan saat terpuruk</p>
                        </div>
                        <div class="bg-[#71B9C5] px-3 shadow-lg rounded-lg bg-opacity-25 flex justify-start items-center p-1 h-28">
                            <p class="text-white">"Bukanlah harta yang menjadikan hidup kaya, melainkan
                                bagaimana kita memandangnya."
                                ~Epicurus </p>
                        </div>
                        <div class="bg-[#71B9C5] px-3 shadow-lg rounded-lg bg-opacity-25 p-1 h-28 flex justify-start items-center">
                            <div class="">
                                <p class="text-white text-lg"> Merasa butuh penanganan lebih?</p>
                                <div class="pt-2">
                                    <a href="{{ url('chatpsikolog') }}"
                                        class="bg-[#3B8A97] hover:bg-[#2E5A61] text-white font-bold py-2 px-4 rounded-lg">Hubungi
                                        Psikolog</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#2E5A61] rounded-lg bg-opacity-25 p-7 h-40 text-white">
                            <p class="-px-1 -pt-9 text-lg"> Layanan Darurat </p>
                            <p class="">Hotline </p>
                            <p class="">>> 119 extension 8</p>
                            <p class="">Call Center Halo Kemenkes </p>
                            <p class=""> >> 1500-567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            var chatHistory = JSON.parse(localStorage.getItem('chatHistory')) || [];

            // jQuery code to append chatbox
            function appendChatBox(message, isSender) {
                var chatContainer = $(".chat-message");
                var messageClass = isSender ? "self-end" : "self-start";
                var bgColor = isSender ? "bg-[#3B8A97]" : "bg-[#3B8A97]";
                var rounded = isSender ? "rounded-tr" : "rounded-tl";

                // Manipulate the message content
                message = formatMessage(message);

                var chatMessage = `
                    <div class="${messageClass} max-w-[300px] md:max-w-[600px] rounded-xl ${rounded} ${bgColor} py-2 px-3 text-white">
                        ${message}
                    </div>
                `;

                chatContainer.append(chatMessage);
            }

            // Function to update chat history
            function updateChatHistory(message, isSender) {
                var newMessage = {
                    message: message,
                    isSender: isSender
                };

                chatHistory.push(newMessage);
                localStorage.setItem('chatHistory', JSON.stringify(chatHistory));
            }

            // Function to format the message content
            function formatMessage(message) {
                // Check for bold text (****)
                message = message.replace(/\*\*\*\*(.*?)\*\*\*\*/g, '<strong>$1</strong>');

                // Check for ordered list (1. item)
                message = message.replace(/^1\.\s(.*?)(?=\n|$)/gm, '<ol><li>$1</li></ol>');

                return message;
            }

            // Load chat history
            chatHistory.forEach(function(item) {
                appendChatBox(item.message, item.isSender);
            });

            // Your existing form submission logic
            $("form").submit(function(event) {
                event.preventDefault();
                var message = $("#message").val();
                if(message == "") return;
                if(message == 'clear')
                {
                    localStorage.clear();
                    $(".chat-message").empty();
                    $("#message").val("");
                    return;
                }
                appendChatBox(message, true); // Assuming the user is the sender
                updateChatHistory(message, true); // Save sender's message to chat history

                // Send the message to /chatpawsy endpoint
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                });
                var newMessage = "Anggap dirimu bernama pawsy, jawab pesan ini: " + message;
                $.ajax({
                    url: "{{ url('chatpawsy') }}",
                    method: "POST",
                    data: {
                        message: newMessage
                    },
                }).done(function(response) {
                    // Manipulate the response message content
                    response.message = formatMessage(response.message);

                    appendChatBox(response.message, false); // Assuming the user is the receiver
                    updateChatHistory(response.message,false); // Save receiver's message to chat history

                    // Clear the input field after sending the message
                    $("#message").val("");
                });
            });
        });
    </script>
@endsection