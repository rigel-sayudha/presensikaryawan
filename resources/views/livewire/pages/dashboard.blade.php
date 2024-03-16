<div class="space-y-6">

    <div class="grid grid-cols-3 gap-6">
        @livewire('widget.count-attendance')
        @livewire('widget.profile')

        <div class="grid place-content-center skeleton">
            Widget tanggal
        </div>
    </div>

    @livewire('pages.attendance.index', [
        'withActions' => false,
        'date' => date('Y-m-d'),
    ])

    @livewire('pages.attendance.show')
</div>
