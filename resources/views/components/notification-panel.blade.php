@props(['notifications'])

<div>
    @foreach ($notifications as $note)
        <p>{{ $note['title'] ?? 'No title' }}</p>
    @endforeach
</div>
