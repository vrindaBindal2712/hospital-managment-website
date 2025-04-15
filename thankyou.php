<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Thank You | WC Medical</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      animation: backgroundAnimation 8s ease-in-out infinite;
    }

    .thank-you {
      background: rgba(255, 255, 255, 0.1);
      padding: 50px 60px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 8px 40px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border: 2px solid transparent;
      border-image: linear-gradient(135deg, #4caf50, #00cfff) 1;
      animation: scaleIn 0.5s ease-out forwards;
      transform: scale(0);
      max-width: 500px;
      width: 90%;
    }

    .thank-you h1 {
      font-size: 36px;
      color: #ffffff;
      font-weight: 700;
      margin-bottom: 20px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
      animation: textReveal 1s ease-out forwards;
    }

    .thank-you p {
      font-size: 18px;
      color: #e0e0e0;
      margin-bottom: 20px;
      line-height: 1.6;
      opacity: 0;
      animation: fadeInMessage 1.5s ease-out forwards 0.5s;
    }

    .actions {
      margin-top: 25px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      align-items: center;
    }

    .btn {
      display: inline-block;
      background: linear-gradient(135deg, #2575fc, #6a11cb);
      color: #fff;
      padding: 12px 28px;
      border-radius: 30px;
      text-decoration: none;
      font-size: 17px;
      font-weight: 500;
      transition: all 0.3s ease;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }

    .btn:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #4caf50, #00cfff);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
    }

    @keyframes scaleIn {
      0% { transform: scale(0); }
      100% { transform: scale(1); }
    }

    @keyframes textReveal {
      0% { opacity: 0; transform: translateY(-20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInMessage {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @keyframes backgroundAnimation {
      0% {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
      }
      50% {
        background: linear-gradient(135deg, #00cfff, #4caf50);
      }
      100% {
        background: linear-gradient(135deg, #6a11cb, #2575fc);
      }
    }

    @media (max-width: 600px) {
      .thank-you {
        padding: 30px;
      }

      .thank-you h1 {
        font-size: 28px;
      }

      .thank-you p {
        font-size: 16px;
      }

      .btn {
        padding: 10px 22px;
        font-size: 16px;
      }
    }
    .explore-btn {
      margin-top: 15px;
      background: linear-gradient(135deg, #00cfff, #4caf50);
    }

    .explore-btn:hover {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
    }

  </style>
</head>
<body>

  <section class="thank-you">
    <h1>Thank You for Your Appointment!</h1>
    <p>Your appointment has been successfully scheduled.</p>
    <p>📅 <strong>Date:</strong> Tuesday, April 16 <br>
       ⏰ <strong>Time:</strong> 10:00 AM<br>
       👨‍⚕️ <strong>Doctor:</strong> Dr. Sharma</p>

    <div class="actions">
      <a href="index.php" class="btn">Return to Home</a>
      <a href="generate-pdf.php" class="btn" target="_blank">Download Appointment Slip</a>
      <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Appointment+with+Dr.+Sharma&dates=20250416T100000/20250416T110000&details=Your+appointment+with+Dr.+Sharma+at+WC+Medical&location=WC+Medical+Clinic" target="_blank" class="btn">Add to Google Calendar</a>
      <a href="health-tips.php" class="btn explore-btn">Explore Health Tips</a>
    </div>
  </section>

  <script>
    // Auto-redirect after 10 seconds
    setTimeout(() => {
      window.location.href = "index.php";
    }, 10000);
  </script>

</body>
</html>