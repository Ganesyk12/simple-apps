<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <div style="max-width: 600px; margin: auto;">
      <div style="background-color: #007bff; color: #ffffff; text-align: center; border-top-left-radius: 8px; border-top-right-radius: 8px;">
         <h1 style="margin: 20px;">Welcome to Arena Bocil!</h1>
      </div>
      <div style="border: 1px solid #dee2e6; border-radius: 8px; margin-top: 5px;">
         <div style="padding: 20px;">
            <div style="text-align: center; margin-bottom: 10px;">
               <img src="https://github.com/user-attachments/assets/73e53533-d3c2-45a8-8447-16b6f7e55188" alt="Arena Bocil" style="width: 20%; height: auto; border-radius: 8px;">
            </div>
            <h1 style="font-size: 24px;">Hi <?= $name ?>,</h1>
            <p style="font-size: 16px;">Terima kasih telah berlangganan newsletter kami! Kami sangat senang menyambut Anda sebagai bagian dari keluarga Arena Bocil.</p>
            <p style="font-size: 16px;">Nantikan berbagai event seru, promo menarik, dan berita terbaru seputar dunia bermain di Arena Bocil. Kami akan selalu memberikan informasi yang menghibur dan bermanfaat bagi Anda.</p>
            <p style="font-size: 16px; margin-bottom: 30px">Jika Anda memiliki pertanyaan atau membutuhkan bantuan, jangan ragu untuk menghubungi kami kapan saja.</p>
            <div style="text-align: center; margin-top: 20px;">
               <a href="#" style="background-color: #007bff; color: #ffffff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Visit Our Website</a>
            </div>
            <p style="margin-top: 20px;">Best regards,<br>The Arena Bocil Team</p>
         </div>
      </div>
      <div style="text-align: center; margin-top: 20px;">
         <p>&copy; <?= date('Y') ?> Arena Bocil. All rights reserved.</p>
         <p>If you no longer wish to receive these emails, you can <a href=" ">unsubscribe here</a>.</p>
      </div>
   </div>
</body>

</html>