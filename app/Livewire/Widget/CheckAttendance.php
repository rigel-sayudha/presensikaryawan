<?php

namespace App\Livewire\Widget;

use App\Livewire\Forms\AttendanceForm;
use App\Models\Attendance;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CheckAttendance extends Component
{
    use LivewireAlert;
    public $show = false;
    public $tanggal;
    public AttendanceForm $form;
    public $latitude;
    public $longitude;
    

    protected $listeners = ['reload' => '$refresh'];

    public function resetAbsensi(){
        $this->show = false;
    }

    public function mount(){
        $this->tanggal = date('Y-m-d');
    }

    public function checkIn()
    {
        $this->latitude = $this->latitude ?? request()->input('latitude');
        $this->longitude = $this->longitude ?? request()->input('longitude');

        if (!$this->latitude || !$this->longitude) {
            ('Latitude: ' . $this->latitude);
            ('Longitude: ' . $this->longitude);
            $this->alert('error', 'Gagal mendapatkan lokasi. Pastikan GPS Anda aktif.');
            return;
        }
          
        $officeLocation = ['latitude' => -7.766549, 'longitude' => 110.419538]; 
    
        $distance = $this->calculateDistance(
            $this->latitude,
            $this->longitude,
            $officeLocation['latitude'],
            $officeLocation['longitude']
        );
       
        $status = $distance <= 300 ? 'dalam kantor' : 'diluar kantor';
    
        $attendance = new Attendance();
        $attendance->user_id = auth()->id();
        $attendance->date = now()->format('Y-m-d');
        $attendance->in = now()->format('H:i:s');
        $attendance->latitude = $this->latitude;
        $attendance->longitude = $this->longitude;
        $attendance->status = $status;
        
        $attendance->save();

        $this->alert('success', 'Check-in berhasil.');
    }

    private function calculateDistance($lat1, $lon1, $lat2, $lon2) {
        $earthRadius = 6371000; 

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;

        return $distance;
    }


    public function checkOut(){
        $this->validate([
            'form.note' => 'required',
        ]);

        $this->form->out = now()->format('H:i:s');
        $this->form->store();

        $this->dispatch('reload');
        $this->show = false;

        $this->alert('success', 'Checkout absensi berhasil');
    }

    public function render()
    {
        $attendance = Attendance::where('date', $this->tanggal)->where('user_id', auth()->id())->first() ?? null;

        if ($attendance) {
            $this->form->setAttendance($attendance);
        }

        return view('livewire.widget.check-attendance', [
            'attendance' => $attendance
        ]);
    }
}
