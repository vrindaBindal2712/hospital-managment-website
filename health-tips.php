<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Tips | WC Medical</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      padding: 40px;
      background: linear-gradient(to right, #e0f7fa, #ffffff);
      color: #333;
    }

    .container {
      max-width: 800px;
      margin: auto;
      background: #ffffffcc;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      animation: fadeIn 1s ease-in-out;
    }

    h1 {
      color: #2575fc;
      margin-bottom: 20px;
      font-size: 36px;
      text-align: center;
    }

    ul {
      list-style: none;
      padding-left: 20px;
      line-height: 2;
      font-size: 18px;
    }

    ul li::before {
      content: "✔️ ";
      margin-right: 10px;
    }

    .buttons {
      text-align: center;
      margin-top: 40px;
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
    }

    a.button {
      background: linear-gradient(135deg, #2575fc, #6a11cb);
      color: white;
      text-decoration: none;
      padding: 12px 26px;
      border-radius: 30px;
      font-weight: 500;
      font-size: 16px;
      transition: all 0.3s ease;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    a.button:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #00cfff, #4caf50);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 600px) {
      .container {
        padding: 25px;
      }
      h1 {
        font-size: 28px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Daily Health Tips</h1>
    <ul>
      <li>💧 Stay hydrated – aim for 8 glasses of water daily</li>
      <li>🥦 Eat plenty of fruits and vegetables</li>
      <li>🚶‍♂️ Walk or exercise for at least 30 minutes daily</li>
      <li>😴 Ensure 7-8 hours of quality sleep</li>
      <li>🧘‍♀️ Practice mindfulness or meditation regularly</li>
      <li>💉 Keep your vaccinations and checkups up-to-date</li>
      <li>🧼 Wash your hands frequently and properly</li>
      <li>🌤️ Get sunlight exposure for Vitamin D</li>
      <li>📵 Take regular breaks from screens to reduce eye strain</li>
      <li>❤️ Connect socially and maintain a positive mindset</li>
    </ul>

    <div class="buttons">
      <a href="index.php" class="button">← Back to Home</a>
      <a href="https://www.who.int/news-room/fact-sheets/detail/healthy-diet" class="button" target="_blank">Learn More from WHO</a>
    </div>
  </div>
</body>
</html>