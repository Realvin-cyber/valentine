<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be My Valentine ❤️</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Embedded jQuery -->
    <style>
        body {
            background: #ffe6f0;
            font-family: 'Poppins', sans-serif;
        }
        .floating-hearts {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }
        .heart {
            position: absolute;
            bottom: -10px;
            width: 20px;
            height: 20px;
            background: red;
            clip-path: polygon(50% 0%, 100% 35%, 80% 100%, 50% 80%, 20% 100%, 0% 35%);
            opacity: 0.7;
            animation: float 5s linear infinite;
        }
        @keyframes float {
            0% {
                transform: translateY(0);
                opacity: 0.7;
            }
            100% {
                transform: translateY(-100vh);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="flex flex-col items-center justify-center h-screen text-center">
    <div class="floating-hearts"></div>
    
    <div class="flex flex-col items-center mt-10">
        <h2 id="message" class="text-2xl font-bold text-red-500">Will you be my Valentine? 💖</h2>
        
        <div id="imageContainer" class="mt-4">
            <!-- Image will be inserted here dynamically -->
        </div>

        <div class="mt-6">
            <button id="yesBtn" class="bg-green-500 text-white px-6 py-3 rounded-full text-xl font-bold transition-transform duration-300">
                Yes! 💕
            </button>
            <button id="noBtn" class="bg-red-500 text-white px-6 py-3 rounded-full text-xl font-bold transition-transform duration-300 ml-4">
                No 😢
            </button>
        </div>
    </div>
    <p id="responseMessage" class="mt-4 text-lg font-semibold text-pink-600"></p>
    
    <script>
    $(document).ready(function () {
        const randomImages = [
            "v1.gif", "v2.gif", "v3.gif", "v4.gif", "v5.gif",
           "v1.gif", "v2.gif", "v3.gif", "v4.gif", "v5.gif"
        ];

        const randomWords = [
            "Absolutely not!", "No way!", "Not a chance!", "Think again!", "Try harder!",
            "Nope!", "Not today!", "Maybe next time!", "Keep dreaming!", "Not happening!",
            "Forget it!", "No chance!", "Not likely!", "Keep wishing!", "Not this time!",
            "Nope, nope, nope!", "Not in a million years!", "No way, José!", "Not on your life!",
            "Not a snowball's chance!", "Dream on!"
        ];

        let yesButtonSize = 1; // Initial scale for "Yes" button

        $("#noBtn").on("click", function () {
            const randomText = randomWords[Math.floor(Math.random() * randomWords.length)];
            const randomImage = randomImages[Math.floor(Math.random() * randomImages.length)];

            $("#responseMessage").text(randomText); // Updated message
            $("#imageContainer").html(`<img src="${randomImage}" class="mt-4 w-1/2 rounded-lg shadow-lg">`);

            // Increase the "Yes" button size but limit it to avoid covering elements
            if (yesButtonSize < 2.5) { // Limit growth to 2.5x size
                yesButtonSize += 0.3;
                $("#yesBtn").css("transform", `scale(${yesButtonSize})`);
            }
        });

        $("#noBtn").on("mouseover", function () {
            const x = Math.random() * (window.innerWidth - 200);
            const y = Math.random() * (window.innerHeight - 100);
            $(this).css({ position: "absolute", left: x + "px", top: y + "px" });
        });

        $("#yesBtn").on("click", function () {
            $("#message").text("Yay! You made my day! 💖💖💖");
            $("#imageContainer").html(`<img src="happy.gif" class="mt-4 w-1/2 rounded-lg shadow-lg">`);
        });
    });
    </script>
</body>
</html>
