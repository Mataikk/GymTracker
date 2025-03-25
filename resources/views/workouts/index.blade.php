@extends('layouts.app')

@section('content')
<h1>Mes entraînements</h1>
<table>
    <tr>
        <th>Exercice</th>
        <th>Séries</th>
        <th>Répétitions</th>
        <th>Poids (kg)</th>
        <th>Date</th>
    </tr>
    @foreach ($workouts as $workout)
        <tr>
            <td>{{ $workout->exercise }}</td>
            <td>{{ $workout->sets }}</td>
            <td>{{ $workout->reps }}</td>
            <td>{{ $workout->weight }}</td>
            <td>{{ $workout->date }}</td>
        </tr>
    @endforeach
</table>
@endsection
