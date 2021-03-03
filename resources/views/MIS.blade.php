@extends('layouts.app')

@section('content')


<table class="table" style='width:100%'>
  <thead class="column">
    <tr>
        
        <th>Monthly report / Number of transactions per month:   </th> 
        <th> Quarterly report / Number of transactions per Quarter </th>
        <th> Yearly report / Number of transactions per Year: </th>
        
        
    </tr>
  </thead>
  <tbody >
    <tr > 
    
      <td>{{$mMonth}}</td>
      <td></td>
      <td>{{$mYear}}</td>
      
    </tr>
    </tbody>
</table>



<table class="table" style='width:100%'>
  <thead class="column">
    <tr>
        <th> Sl. No.</th>
        <th> Zonal Office</th>
        <th> Area Code</th>
        <th> Meter Reader No.</th>
        <th> Water Connection No.</th>
        <th>Payment Mode</th>
        <th> Cheque Number</th>
        <th> IFSI Code</th>
        <th> UPI ID</th>
        <th> Amount Paid</th>
        
    </tr>
  </thead>
  <tbody >
  @php($sum = 0)
  @foreach($data as $datas)
    <tr > 
      <th scope="row" >{{$loop->index+1}}</th>
      <td>{{$datas->Area_Code}}</td>
      <td>{{$datas->Zone_Code}}</td>
      <td>{{$datas->Meter_Reader_No}}</td>
      <td>{{$datas->Water_Connection_No}}</td>
      <td>{{$datas->pay}}</td>
      <td>{{$datas->Cheque_Number}}</td>
      <td>{{$datas->IFSI_Code}}</td>
      <td>{{$datas->UPI_ID}}</td>
      <td>{{$datas->Amount_Paid}}</td>
      @php($sum+=$datas->Amount_Paid)
    </tr>

    @endforeach
    <tr>
     <th>GRAND TOTAL</th>
     <td>{{$sum}}</td>
    </tr>
    </tbody>
</table>
@endsection