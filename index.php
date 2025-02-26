<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Ulang Tahun Puput!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            text-align: center;
            background: linear-gradient(to right, #ffafbd, #ffc3a0);
            color: white;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 3rem;
            margin-top: 50px;
            animation: bounce 1.5s infinite;
        }

        p {
            font-size: 1.2rem;
            margin: 10px 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            max-width: 800px;
        }

        .gallery img {
            width: 100%;
            max-width: 250px;
            height: auto;
            border-radius: 15px;
            box-shadow: 5px 5px 15px rgba(0,0,0,0.3);
            animation: zoom 2s infinite alternate;
            margin: 5px;
        }

        .icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .icon {
            font-size: 50px;
            color: #ff4081;
            transition: transform 0.3s;
        }

        .icon:hover {
            transform: scale(1.2);
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes zoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .more-content {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            max-width: 800px;
        }

        button {
            background-color: #ff4081;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #e0356b;
        }

        @media (max-width: 600px) {
            h1 { font-size: 2rem; }
            .icon { font-size: 30px; }
            p { font-size: 1rem; }
        }
    </style>
</head>
<body>
    <button onclick="document.getElementById('music').play()">▶ Play Musik</button>
    <audio id="music" loop>
        <source src="lagu.mp3" type="audio/mpeg">
    </audio>

    <div class="container">
        <h1>🎉 Selamat Ulang Tahun Sayangku! 🎂</h1>
        <p>Semoga panjang umur, sehat selalu, dan bahagia selalu! 🥳🎁</p>
        <p>Maaf gabisa ngasi apa apa ke kamu, nanti kalo kamu ke sini aku traktir kamu apa aja yang kamu suka! 😊</p>
        
        <div class="gallery">
            <img src="img/1 (1).jpeg" alt="Foto Puput">
            <img src="img/1 (1).jpg" alt="Foto Puput">
            <img src="img/1 (2).jpg" alt="Foto Puput">
            <img src="img/1 (3).jpg" alt="Foto Puput">
            <img src="img/1 (4).jpg" alt="Foto Puput">
            <img src="img/1 (5).jpg" alt="Foto Puput">
            <img src="img/1 (6).jpg" alt="Foto Puput">
        </div>
        
        <div class="icons">
            <i class="fa-solid fa-cake-candles icon"></i>
            <i class="fa-solid fa-heart icon"></i>
            <i class="fa-solid fa-gift icon"></i>
        </div>
    </div>

    <div class="more-content">
        <h2>Selamat Ulang tahun Puput</h2>
        <p>🎉✨ Selamat Ulang Tahun, Puput! ✨🎉</p>
        <p>Di hari istimewa ini, aku ingin mengucapkan selamat ulang tahun yang penuh kebahagiaan dan kebersamaan. Semoga setiap detik hari ini dipenuhi dengan senyuman, tawa, dan kehangatan dari orang-orang yang kamu cintai.</p>
        <p>Terima kasih telah menjadi bagian yang luar biasa dalam hidupku. Kamu adalah sumber inspirasi dan kebahagiaanku. Semoga segala impian dan harapanmu terwujud, dan kamu selalu diberi kesehatan, kesuksesan, serta cinta yang tak terhingga dari orang yang mencintaimu.</p>
        <p>Hari ini adalah tentang kamu, Mari rayakan dengan penuh sukacita dan kenangan indah.</p>
        <p>Doaku menyertaimu, kutunggu kepulanganmu sayangku (I love You).</p>
        <p>Selamat ulang tahun, Puput! Aku sayang kamu... 💖🥳</p>
    </div>
</body>
</html>

<script>function showSurprise() {
    document.getElementById('surprise').classList.remove('hidden');
}</script>

