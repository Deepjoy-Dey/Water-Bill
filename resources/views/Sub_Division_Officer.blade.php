@extends('layouts.app')
@section('content')
<button><a href="/MIS"> Daily MIS report</a></button>
<table class="table" style='width:100%'>
  <thead class="column">
    <tr>
        <th> Bill No /Consumer Registration No </th>
        <th> Consumer Name</th>
        <th> Address Hno</th>
        <th> Address Sub locality1</th>
        <th> Address Sub locality2</th>
        <th>Address Location</th>
        <th> Sub District</th>
        <th> District</th>
        <th> State</th>
        <th> Pin Code</th>
        <th> Country</th>
        <th> Bill Payment Date</th>
    </tr>
  </thead>
  <tbody >
  @foreach($data as $datas)
    <tr >
      <th scope="row" >{{$datas->Bill_No_Consumer_Registration_No}}</th>
      <td>{{$datas->Consumer_Name}}</td>
      <td>{{$datas->Address_Hno}}</td>
      <td>{{$datas->Address_Sub_locality1}}</td>
      <td>{{$datas->Address_Sub_locality2}}</td>
      <td>{{$datas->Address_Location}}</td>
      <td>{{$datas->Sub_District}}</td>
      <td>{{$datas->District}}</td>
      <td>{{$datas->State}}</td>
      <td>{{$datas->Pin_Code}}</td>
      <td>{{$datas->Country}}</td>
      <td>{{$datas->Payment_Date}}</td>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection