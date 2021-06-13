@extends('layouts.main')

@section('content')
    <h1 class="ms-5">Pacchetti Viaggio</h1>

    <!--Tutti le vacations da DB-->
    @foreach ($vacations as $vacation)
    <article class="ms-5">
        <h2>Città: {{ $vacation->city }}</h2>
        <div>Sistemazione: {{ $vacation->accomodation }}</div>
        <div>Numero di persone: {{ $vacation->people }}</div>
        <div>Volo numero: {{ $vacation->flight }}</div>
        <div>Descrizione {{ $vacation->description }}</div>
        <div>Check-in: {{ $vacation->check_in }}</div>
        <div>Check-out: {{ $vacation->check_out }}</div>
        <div>Prezzo: {{ number_format($vacation->price, 0, ',', '.')}} €</div>

        @if (! $loop->last)
            <hr>
        @endif

    </article>
        
    @endforeach

    <section class="nav ms-5 mt-3">
        {{ $vacations->links() }}
    </section>

@endsection