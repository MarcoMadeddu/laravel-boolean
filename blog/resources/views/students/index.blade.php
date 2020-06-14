@extends('layouts.main')
@section('main-content')
<h1>I nostri ex studenti</h1>
    <div class="students-filter">

        <select name="filter" id="filter">
            @foreach($genders as $gender)
                <option value="{{$gender}}">
                    @if($gender == 'm') Uomo @elseif ($gender == 'f') Donna @else Tutti @endif
                </option>
            @endforeach
        </select>
    </div>
        <div class="students">
            @foreach($students as $student)
            
                <a href="{{route('student.show' , ['slug' => $student['slug']])}}" class="student">
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
</a>
    @endforeach
</div>
@endsection