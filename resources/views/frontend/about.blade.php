@extends('layout.master')
@section('PageHeader')
<div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">About Page!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
@endsection

@section('contant')
    <div>
           <h1>This is about contant area</h1>    
           <x-header>
                <span>This is sub header from about page</span>
           </x-header>
    </div>
@endsection