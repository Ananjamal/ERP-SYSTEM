<div class="modal-body">
    <div class="card-box">
        <div class="form-group">
            <label>الاسم</label>
            <input wire:model='name' type="text" class="form-control">
            @error('name')
                <span style="color: red" class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            <button type="button" wire:click='Store' class="btn btn-primary">حفظ التغييرات</button>
        </div>
    </div>
</div>
