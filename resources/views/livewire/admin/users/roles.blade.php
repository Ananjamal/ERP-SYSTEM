<div class="card-box">
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <th colspan="2" style="background-color: #f8f9fa; border: 1px solid #dee2e6; text-align: center;">
                        معلومات المستخدم</th>
                </tr>
                <tr>
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">الاسم:</td>
                    <td style="border: 1px solid #dee2e6;">{{ $name }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">البريد الإلكتروني:</td>
                    <td style="border: 1px solid #dee2e6;">{{ $email }}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">الأدوار الحالية:</td>
                    <td style="border: 1px solid #dee2e6;">
                        @if (!$UserRoles || $UserRoles->isEmpty())
                            <p class="text-danger">لا توجد أدوار متاحة لهذا المستخدم</p>
                        @else
                            <div class="btn-group" role="group" aria-label="Permissions">
                                @foreach ($UserRoles as $item)
                                    <div class="position-relative d-inline-block mr-2" style="margin-right: 8px;">
                                        <span type="button" class="btn btn-outline-primary btn-sm"
                                            style="padding-right: 24px; position: relative;">
                                            {{ $item->name }}
                                            <button type="button" wire:click="removeRole('{{ $item->id }}')"
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
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">إعطاء دور للمستخدم:</td>
                    <td style="border: 1px solid #dee2e6;">
                        <div class="form-group mb-0">
                            <select id="permissionsSelect" class="form-select form-select-sm"
                                wire:model.defer="selectedRole" aria-label="اختر الدور">
                                <option selected disabled>اختر الدور</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('selectedRole')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">الصلاحيات الحالية:</td>
                    <td style="border: 1px solid #dee2e6;">
                        @if (!$UserPermissions || $UserPermissions->isEmpty())
                            <p class="text-danger">لا توجد صلاحيات متاحة لهذا المستخدم</p>
                        @else
                            <div class="btn-group" role="group" aria-label="Permissions">
                                @foreach ($UserPermissions as $item)
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
                    <td style="font-weight: bold; border: 1px solid #dee2e6;">إعطاء صلاحية للمستخدم:</td>
                    <td style="border: 1px solid #dee2e6;">
                        <div class="form-group mb-0">
                            <select id="permissionsSelect" class="form-select form-select-sm"
                                wire:model.defer="selectedPermission" aria-label="اختر الدور">
                                <option selected disabled>اختر الصلاحية</option>
                                @foreach ($permissions as $permissions)
                                    <option value="{{ $permissions->id }}">{{ $permissions->name }}</option>
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
