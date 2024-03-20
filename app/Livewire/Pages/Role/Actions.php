<?php

namespace App\Livewire\Pages\Role;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Actions extends Component
{
    use LivewireAlert;
    public $show = false;
    public $model = "permission";

    public $name = "";

    public ?Permission $permission;


    #[On('addPermission')]
    public function addPermission(){
        $this->show = true;
    }

    #[On('editPermission')]
    public function editPermission(Permission $permission){
        $this->permission = $permission;
        $this->show = true;
        $this->model = "permission";
        $this->name = $permission->name;
    }

    public function simpan(){
        $this->validate([
            'name' => 'required',
            'model' => 'required',
        ]);

        if ($this->model == "permission") {
            if (isset($this->permission)) {
                $this->permission->name = $this->name;
                $this->permission->save();
            }
            else{
                Permission::create([
                'name' => $this->name,
            ]);
            }
        }
        elseif ($this->model == "role") {
            Role::create([
                'name' => $this->name,
            ]);
        }

        $this->reset();
        $this->alert('success', 'Role dan permission berhasil diperbarui');
        $this->dispatch('reload');
    }


    public function render()
    {
        return view('livewire.pages.role.actions');
    }
}
