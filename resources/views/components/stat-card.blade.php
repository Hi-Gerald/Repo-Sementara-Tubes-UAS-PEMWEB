@props(['title', 'value', 'change'])

<div class="bg-white p-4 rounded shadow">
    <h3 class="text-sm text-slate-600">{{ $title }}</h3>
    <p class="text-xl font-bold text-blue-600">{{ $value }}</p>
    <p class="text-sm text-slate-500">{{ $change }}</p>
</div>
