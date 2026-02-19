@extends('layouts.txant')

@section('title', 'Appointments')

@section('content')
<table>
    <tr>
        <th>Id</th>
        <th>Paziente izena</th>
        <th>Data</th>
        <th>Egoera</th>
        <th>Medikua</th>
        <th>Espezialitatea</th>

    </tr>
    @foreach ($appointments as $appointment)
    <tr>
        <td>{{ $appointment->id }}</td>
        <td>{{ $appointment->paziente_izena }}</td>
        <td>{{ $appointment->data }}</td>
        <td>{{ $appointment->egoera }}</td>
        <td>{{ $appointment->doctor->izena }}</td>
        <td>{{ $appointment->doctor->espezialitatea }}</td>

    </tr>
    @endforeach
</table>
@endsection
