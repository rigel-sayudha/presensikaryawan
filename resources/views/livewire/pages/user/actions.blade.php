<div>
    <input type="checkbox" id="modalUser" class="modal-toggle" wire:model="show" />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-2xl" wire:submit="simpan">
            <h3 class="font-bold text-lg">Data user</h3>
            <div class="py-4 space-y-1">
                <div class="form-control grid grid-cols-3">
                    <label for="" class="label">
                        <span class="label-text">Nama lengkap</span>
                    </label>
                    <input type="text" wire:model="form.name" placeholder="name"
                        class="col-span-2 input input-bordered flex gap-2 items-center @error('form.name') input-error @enderror">
                </div>
                <div class="form-control grid grid-cols-3">
                    <label for="" class="label">
                        <span class="label-text">Email address</span>
                    </label>
                    <input type="email" wire:model="form.email" placeholder="email"
                        class="col-span-2 input input-bordered flex gap-2 items-center @error('form.email') input-error @enderror">
                </div>
                @if ($mode == 'create')
                    <div class="form-control grid grid-cols-3">
                        <label for="" class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" wire:model="form.password" placeholder="password"
                            class="col-span-2 input input-bordered flex gap-2 items-center @error('form.password') input-error @enderror">
                    </div>
                @endif
                <div class="form-control grid grid-cols-3">
                    <label for="" class="label">
                        <span class="label-text">Nama sekolah</span>
                    </label>
                    <input type="text" wire:model="form.school" placeholder="school"
                        class="col-span-2 input input-bordered flex gap-2 items-center @error('form.school') input-error @enderror">
                </div>
                <div class="form-control grid grid-cols-3">
                    <label for="" class="label">
                        <span class="label-text">Nomor induk siswa</span>
                    </label>
                    <input type="text" wire:model="form.nis" placeholder="nis"
                        class="col-span-2 input input-bordered flex gap-2 items-center @error('form.nis') input-error @enderror">
                </div>
                <div class="form-control grid grid-cols-3">
                    <label for="" class="label">
                        <span class="label-text">Nomor telepon</span>
                    </label>
                    <input type="text" wire:model="form.phone" placeholder="phone"
                        class="col-span-2 input input-bordered flex gap-2 items-center @error('form.phone') input-error @enderror">
                </div>
                <div class="form-control grid grid-cols-3">
                    <label for="" class="label">
                        <span class="label-text">Pilih role</span>
                    </label>
                    <select wire:model="form.role"
                        class="col-span-2 select select-bordered flex gap-2 items-center @error('form.role') select-error @enderror">
                        <option value="">Pilih role user</option>

                        @foreach ($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-action justify-between">
                <label for="modalUser" class="btn">Close!</label>
                <button class="btn btn-primary">
                    <x-tabler-check class="icon-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
