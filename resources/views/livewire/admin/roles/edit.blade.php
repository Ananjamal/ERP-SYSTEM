{{--
<div class="card-box">
    <div class="table-responsive">
        <table class="table">
            <tbody>

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
</div> --}}
<div class="card-box">
    <div class="table-responsive">
        <table class="table">
            <tbody>

                <td style="font-weight: bold; border: 1px solid #dee2e6;" data-ar="الاسم:"
                data-en="Name" >Name:</td>
                <td style="border: 1px solid #dee2e6;">
                    <input wire:model="name" type="text" class="form-control">
                    @error('name')
                        <span style="color: red" class="error">{{ $message }}</span>
                    @enderror
                </td>
                <tr>
                    <td class="font-weight-bold"><span data-ar="الصلاحيات الحالية:"
                            data-en="Current Permissions:">Current Permissions:</span></td>
                    <td>
                        @if (!$rolePermissions || $rolePermissions->isEmpty())
                            <p class="text-danger" data-ar="لا توجد صلاحيات متاحة لهذا المستخدم"
                                data-en="No permissions available for this user">No permissions available for this user
                            </p>
                        @else
                            <div class="btn-group" role="group" aria-label="Permissions">
                                @foreach ($rolePermissions as $item)
                                    <div class="role-item">
                                        <span class="role-name">{{ $item->name }}</span>
                                        <button type="button" wire:click="removePermission('{{ $item->id }}')"
                                            class="remove-button">&times;</button>
                                    </div>
                                @endforeach

                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-bold"><span data-ar="إعطاء صلاحية للدور:"
                            data-en="Assign Permission to User:">Assign Permission to Role:</span></td>
                    <td>

                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1"
                                wire:model.defer="selectedPermission">
                                <option selected disabled><span data-ar="اخترالصلاحية"
                                        data-en="Choose Permission">Choose</option>
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
        <button type="button" wire:click='refreshID' class="btn outlined o-danger c-danger" data-bs-dismiss="modal"
            data-ar="اغلاق" data-en="Close">Close</button>
        <button type="button" wire:click='Update' class="btn outlined f-main" data-ar="حفظ التغييرات"
            data-en="Save changes">Save changes</button>
    </div>
</div>
