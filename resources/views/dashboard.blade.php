@extends('layouts.app-dashboard')

@section('content')
    <x-stats-cards />

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
        <div class="lg:col-span-2">
            <x-room-grid :rooms="$rooms" />
        </div>
        <div class="space-y-6">
            <x-notification-panel :notifications="$notifications" />
            <canvas id="powerChart" class="w-full h-64 bg-white rounded shadow"></canvas>
        </div>
    </div>
@endsection
