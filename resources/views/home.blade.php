@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status')) 
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    @if ( auth()->user()->designation == 'Kiosk Operator')
                        <p><a href = "/Homepage">CONTINUE </a></p>
                   
                    @elseif ( auth()->user()->designation == 'Sub Divisional Officer')
                        <p><a href = "/List">CONTINUE</a> </p> 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
