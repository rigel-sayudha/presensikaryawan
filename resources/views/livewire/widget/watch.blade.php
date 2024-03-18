<div class="card card-compact bg-base-100 border-2">
    <div class="card-body flex flex-col items-center justify-center h-full">
        <div class="text-center text-4xl font-bold" 
            x-data="{ time: '{{ $currentTime }}' }" 
            x-init="setInterval(() => {
                time = new Date().toLocaleTimeString();
            }, 1000)">
            <span x-text="time"></span>
            <div class="text-xs">{{ date('d F Y', strtotime($currentDate)) }}</div>
        </div>
    </div>
</div>
