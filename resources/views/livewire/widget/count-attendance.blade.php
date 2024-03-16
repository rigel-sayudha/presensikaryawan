<div class="card card-compact bg-base-100 border-2 divide-y-2">
    <div class="card-body flex-col justify-between">
        <div class="text-4xl font-semibold">{{ Number::percentage($percentage) }}</div>
        <div>{{ $attendanceCount }} absensi dari {{ $userCount }} orang</div>
    </div>
    <div class="card-body">
        <div class="card-actions">
            <progress class="progress progress-primary w-full" value="{{ $attendanceCount }}"
                max="{{ $userCount }}"></progress>
        </div>
    </div>
</div>
