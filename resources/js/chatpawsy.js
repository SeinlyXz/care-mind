// import jquery to laravel js
import $ from 'jquery';
window.$ = window.jQuery = $;

import MarkdownCompiler from 'markdowncompiler'
const md = new MarkdownCompiler()

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
            <div class="${messageClass} max-w-[200px] md:max-w-[300px] rounded-xl ${rounded} ${bgColor} py-2 px-3 text-white">
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
        const tokens = md.markdown2Tokens(message)
        message = md.tokens2Html(tokens)

        return message;
    }

    // Load chat history
    chatHistory.forEach(function(item) {
        appendChatBox(item.message, item.isSender);
    });

    function loading(isLoading) {
        var chatContainer = $(".status-loading");
        var messageClass = "self-start";
        var bgColor = "bg-[#3B8A97]";
        var rounded = "rounded-tr";
    
        // Hapus semua elemen anak di dalam chatContainer
        chatContainer.empty();
    
        if (isLoading) {
            // Tampilkan pesan loading saat proses loading
            var loadingMessage = `
                <p class="text-left text-white animate-pulse">
                    Mengetik...
                </p>
            `;
            chatContainer.html(loadingMessage);
        } else {
            // Tampilkan pesan "your friend" setelah loading selesai
            var yourFriendMessage = `
                <p class="text-left text-white">your friend</p>
            `;
            chatContainer.html(yourFriendMessage);
        }
    }

    let isLoading = false;
    loading(isLoading);
    // Your existing form submission logic
    $("form").submit(function(event) {
        event.preventDefault();
        if(isLoading) return;

        isLoading = true;
        loading(isLoading);

        var message = $("#message").val();
        if(message == "") return;
        if(message == 'clear')
        {
            localStorage.clear();
            $(".chat-message").empty();
            $("#message").val("");
            isLoading = false; // Setelah membersihkan, tandai bahwa loading telah selesai
            loading(isLoading);
            return;
        }
        $("#message").val("");
        appendChatBox(message, true); // Assuming the user is the sender
        updateChatHistory(message, true); // Save sender's message to chat history

        // Send the message to /chatpawsy endpoint
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });
        loading(isLoading);
        var newMessage = "Anggap dirimu bernama pawsy, jawab pesan ini: " + message;
        $.ajax({
            url: window.apiurl,
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
            isLoading = false; // Setelah permintaan selesai, tandai bahwa loading telah selesai
            loading(isLoading);
        });
    });
});