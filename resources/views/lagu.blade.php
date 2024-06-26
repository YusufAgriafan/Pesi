<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="main">
        <div class="player-container">
            <h1>Music Player</h1>
            <audio id="audio" controls>
                <source id="audioSource" src="" type="audio/mp3">
            </audio>

            <div class="buttons">
                <button onclick="playPrevious()">
                    <img src="https://cdn-icons-png.flaticon.com/512/318/318477.png" alt="">
                </button>
                <button onclick="togglePlayPause()">
                    <img id="playImg" src="https://static.vecteezy.com/system/resources/previews/009/992/357/large_2x/pause-icon-sign-symbol-design-free-png.png" alt="">
                </button>
                <button onclick="playNext()">
                    <img src="https://cdn-icons-png.flaticon.com/512/181/181669.png" alt="">
                </button>
            </div>

            <div class="playlist">
                <ol id="playlist">
                    <li class="playlist-music" id="music1" onclick="playMusic('music1')"><a href="./music/Taylor Swift - Enchanted (lyrics).mp3" style="pointer-events: none">Music 1</a></li>
                    <li class="playlist-music" id="music2" onclick="playMusic('music2')"><a href="./music/Taylor Swift - Love Story (Lyrics).mp3" style="pointer-events: none">Music 2</a></li>
                    <li class="playlist-music" id="music3" onclick="playMusic('music3')"><a href="./music/You Belong With Me - Taylor Swift (Lyrics).mp3" style="pointer-events: none">Music 3</a></li>
                </ol>
            </div>
            <h4 id="trackTitle"></h4>
        </div>
    </div>

    <!-- Script JS -->
    <script src="./script.js"></script>
</body>
</html>
