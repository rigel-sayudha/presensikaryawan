<?php
namespace App\Livewire\Pages\Attendance;

use Livewire\Component;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class Report extends Component
{
    public $selectedMonth;
    public $selectedYear;
    public $attendances = [];
    public $totalHours = 0;
    public $totalLate = 0;
    public $totalOvertime = 0;
    public $totalLatePenalty = 0;
    public $totalOvertimeBonus = 0;

    public function mount()
    {
        $this->attendances = collect();
    }

    public function render()
    {
        return view('livewire.pages.attendance.report');
    }

    public function generateReport()
    {
        $this->resetTotals();
        
        if ($this->selectedMonth && $this->selectedYear) {
            $this->attendances = Attendance::where('user_id', Auth::id())
                ->whereMonth('date', $this->selectedMonth)
                ->whereYear('date', $this->selectedYear)
                ->get();

            foreach ($this->attendances as $attendance) {
                $this->totalHours += $attendance->getTotalHours();
                $this->totalLate += $attendance->calculateLate();
                $this->totalOvertime += $attendance->calculateOvertime();
                $this->totalLatePenalty += $attendance->calculateLatePenalty();
                $this->totalOvertimeBonus += $attendance->calculateOvertimeBonus();
            }
        } else {
            $this->attendances = collect(); 
        }
    }

    private function resetTotals()
    {
        $this->totalHours = 0;
        $this->totalLate = 0;
        $this->totalOvertime = 0;
        $this->totalLatePenalty = 0;
        $this->totalOvertimeBonus = 0;
    }
}


?>