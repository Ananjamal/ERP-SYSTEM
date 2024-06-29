<div>
    <p data-ar="هل أنت متأكد أنك تريد حذف هذا المستخدم؟ لا يمكن التراجع عن هذا الإجراء."
        data-en="Are you sure you want to delete  this Permission? This action cannot be undone.">
        Are you sure you want to delete this <b> Permission </b>? This action cannot be undone. </p>

    <div class="modal-footer">
        <button type="button" wire:click='refreshID' class="btn btn-secondary" data-bs-dismiss="modal" data-ar="إلغاء"
            data-en="Cancel">Cancel</button>
        <button type="button" class="btn btn-danger" wire:click='deletePermission' data-ar="حذف"
            data-en="Delete">Delete</button>
    </div>

</div>
