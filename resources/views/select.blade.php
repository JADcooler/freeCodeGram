@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href='registers/'><button>Register new</button></a>
                    <br><br><br>
                    <a href='s'><button>see details</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection