<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Dashboard Monitoring</h2>
    </x-slot>

    <div class="py-6 px-4">
        <h3 class="text-lg font-bold mb-2">Status Ruangan</h3>
        @foreach ($rooms as $room)
            <div class="mb-4 p-4 border rounded">
                <strong>{{ $room->name }}</strong> - {{ $room->location }}
                <ul>
                    @foreach ($room->devices as $device)
                        <li>{{ $device->type }} ({{ $device->status }})</li>
                    @endforeach
                </ul>
            </div>
        @endforeach

        <h3 class="text-lg font-bold mt-6 mb-2">Konsumsi Listrik (7 Hari Terakhir)</h3>
        <ul>
            @foreach ($consumptions as $c)
                <li>{{ $c->date }} - {{ $c->room->name ?? 'N/A' }}: {{ $c->amount }} kWh</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
