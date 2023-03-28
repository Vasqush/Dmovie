@if(session()->has('success'))
    <div x-data="{show: true}"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-yellow-500 text-gray-900 py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
