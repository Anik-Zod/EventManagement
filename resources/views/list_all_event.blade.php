@extends('layout')

@section('content')

<div class="page_title">Event Management</div>

<div class="container mt-4">
    <table class="table table-hover table-borderd table-sm">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->event_date }}</td>
                <td>{{ $event->start_time }}</td>
                <td>{{ $event->end_time }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection