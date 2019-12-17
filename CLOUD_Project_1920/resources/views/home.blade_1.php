@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Platform Studenten en Docenten</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="\students\search">
                        <button type="button">Studenten</button>
                    </a>
                    <a href="\docent">
                        <button type="button">Docenten</button>
                    </a>
                    
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
