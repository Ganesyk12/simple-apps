<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $title ?></title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
   <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
      <h1 style="color: #333;">Thank you for your booking, <br> <?= $name ?>!</h1>
      <p style="font-size: 16px; color: #555;">Your transaction ID is: <strong><?= $message['trxid'] ?></strong></p>
      <p style="font-size: 16px; color: #555;">Details of your booking:</p>
      <div style="background: #e2e2e2; padding: 10px; border-radius: 4px;">
         <ul style="list-style-type: none; padding: 0; margin: 0;">
            <li style="margin: 5px 0;"><strong>Ticket Type:</strong> <?= $message['ticketType'] ?></li>
            <li style="margin: 5px 0;"><strong>SKU:</strong> <?= $message['sku'] ?></li>
            <li style="margin: 5px 0;"><strong>Phone Number:</strong> <?= $message['telp'] ?></li>
            <li style="margin: 5px 0;"><strong>Reservation Date:</strong> <?= $message['reserv_date'] ?></li>
            <li style="margin: 5px 0;"><strong>Reservation Time:</strong> <?= $message['reserv_time'] ?></li>
            <li style="margin: 5px 0;"><strong>Quantity:</strong> <?= $message['qty'] ?></li>
            <li style="margin: 5px 0;"><strong>Voucher:</strong> <?= $message['voucher'] ?></li>
            <li style="margin: 5px 0;"><strong>Price:</strong>
               <span style="color: red; text-decoration: line-through;">
                  Rp. <?= $message['total'] ?>
               </span>
            </li>
            <li style="margin: 5px 0;"><strong>Total Discount:</strong>Rp. <?= $message['discount_price'] ?></li>
         </ul>
      </div>
      <p style="font-size: 16px; color: #555;">We hope you enjoy your time at Arena Bocil!</p>
      <div style="margin-top: 10px; font-size: 14px; color: #777;">
         <p>If you have any questions, feel free to <a href="mailto:support@example.com">contact us</a>.</p>
      </div>
      <div style="text-align: center; margin-top: 20px;">
         <p>&copy; <?= date('Y') ?> Arena Bocil. All rights reserved.</p>
      </div>
   </div>
</body>

</html>