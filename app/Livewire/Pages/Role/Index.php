<?php

namespace App\Livewire\Pages\Role;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use LivewireAlert;
    public $cari = "";
    public $no = 1;

    protected $listeners = ['reload' => '$refresh'];

    public function applyPermission(Permission $permission, $role){
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
        }
        else{
            $permission->assignRole($role);
        }

        $this->alert('success', 'Berhasil mengubah status permission');
    }

    public function deletePermission(Permission $permission){
        $permission->delete();
        $this->alert('success', 'Permission berhasil dihapus');
    }

    public function render()
    {
        return view('livewire.pages.role.index', [
            'roles' => Role::whereNot('name', 'superadmin')->get(),
            'permissions' => Permission::orderBy('name')->when($this->cari, function($q){
                $q->where('name', 'like', "%{$this->cari}%");
            })->get(),
        ]);
    }
}
