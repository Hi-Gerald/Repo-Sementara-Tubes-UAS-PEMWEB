<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Dashboard Monitoring</h2>
    </x-slot>

    <div class="py-6 px-4">
        <!-- Override Message -->
        @if(isset($overrideMessage))
            <div class="alert alert-info mb-4">
                {{ $overrideMessage }}
            </div>
        @endif

        <!-- Room Status -->
        <h3 class="text-lg font-bold mb-2">Status Ruangan</h3>
        @foreach ($rooms as $room)
            <div class="mb-4 p-4 border rounded">
                <strong>{{ $room->name }}</strong> - {{ $room->location }}
                <ul>
                    @foreach ($room->devices as $device)
                    <!-- Tampilan Interaksi Override Perangkat -->
                     <li>
                        {{ $device->type}} - 
                        <span id="status-{{ $loop->parent->index }}-{{ $loop->index }}" class="font-semibold">
                            {{ $device->status }}
                        </span>
                        <button 
                            onclick="toggleDevice('{{ $loop->parent->index }}', '{{ $loop->index }}')" 
                            class="ml-2 px-2 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
                            Change Device Status
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>
        @endforeach

        <h3 class="text-lg font-bold mt-6 mb-2">Konsumsi Listrik (7 Hari Terakhir)</h3>
        <script>
            const ctx = document.getElementById('consumptionChart');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($consumptions->pluck('date')) !!},
                    datasets: [{
                        label: 'Konsumsi Listrik (Kwh)',
                        data: {!! json_encode($consumptions->pluck('amount')) !!},
                        backgroundColor: 'rgba(54, 162, 235, 0.5)'
                    }]
                }
            });
        </script>
        <canvas id="consumptionChart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <ul>
            @foreach ($consumptions as $c)
                <li>{{ $c->date }} - {{ $c->room->name ?? 'N/A' }}: {{ $c->amount }} kWh</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
<script>
    function toggleDevice(roomIndex, deviceIndex) {
        const statusEl = document.getElementById(`status-${roomIndex}-${deviceIndex}`);
        const currentStatus = statusEl.innerText.trim().toLowerCase();
        const newStatus = currentStatus === 'on' ? 'off' : 'on';
        statusEl.innerText = newStatus;

        // Simulasi notifikasi
        alert(`Status perangkat berhasil diubah menjadi ${newStatus.toUpperCase()}`);
    }
</script>
