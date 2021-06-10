@extends('layouts.main')

@section('content')
    <h1>Pacchetti Viaggio</h1>

    <!--Tutti le vacations da DB-->
    @foreach ($vacations as $vacation)
    <article>
        <h2>{{ $vacation->city }}</h2>
        <div>{{ $vacation->accomodation }}</div>
        <div>{{ $vacation->people }}</div>
        <div>{{ $vacation->flight }}</div>
        <div>{{ $vacation->description }}</div>
        <div>{{ $vacation->check_in }}</div>
        <div>{{ $vacation->check_out }}</div>
        <div>{{ number_format($vacation->price, 0, ',', '.')}} €</div>

        @if (! $loop->last)
            <hr>
        @endif

    </article>
        
    @endforeach

    <section>
        {{ $vacations->links() }}
    </section>

@endsection