<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aizhan</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #2e2b29; /* қара-қоңыр жылы фон */
            color: #f5f0e6;
        }

        .container {
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .left {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left img {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            object-fit: cover;
        }

        .right {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding-left: 30px;
        }

        .right h1 {
            font-size: 32px;
            margin: 0 0 20px 0;
        }

        /* GitHub сопақша батырма */
        .github-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 40px;
            border-radius: 20px;
            background-color: #3b302a;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .github-btn img {
            width: 24px;
            height: 24px;
            margin-right: 6px;
        }

        .github-btn:hover {
            background-color: #5a4a41;
        }

        /* TikTok & Instagram */
        .socials {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .socials a {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #3b302a;
            justify-content: center;
            text-decoration: none;
            color: #f5f0e6;
            font-size: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .socials a img {
            width: 24px;
            height: 24px;
            margin-bottom: 2px;
        }

        .socials a:hover {
            background-color: #5a4a41;
        }

        /* Логин / Пароль */
        input {
            width: 180px;
            margin-bottom: 10px;
            padding: 6px 10px;
            border-radius: 6px;
            border: none;
            background-color: #4a3f39;
            color: #fff;
            font-size: 13px;
        }

        input::placeholder {
            color: #cbb9a8;
        }

        /* Кіру / Тіркелу */
        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .buttons button {
            padding: 6px 18px;
            border-radius: 25px;
            border: none;
            background-color: #3b302a;
            color: #fff;
            cursor: pointer;
            transition: 0.3s;
        }

        .buttons button:hover {
            background-color: #5a4a41;
        }

        /* Телефон */
        .phone {
            margin-top: 12px;
            padding: 6px 18px;
            border-radius: 25px;
            background-color: #3b302a;
            cursor: pointer;
            transition: 0.3s;
        }

        .phone:hover {
            background-color: #5a4a41;
        }

        .hidden {
            display: none;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="left">
        <img src="Screenshot 2025-10-21 165321.png" alt="Aizhan photo">
    </div>
    <div class="right">
        <h1>Сәлем 🌸</h1>

        <!-- GitHub сопақша батырма -->
        <a href="#" class="github-btn">
            <img src="github-cat.png" alt="GitHub"> GitHub
        </a>

        <!-- TikTok & Instagram домалақ -->
        <div class="socials">
            <a href="#"><img src="tiktok-icon.png" alt="TikTok">TikTok</a>
            <a href="#"><img src="instagram-icon.png" alt="Instagram">Instagram</a>
        </div>

        <!-- Логин / Пароль -->
        <input type="text" placeholder="Логин">
        <input type="password" placeholder="Пароль">

        <!-- Кіру / Тіркелу -->
        <div class="buttons">
            <button>Кіру</button>
            <button>Тіркелу</button>
        </div>

        <!-- Телефон жасырылған -->
        <div class="phone" id="phone-btn">📞 Нөмірді көрсету</div>
        <div id="phone-number" class="hidden">87071984713</div>

    </div>
</div>

<script>
    document.getElementById('phone-btn').addEventListener('click', function() {
        const num = document.getElementById('phone-number');
        num.classList.toggle('hidden');
    });
</script>
</body>
</html>
