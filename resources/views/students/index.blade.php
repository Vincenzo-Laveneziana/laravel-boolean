@extends('layouts.main')

@section('main-content')

    <main class="main-content">

        <h1>I nostri ex studenti su LinkedIn</h1>
        
       {{-- @dump($students) --}}
     

       <div class="students">
           @foreach ($students as $student)
                <a href="{{ route('student.show', ['slug' => $student['slug']]   ) }}" class="student">
                    <div class="info">
                        <img src="{{ $student['img'] }}" alt="">

                        <div class="info-person">
                            <h3>{{$student['nome']}}  ({{$student['eta']}} anni)</h3>
                            <p>Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}} </p>
                        </div>
                    </div>

                    <div class="description">
                        <p>{{$student['descrizione']}}</p>
                    </div>
                </a>
           @endforeach

       </div>

    </main>

@endsection