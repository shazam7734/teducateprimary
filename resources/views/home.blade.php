@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
<style>
    body {
    background-image: url('https://img.freepik.com/free-vector/smooth-white-wave-background_52683-55288.jpg?w=2000');
    }
</style>
</head>
<body>
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection      
    
    <p>Take the <a href="/survey">Computing Curriculum Survey</a> to generate your personalised training resources!</p>
    <table border="1">
        <thead>
            <tr>
                <td>Teaching Point</td>
                <td>Survey Result</td>
            </tr>
        <thead>
        <tbody>
            @foreach ($surveys as $survey)
            <tr>
                <td>{{ $survey->name }}</td>
                <td>{{ $survey->value }</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>


