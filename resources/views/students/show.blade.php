@extends('layouts.main')

@section('main-content')

    <main class="main-content">
        
        <div class="student2">
           
                 
            <div class="info">
                <img src="{{ $student['img'] }}" alt="">

                <div class="info-person">
                    <h3>{{$student['nome']}}  ({{$student['eta']}}anni)</h3>
                    <p>Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}} </p>
                </div>
            </div>

            <div class="description">
                <p>{{$student['descrizione']}}</p>
            </div>
                 
            
 
        </div>

    </main>

@endsection