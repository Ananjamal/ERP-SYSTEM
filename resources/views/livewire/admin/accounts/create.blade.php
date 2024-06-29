<div>
    <div class="mb-3">
        <label for="name" class="form-label" data-ar="اسم الحساب" data-en="Account Name">Account Name</label>
        <input type="text" id="name" class="form-control" wire:model="account_name">
        @error('account_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="mb-3">
        <label for="userType" class="form-label" data-ar="نوع الحساب" data-en="Account Type">Account Type</label>
        <select id="userType" class="form-select" wire:model="account_type">
            <option value="" selected data-ar="اختر نوع الحساب" data-en="Select Account Type">Select Account Type
            </option>
            <option value="Asset" data-ar="الأصول" data-en="Asset">Asset</option>
            <option value="Liability" data-ar="الالتزامات" data-en="Liability">Liability</option>
            <option value="Equity" data-ar="حقوق الملكية" data-en="Equity">Equity</option>
            <option value="Revenue" data-ar="الإيرادات" data-en="Revenue">Revenue </option>
            <option value="Expense" data-ar="المصروفات" data-en="Expense">Expense </option>

        </select>
        @error('account_type')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button class="btn btn-primary" wire:click="save" data-ar="حفظ" data-en="Save">Save</button>
</div>
