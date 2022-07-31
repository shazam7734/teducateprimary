@extends('layouts.homeview')
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
    <div class="">
        <div class="">
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
                        <p>View our <a href="/additional">Additional Resources</a> page for some great, ready to use tools to help engage students in technology!
                        <p>Take the <a href="/survey">Computing Curriculum Survey</a> to generate your personalised training resources!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <p> Below are your results of the survey (1 being least familar and 7 being an expert):</p>
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
        </thead>
    </table>
    <br>
    <table border="1">
        <thead>
                <tr>
                    <td>Key Stage</td>
                    <td>Curriculum Point</td>
                    <td>Tutorial 1</td>
                    <td>Tutorial 2</td>
                    <td>Tutorial 3</td>
                    <td>Primary Instructions</td>
                    <td>Secondary Instructions</td>
                    <td>Lesson Plan</td>
                    <td>Feedback</td>
                    <td>Share</td>
                    
                </tr>
            <thead>
            <tbody>
               
            </tbody>
        </thead>
    </table>
    @endsection      
    
    

</body>


