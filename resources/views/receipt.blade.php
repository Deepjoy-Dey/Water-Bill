
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<!-- <img src="/image/screen.jpg" alt="Cover Image"/> -->
<img src="{{public_path('image/PHE_Logo.jpg')}}" width="140" height="140">
<!-- <center>Payment Done successfully</center> -->
<div class="navbar">Service No :{{$data->CSC_No_E_Services_centre}} </div>
<div class="navbar">Bill Amount:  {{$data->Amount_Paid}}</div>
<div class="navbar">Receipt No: {{$data->Receipt_No}}</div>
<div class="navbar">Name:  {{$data->Consumer_Name}}</div>
<div class="navbar">Bill Month/Year:  {{$data->Bill_Date}}</div>
<div class="navbar">Receipt Date:  {{$data->Payment_Date}}</div>
<div class="navbar">Bank Transaction No:{{$data->Bank_Transaction_No}} </div>
<div class="navbar">Payment Mode:  {{$data->pay}}</div>
</body>
</html>
<button class="btn btn-success"><a href="/receipt/{{$data->id}}"> download</a></button>
<button class="btn btn-danger"><a href="/Homepage"> back to homepage</a></button>
