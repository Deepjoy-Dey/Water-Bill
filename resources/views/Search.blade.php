@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
            <tr>
                <th>Bill Date : </th>
               
                <td>{{$data->Bill_Date}}</td>

            </tr>
            <tr>

                <th> Bill No /Consumer Registration No: </th>
                <td>{{$data->Bill_No_Consumer_Registration_No}}</td>
            </tr>
            <tr>
                <th> Consumer Name : </th>
                <td>{{$data->Consumer_Name}}</td>
            </tr>
            <tr>
                <th> Email : </th>
                <td>{{$data->Email}}</td>
            </tr>

            <tr>
                <th> Contact No : </th>
                <td>{{$data->Contact_No}}</td>
            </tr>
           
            <tr>
                <th> Address Hno: </th>
                <td>{{$data->Address_Hno}}</td>
            </tr>
           
            <tr>
                <th> Address Sub locality1: </th>
                <td>{{$data->Address_Sub_locality1}}</td>
            </tr>
          
            <tr>
                <th> Address Sub locality2 : </th>
                <td>{{$data->Address_Sub_locality2}}</td>
            </tr>
          
            <tr>
                <th>Address Location : </th>
                <td>{{$data->Address_Location}}</td>
            </tr>

            <tr>
                <th> Sub District : </th>
                <td>{{$data->Sub_District}}</td>
            </tr>
            <tr>
                <th> District : </th>
                <td>{{$data->District}}</td>
            </tr>
            <tr>
                <th> State : </th>
                <td>{{$data->State}}</td>
            </tr>
            <tr>
                <th> Pin Code: </th>
                <td>{{$data->Pin_Code}}</td>
            </tr>
            <tr>
                <th> Country : </th>
                <td>{{$data->Country}}</td>
            </tr>
            <tr>
                <th> CSC No /E-Services centre : </th>
                <td>{{$data->CSC_No_E_Services_centre}}</td>
            </tr>
            <tr>
                <th> Zone Code : </th>
                <td>{{$data->Zone_Code}}</td>
            </tr>
            <tr>
                <th> Meter Reader No : </th>
                <td>{{$data->Meter_Reader_No}}</td>
            </tr>
            <tr>
                <th> Area Code : </th>
                <td>{{$data->Area_Code}}</td>
            </tr>
            <tr>
                <th> Water Connection No: </th>
                <td>{{$data->Water_Connection_No}}</td>
            </tr>
            <tr>
                <th> Total Amount : </th>
                <td>{{$data->Total_Amount}}</td>
            </tr>
            <tr>
                <th> Pay : </th>
                <td>
                <form action="/store/{{$data->id}}" method="post">
                @csrf
                <select name="pay" id="pay">
                <option value="0" selected disabled>select</option>
                <option value="cash">cash</option>
                <option value="cheque">cheque</option>
                <option value="online">online</option>
                </select>
                
                <button type="submit">save</button>
                
                </form>
                </td>
            </tr>
            
            </table>


             
            <!-- <button onClick="myFunction()">pay</button>
            <br>

    <div id="my">
    <br> -->
           @if($data->pay == 'cash')

            <!-- <button onClick="myCash()">Cash</button> -->
            <br>
                <form  action="/payment/{{$data->id}}" method="post" id="cash">
                   @csrf
                    <label>cash</label>
                    <br>
                    <label>Enter Amount</label>
                    <input type="text" name="Amount_Paid" placeholder="Bill Amount">
                    <label>Payment Date *:</label> <input type="date" name="Payment_Date" placeholder="Bill Payment Date" required> 
                    <button type="submit">Confirm</button>
                </form>
            @elseif($data->pay == 'cheque')
            
                <!-- <button onClick="myCheque()">Cheque</button> -->
                <br>
                <form action="/payment/{{$data->id}}" method="post"id="cheque">
                   @csrf
                      
                    <label>cheque</label>
                    <br>
                    <label>A/C Holder Name </label>
                    <input type="text" name="AC_Holder_Name"> 
                    <br>
                    <label>A/C Number </label>
                    <input type="text" name="AC_Number"> 
                    <br>
                    <label>Cheque Number </label>
                    <input type="text" name="Cheque_Number"> 
                    <br>
                    <label>Bank Name  </label>
                    <input type="text" name="Bank_Name"> 
                    <br>
                    <label>IFSI Code  </label>
                    <input type="text" name="IFSI_Code"> 
                    <br>
                    <label>Enter Amount</label>
                    <input type="text" name="Amount_Paid" placeholder="Bill Amount"> 
                    <br>
                    <label>Payment Date *:</label> <input type="date" name="Payment_Date" placeholder="Bill Payment Date" required>

                    <button type="submit">Confirm</button>
                </form>
            @elseif($data->pay =='online')
            <!-- <button onClick="myOnline()">Online</button> -->
            <br>
                <form action="/payment/{{$data->id}}" method="post"id="online">
                @csrf
                    <label>online</label>
                    <br>
                    <label>UPI ID </label>
                    <input type="text" name="UPI_ID" placeholder="UPI No">
                    <br> 
                    <label>Enter Amount</label>
                    <input type="text" name="Amount_Paid" placeholder="Bill Amount"> 
                    <br>
                    <label>Payment Date *:</label> <input type="date" name="Payment_Date" placeholder="Bill Payment Date" required>

                    <button type="submit">Confirm</button>
                </form>
                @endif
            
            <!-- <script src="/js/index.js"></script> -->

            <br>
            
            
            </div>

            

</body>
</html>
@endsection