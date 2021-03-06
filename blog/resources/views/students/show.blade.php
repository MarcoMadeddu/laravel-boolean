@extends('layouts.main')
@section('main-content')
    <h1>{{$student['nome']}}</h1>

            <div class="student">
                    <img src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
                    <div class="info">
                        <h3>{{ $student['nome'] }} ({{ $student['età'] }})</h3>
                        <h4>
                            Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a'}} 
                            da {{ $student['azienda'] }} come {{ $student['ruolo'] }}
                        </h4>
                        <p>{{$student['descrizione']}}</p>
                    </div>
            </div>
@endsection