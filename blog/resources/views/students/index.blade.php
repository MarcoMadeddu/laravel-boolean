@extends('layouts.main')
@section('main-content')
<h1>I nostri ex studenti</h1>

<div class="students">
    @foreach($students as $student)
        <a href="{{route('student.show' , ['id' => $student['id']])}}" class="student">
            <header>
                <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
                <div class="info">
                    <h3>{{ $student['nome'] }} ({{ $student['età'] }})</h3>
                    <h4>
                        Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a'}} 
                        da {{ $student['azienda'] }} come {{ $student['ruolo'] }}
                    </h4>
                    <p>{{$student['descrizione']}}</p>
                </div>
            </header>
        </a>
    @endforeach
</div>
@endsection