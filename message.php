<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Valentine's Day! 💖</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: #ffe6f0;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }
        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }
        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .message-content {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        .message-content.show {
            display: block;
            opacity: 1;
        }
    </style>
</head>
<body class="text-center">
    <!-- Greetings Section -->
    <div class="h-screen flex flex-col items-center justify-center">
        <h1 class="text-5xl font-bold text-pink-500 fade-in">Happy Valentine's Day! 💘</h1>
        <p class="mt-4 text-xl text-gray-700 fade-in">Wishing you love, happiness, and all things sweet! 🌹</p>
        <img src="v2.gif" alt="Valentine's Day Image" class="mt-6 w-1/2 rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-105">
        <a href="#messages" class="mt-6 bg-red-500 text-white px-6 py-3 rounded-full text-xl font-bold transition-transform transform hover:scale-110">
            Scroll Down ⬇️
        </a>
    </div>
    
    <!-- Message Section -->
    <div id="messages" class="py-20 bg-white text-center fade-in">
        <h2 class="text-4xl font-bold text-red-400">A Special Message for You 💌</h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-6">
            <div class="card" onclick="toggleMessage(this)">
                <img src="v3.gif" alt="Message 1" class="w-full h-32 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-pink-500">Click to Open</h3>
                <p class="message-content text-gray-700 mt-4">You are the sweetest part of my day! 💖</p>
            </div>
            <div class="card" onclick="toggleMessage(this)">
                <img src="v6.gif" alt="Message 2" class="w-full h-32 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-pink-500">Click to Open</h3>
                <p class="message-content text-gray-700 mt-4">Every moment with you is special! 🌹</p>
            </div>
            <div class="card" onclick="toggleMessage(this)">
                <img src="v7.gif" alt="Message 3" class="w-full h-32 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-bold text-pink-500">Click to Open</h3>
                <p class="message-content text-gray-700 mt-4">You make my world brighter! ✨</p>
            </div>
        </div>
    </div>
    
    <!-- Images Section -->
    <div class="py-20 bg-pink-100 flex flex-col items-center fade-in">
        <h2 class="text-3xl font-bold text-red-500">Some Lovely Memories 📸</h2>
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <img src="sweet-message.jpg" alt="Sweet Love" class="w-64 h-64 rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-110 hover:shadow-2xl hover:opacity-90">
            <img src="love-flowers.jpg" alt="Love Flowers" class="w-64 h-64 rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-110 hover:shadow-2xl hover:opacity-90">
            <img src="valentine-couple.jpg" alt="Valentine Couple" class="w-64 h-64 rounded-lg shadow-lg transition-transform duration-300 transform hover:scale-110 hover:shadow-2xl hover:opacity-90">
        </div>
    </div>
      <!-- New Button Section -->
      <div class="mt-10"> <!-- Added margin-top to create space -->
        <a href="valentine.php" class="bg-blue-500 text-white px-6 py-3 rounded-full text-xl font-bold transition-transform transform hover:scale-110">
        Click Here 🌟
        </a>
    </div>
  
    
    <audio id="background-music" loop>
        <source src="path/to/your/song.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    
    <!-- Footer Section -->
    <footer class="bg-gray-900 text-white py-8 mt-10">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-4">Stay Connected!</h2>
          
            <div class="flex justify-center space-x-6 mb-4">
                <a href="https://facebook.com" target="_blank" class="text-blue-500 hover:text-blue-300 transition duration-300">
                    <i class="fab fa-facebook-f fa-lg"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="text-blue-400 hover:text-blue-200 transition duration-300">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="text-pink-500 hover:text-pink-300 transition duration-300">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </div>
            <p class="text-sm">© <span id="current-year"></span> Realnex. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Get the current year and display it in the footer
        document.getElementById("current-year").textContent = new Date().getFullYear();
    </script>
    
    <script>
        $(document).ready(function () {
            const elements = $(".fade-in");
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        $(entry.target).addClass("show");
                    }
                });
            }, { threshold: 0.1 });
            
            elements.each(function() {
                observer.observe(this);
            });
            
            // Play the background music when the page loads
            const music = document.getElementById("background-music");
            music.play().catch(error => {
                console.log("Playback failed:", error);
            });
        });
        
        function toggleMessage(clickedCard) {
            $(".message-content").each(function() {
                if ($(this).parent()[0] !== clickedCard) {
                    $(this).slideUp(300).removeClass("show");
                }
            });
            
            const message = $(clickedCard).find(".message-content");
            if (message.is(":visible")) {
                message.slideUp(300).removeClass("show");
            } else {
                message.slideDown(300).addClass("show");
            }
        }
    </script>
    
</body>
</html>
