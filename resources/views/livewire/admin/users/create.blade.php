<div>
    <div class="mb-3">
        <label for="name" class="form-label" data-ar="الاسم" data-en="Name">Name</label>
        <input type="text" id="name" class="form-control" wire:model="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label" data-ar="البريد الالكتروني" data-en="Email">Email</label>
        <input type="email" id="email" class="form-control" wire:model="email">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label" data-ar="كلمة المرور" data-en="Password">Password</label>
        <input type="password" id="password" class="form-control" wire:model="password">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="userType" class="form-label" data-ar="نوع المستخدم" data-en="User Type">User Type</label>
        <select id="userType" class="form-select" wire:model="userType">
            <option value="" selected data-ar="اختر نوع المستخدم" data-en="Select User Type">Select User Type</option>
            <option value="admin" data-ar="مسؤول" data-en="Admin">Admin</option>
            <option value="user" data-ar="مستخدم" data-en="User">User</option>
            <option value="employee" data-ar="موظف" data-en="Employee">Employee</option>
            <option value="supplier" data-ar="مورد" data-en="Supplier">Supplier</option>
        </select>
          @error('userType')
                <span class="text-danger">{{ $message }}</span>
            @enderror
    </div>

    @if ($userType == 'employee')
        <div class="mb-3">
            <label for="phone" class="form-label" data-ar="رقم الهاتف" data-en="Phone">Phone</label>
            <input type="text" id="phone" class="form-control" wire:model="phone">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label" data-ar="العنوان" data-en="Address">Address</label>
            <input type="text" id="address" class="form-control" wire:model="address">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="position" class="form-label" data-ar="المنصب" data-en="Position">Position</label>
            <input type="text" id="position" class="form-control" wire:model="position">
            @error('position')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label" data-ar="الراتب" data-en="Salary">Salary</label>
            <input type="number" id="salary" class="form-control" wire:model="salary">
            @error('salary')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="hire_date" class="form-label" data-ar="تاريخ التعيين" data-en="Hire Date">Hire Date</label>
            <input type="date" id="hire_date" class="form-control" wire:model="hire_date">
            @error('hire_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    @elseif ($userType == 'supplier')
        <div class="mb-3">
            <label for="phone" class="form-label" data-ar="رقم الهاتف" data-en="Phone">Phone</label>
            <input type="text" id="phone" class="form-control" wire:model="phone">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label" data-ar="العنوان" data-en="Address">Address</label>
            <input type="text" id="address" class="form-control" wire:model="address">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    @endif

    <button class="btn btn-primary" wire:click="save" data-ar="حفظ" data-en="Save">Save</button>
</div>
