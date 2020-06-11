<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Titolo e icona -->
    <title>Laravel Boolean</title>
    <link rel="icon" href="">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>


    <header class="main-header">
        <nav class="navbar">

            <a href="{{ route('static-page.home')}}" class="navbar-brand">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="Logo">
            </a>

            <ul>
                <li>
                    <a @if (Request::route()->getName() == 'static-page.home') class="active" @endif href=" {{ route('static-page.home')}}">Home</a>
                </li>
                <li>
                    <a href=" {{ route('student.index')}}">Corso</a>
                </li>
                <li>
                    <a @if (Request::route()->getName() == 'student.index') class="active" @endif href=" ">Dopo il corso</a>
                </li>
                <li>
                    <a href=" ">Lezione gratuita</a>
                </li>
                <li>
                    <a href=" ">Assumi i nostri studenti</a>
                </li>
                <li>
                    <a href=" ">Candidati ora</a>
                </li>
            </ul>
        </nav>
    </header>