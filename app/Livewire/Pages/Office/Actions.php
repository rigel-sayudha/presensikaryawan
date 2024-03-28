<?php

namespace App\Livewire\Pages\Office;

use App\Livewire\Forms\OfficeMapForm;
use App\Models\OfficeMap;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actions extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $show = false;
    public $newImage;

    public OfficeMapForm $form;

    #[On('createOfficeMap')]
    public function createOfficeMap(){
        $this->show = true;
    }

    #[On('editOfficeMap')]
    public function editOfficeMap(OfficeMap $officeMap){
        $this->show = true;
        $this->form->setOfficeMap($officeMap);
    }

    #[On('deleteOfficeMap')]
    public function deleteOfficeMap(OfficeMap $officeMap){
        $officeMap->delete();
        $this->alert('success', 'Data ruangan berhasil dihapus');
        $this->dispatch('reload');
    }

    public function simpan(){
        if ($this->newImage) {
            $filename = $this->newImage->hashName('office');
            $this->newImage->store('office');
            $this->form->photo = $filename;
        }

        if (isset($this->form->officeMap)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->show = false;
        $this->alert('success', 'Data ruangan berhasil diperbarui');
        $this->dispatch('reload');
    }

    public function resetAction(){
        $this->form->reset();
        $this->show = false;
    }


    public function render()
    {
        return view('livewire.pages.office.actions');
    }
}
