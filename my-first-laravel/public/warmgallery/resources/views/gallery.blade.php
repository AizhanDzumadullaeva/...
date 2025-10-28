<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Minimal Warm Gallery</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #fff5e6, #ffeedd);
            font-family: 'Helvetica Neue', sans-serif;
        }

        /* Минималист сурет */
        .main-img {
            max-width: 400px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        /* Кнопкалар */
        button {
            margin-top: 20px;
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            background: #ffdcb3;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover { background: #ffc699; }
    </style>
</head>
<body>
<div style="text-align: center; margin-top: 40px;">
    <img src="{{ asset('images/images/photo_2025-10-26_00-38-24.jpg') }}"
         alt="photo"
         style="width: 250px; height: auto; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.2);">
</div>
<!-- Орталық сурет -->
<img src="{{ asset('images/your-image.jpg') }}" alt="Main Image" class="main-img">

<!-- Кнопкалар -->
<button onclick="toggleMusic()">Музыканы қосу/тоқтату</button>
<button onclick="changeImage()">Суретті ауыстыру</button>
p
<!-- Музыка -->
<audio id="bgMusic" src="{{ asset('music/your-music.mp3') }}"></audio>

<script>
    let isPlaying = false;

    // Музыка қосу/тоқтату
    function toggleMusic() {
        const music = document.getElementById('bgMusic');
        if (!isPlaying) { music.play(); isPlaying = true; }
        else { music.pause(); isPlaying = false; }
    }

    // Суретті ауыстыру
    function changeImage() {
        const img = document.querySelector('.main-img');
        img.src = "{{ asset('images/your-second-image.jpg') }}";
    }
</script>
</body>
</html>
