@foreach ($rooms as $room)
    <div class="bg-white p-4 rounded shadow mb-4">
        <h3 class="text-lg font-semibold text-slate-800">{{ $room->name }}</h3>
        <p class="text-sm text-slate-600">{{ $room->location }}</p>
        <ul class="mt-2 space-y-2">
            @foreach ($room->devices as $device)
                <li class="flex items-center justify-between">
                    <span>{{ $device->type }} - <strong>{{ $device->status }}</strong></span>
                    <button class="text-sm bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Change Device Status</button>
                </li>
            @endforeach
        </ul>
    </div>
@endforeach
