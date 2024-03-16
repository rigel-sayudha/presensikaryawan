<div>
    <input type="checkbox" class="modal-toggle" @checked($attendance ? true : false) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit="simpan">
            <h3 class="font-bold text-lg">Detail Attendance</h3>
            @if ($attendance)
                <div class="py-4 grid grid-cols-2 gap-2">
                    <label class="form-control col-span-2">
                        <div class="label">
                            <span class="label-text">Pilih user</span>
                        </div>
                        <select class="select select-bordered @error('form.user_id') select-error @enderror"
                            wire:model="form.user_id">
                            <option value="">Pilih user</option>
                            @foreach ($users as $userId => $userName)
                                <option value="{{ $userId }}">{{ $userName }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="form-control col-span-2">
                        <div class="label">
                            <span class="label-text">Tanggal attendance</span>
                        </div>
                        <input type="date" placeholder="Type here"
                            class="input input-bordered @error('form.date') select-error @enderror"
                            wire:model="form.date" />
                    </label>
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text">Jam masuk</span>
                        </div>
                        <input type="time" placeholder="Type here"
                            class="input input-bordered @error('form.in') select-error @enderror"
                            wire:model="form.in" />
                    </label>
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text">Jam keluar</span>
                        </div>
                        <input type="time" placeholder="Type here"
                            class="input input-bordered @error('form.out') select-error @enderror"
                            wire:model="form.out" />
                    </label>
                    <label class="form-control col-span-2">
                        <div class="label">
                            <span class="label-text">Catatan absensi</span>
                        </div>
                        <textarea rows="3" class="textarea textarea-bordered @error('form.note') select-error @enderror"
                            wire:model="form.note" placeholder="Catatan absensi"></textarea>
                    </label>
                </div>
            @endif
            <div class="modal-action justify-between">
                <button wire:click="resetAttendance" type="button" class="btn">Close!</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="icon-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
