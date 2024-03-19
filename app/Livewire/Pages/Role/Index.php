<?php

namespace App\Livewire\Pages\Role;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public $cari = "";
    public $no = 1;

    protected $listeners = ['reload' => '$refresh'];

    public function applyPermission(Permission $permission, $role){
        $permission->assignRole($role);
    }

    public function deletePermission(Permission $permission){
        $permission->delete();
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
