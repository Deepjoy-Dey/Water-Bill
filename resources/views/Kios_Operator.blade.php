@extends('layouts.app')
@section('content')
<br>
<center><button ><a href="/application">add consumer</a> </button></center>
<br>
<br>
<center><form action="/search" method="get">
@csrf
<input type="text" name="Search" placeholder="Bill No./Consumer No." > <input type="Submit" value="Search">
</form></center>

@endsection