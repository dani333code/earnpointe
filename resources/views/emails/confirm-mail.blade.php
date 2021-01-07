<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Deposit Confirmation</h1>
   @foreach ($deposit_details as $deposit_detail)
   <p> Dear {{ $deposit_detail->user_name }}</p>
   <p>Your deposit has been approved</p>

   <p>Amount : ${{ $deposit_detail->amount }}.00 of bitcoin</p>
   
   <p>Plan Name: {{ $deposit_detail->plan_name }}</p>
   @endforeach
    
</body>
</html>