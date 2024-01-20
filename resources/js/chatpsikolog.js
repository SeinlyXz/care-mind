import $ from 'jquery';
window.$ = window.jQuery = $;

import MarkdownCompiler from 'markdowncompiler'
const md = new MarkdownCompiler()

$(document).ready(function () {
    var chatHistoryPsikolog = JSON.parse(localStorage.getItem('chatHistoryPsikolog')) || [];
    // jQuery code to append chatbox
    function appendChatBox(message, isSender) {
        var chatContainer = $(".chat-message");
        var messageClass = isSender ? "self-end" : "self-start";
        var bgColor = isSender ? "bg-[#3B8A97]" : "bg-[#3B8A97]";
        var rounded = isSender ? "rounded-tr" : "rounded-tl";

        var chatMessage = `
            <div class="flex items-center ${messageClass} rounded-xl ${rounded} ${bgColor} py-2 px-3 text-white max-w-xl">
                <div class="flex flex-col">
                    ${message}
                </div>
            </div>
            `;

        chatContainer.append(chatMessage);
        // Scroll to the top of page
        chatContainer.scrollTop(chatContainer.prop("top"));
    }
    appendChatBox("Selamat datang di chatpsikolog, ketik pesanmu di sini dan tunggu balasan dari psikolog ya :)", false);
    $("#clearButton").on("click", function() {
        // Remove data from local storage
        localStorage.clear();

        // Clear the chat messages on the UI
        $(".chat-message").empty();
    });
    // Function to update chat history
    function updateChatHistory(message, isSender, nama_dokter) {
        var newMessage = {
            message: message,
            isSender: isSender,
            nama_dokter: nama_dokter
        };

        chatHistoryPsikolog.push(newMessage);
        localStorage.setItem('chatHistoryPsikolog', JSON.stringify(chatHistoryPsikolog));
    }

    // Function to format the message content
    function formatMessage(message) {
        const tokens = md.markdown2Tokens(message)
        message = md.tokens2Html(tokens)

        return message;
    }

    // Load chat history based on nama_dokter
    function loadChatHistory(nama_dokter) {
        // Clear existing chat
        $(".chat-message").empty();
        // Filter and display chat history for the selected dokter
        chatHistoryPsikolog.forEach(function (item) {
            if (item.nama_dokter === nama_dokter) {
                appendChatBox(item.message, item.isSender);
            }
        });
    }

    function loading(isLoading) {
        var chatContainer = $(".status-loading");
        // Hapus semua elemen anak di dalam chatContainer
        chatContainer.empty();

        if (isLoading) {
            // Tampilkan pesan loading saat proses loading
            var loadingMessage = `
                <p class="text-left text-white ease-in duration-300">
                    Mengetik...
                </p>
            `;
            chatContainer.html(loadingMessage);
        } else {
            // Tampilkan pesan "your friend" setelah loading selesai
            var yourFriendMessage = `
                <p class="text-left text-white"> your psikolog </p>
            `;
            chatContainer.html(yourFriendMessage);
        }
    }
    
    let isLoading = false;
    loading(isLoading);
    // Your existing form submission logic
    $("form").submit(function (event) {
        event.preventDefault();
        if (isLoading) return;

        isLoading = true;
        loading(isLoading);

        var message = $("#message").val();
        var nama_dokter = $("#nama_dokter").val();
        if (message == "") return;
        if (message == 'clear') {
            localStorage.clear();
            $(".chat-message").empty();
            $("#message").val("");
            isLoading = false; // Setelah membersihkan, tandai bahwa loading telah selesai
            loading(isLoading);
            return;
        }
        $("#message").val("");
        appendChatBox(message, true); // Assuming the user is the sender
        updateChatHistory(message, true, nama_dokter); // Save sender's message to chat history

        // Send the message to /chatpawsy endpoint
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });
        loading(isLoading);
        var newMessage = `Perhatikan saya! kamu adalah: ${nama_dokter} yang merupakan seorang psikolog. Jawab pesan pasien bernama User ini: ` + message;
        $.ajax({
            url: window.apiurl,
            method: "POST",
            data: {
                message: newMessage
            },
        }).done(function (response) {
            // Manipulate the response message content
            response.message = formatMessage(response.message);
            appendChatBox(response.message, false); // Assuming the user is the receiver
            updateChatHistory(response.message, false, nama_dokter); // Save sender's message to chat history

            // Clear the input field after sending the message
            $("#message").val("");
            isLoading = false; // Setelah permintaan selesai, tandai bahwa loading telah selesai
            loading(isLoading);
        });
    });
    // Add an event listener for changing dokter selection
    $("#nama_dokter").on("change", function () {
        var selectedDokter = $(this).val();
        loadChatHistory(selectedDokter);
    });

    // Load initial chat history based on selected dokter
    var selectedDokter = $("#nama_dokter").val();
    loadChatHistory(selectedDokter);
});