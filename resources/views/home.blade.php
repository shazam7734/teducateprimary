@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
<style>
    body {
    background: url('http://st2.depositphotos.com/8187094/11861/i/450/depositphotos_118611828-Open-book-hardback-books-on-wooden-table.-Education-background.-Back-to-school.-Copy-space-for-text..jpg') no-repeat 
    center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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
                    <td>{{ $survey->value }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </table>
    @endsection      
    
    

</body>


