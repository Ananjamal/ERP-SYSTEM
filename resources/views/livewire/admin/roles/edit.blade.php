{{-- <div>
    <div class="card-box">
        <div class="form-group">
            <label>Name:</label>
            <input wire:model="name" type="text" class="form-control">
            @error('name')
                <span style="color: red" class="error">{{ $message }}</span>
            @enderror
        </div>
        <hr>
        <div class="form-group">
            <label class="form-label">Current Permissions:</label><br>
            @if (!$rolePermissions || $rolePermissions->isEmpty())
                <p class="text-danger">No permissions available</p>
            @else
                <div class="btn-group" role="group" aria-label="Permissions">
                    @foreach ($rolePermissions as $item)
                        <div class="position-relative d-inline-block mr-2">
                            <span type="button" class="btn btn-outline-primary btn-sm">{{ $item->name }}</span>
                            <button type="button" wire:click="removePermission('{{ $item->id }}')"
                                class="position-absolute top-0 start-100 translate-middle btn btn-danger btn-sm p-0 rounded-circle"
                                style="width: 20px; height: 20px; font-size: 10px;">
                                &times;
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
        <hr>
        <div class="form-group">
            <label for="permissionsSelect" class="form-label">Give Permission To Role:</label>
            <div class="input-group mb-3">
                <select id="permissionsSelect" class="form-select form-select-sm" wire:model="selectedPermission"
                    aria-label="Small select example">
                    <option selected disabled>Open this select menu</option>
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('selectedPermission')
                <span style="color: red" class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="modal-footer">
            <button type="button" wire:click="refreshID" class="btn btn-secondary"
                data-bs-dismiss="modal">Close</button>
            <button type="button" wire:click="Update" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div> --}}
<div class="card-box">
    <div class="table-responsive">
        <table class="table">
            <tbody>
                {{-- <tr>
                    <th colspan="2" style="background-color: #f8f9fa; border: 1px solid #dee2e6; text-align: center;">
                        معلومات الدور
                    </th>
                </tr> --}}
                <tr>
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">الاسم:</td>
                    <td style="border: 1px solid #dee2e6;">
                        <input wire:model="name" type="text" class="form-control">
                        @error('name')
                            <span style="color: red" class="error">{{ $message }}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid #dee2e6;">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">الصلاحيات الحالية:</td>
                    <td style="border: 1px solid #dee2e6;">
                        @if (!$rolePermissions || $rolePermissions->isEmpty())
                            <p class="text-danger">لا توجد صلاحيات متاحة</p>
                        @else
                            <div class="btn-group" role="group" aria-label="Permissions">
                                @foreach ($rolePermissions as $item)
                                    <div class="position-relative d-inline-block mr-2" style="margin-right: 8px;">
                                        <span type="button" class="btn btn-outline-primary btn-sm"
                                            style="padding-right: 24px; position: relative;">
                                            {{ $item->name }}
                                            <button type="button" wire:click="removePermission('{{ $item->id }}')"
                                                class="btn btn-danger btn-sm rounded-circle"
                                                style="
                                                position: absolute;
                                                top: 50%;
                                                right: 0;
                                                transform: translate(50%, -50%);
                                                width: 20px;
                                                height: 20px;
                                                font-size: 12px;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                border: none;
                                                background-color: #dc3545;
                                                color: white;
                                                cursor: pointer;
                                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                            ">
                                                &times;
                                            </button>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="border: 1px solid #dee2e6;">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">إعطاء صلاحية للدور:</td>
                    <td style="border: 1px solid #dee2e6;">
                        <div class="form-group mb-0">
                            <select id="permissionsSelect" class="form-select form-select-sm" wire:model="selectedPermission"
                                aria-label="اختر الصلاحية">
                                <option selected disabled>اختر من القائمة</option>
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                            @error('selectedPermission')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" wire:click="refreshID" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
        <button type="button" wire:click="Update" class="btn btn-primary">حفظ التغييرات</button>
    </div>
</div>
