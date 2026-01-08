<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Override Manual</h2>
    </x-slot>

    <div class="py-6 px-4">
        @foreach ($devices as $device)
            <div class="mb-4 p-4 border rounded">
                <strong>{{ $device->type }}</strong> - {{ $device->room->name }}
                <form method="POST" action="/override/{{ $device->id }}/toggle">
                    @csrf
                    <button class="mt-2 px-4 py-1 bg-blue-500 text-white rounded">
                        {{ $device->status === 'on' ? 'Matikan' : 'Nyalakan' }}
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</x-app-layout>
