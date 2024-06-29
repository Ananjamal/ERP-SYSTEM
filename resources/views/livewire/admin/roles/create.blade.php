<div>
    <div class="form-group">
        <label data-ar="الاسم" data-en="Name">Name</label>
        <input wire:model='name' type="text" class="form-control">
        @error('name')
            <span class="text-danger error">{{ $message }}</span>
        @enderror
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-ar="اغلاق"
            data-en="Close">Close</button>
        <button type="button" wire:click='Store' class="btn btn-primary" data-ar="حفظ التغييرات"
            data-en="Save Changes">Save Changes</button>
    </div>
</div>

