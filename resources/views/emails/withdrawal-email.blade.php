<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($withdrawal_details as $withdrawal_detail)

   <h1>Hello {{ $withdrawal_detail->user_name }}.</h1>
   <br>
   <p>Your Withdrawal has been approved.</p>
   <p> ${{ $withdrawal_detail->amount }} has been successfully  sent to your Bitcoin Address </p> <br>
   <p>
   Bitcoin Wallet Address : ${{ $withdrawal_detail->user_bitcoin_address }}
   </p>
   <p> earnpointe.com</p>
   
@endforeach
    
</body>
</html>