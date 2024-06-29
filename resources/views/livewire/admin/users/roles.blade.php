<div class="card-box">
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <th colspan="2" class="table-light text-center">
                        <span data-ar="معلومات المستخدم" data-en="User Information">User Information</span>
                    </th>
                </tr>
                <tr>
                    <td class="font-weight-bold"><span data-ar="الاسم:" data-en="Name:">Name:</span></td>
                    <td>{{ $name }}</td>
                </tr>
                <tr>
                    <td class="font-weight-bold"><span data-ar="البريد الإلكتروني:" data-en="Email:">Email:</span></td>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <th colspan="2" class="table-light text-center">
                        <span data-ar="أدوار المستخدم" data-en="User Roles">User Roles</span>
                    </th>
                </tr>
                <tr>
                    <td class="font-weight-bold"><span data-ar="الأدوار الحالية:" data-en="Current Roles:">Current
                            Roles:</span></td>
                    <td>
                        @if (!$UserRoles || $UserRoles->isEmpty())
                            <p class="text-danger" data-ar="لا توجد أدوار متاحة لهذا المستخدم"
                                data-en="No roles available for this user">No roles available for this user</p>
                        @else
                            <div class="btn-group" role="group" aria-label="Permissions">
                                @foreach ($UserRoles as $item)
                                    <div class="role-item">
                                        <span class="role-name">{{ $item->name }}</span>
                                        <button type="button" wire:click="removeRole('{{ $item->id }}')"
                                            class="remove-button">&times;</button>
                                    </div>
                                @endforeach


                            </div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="font-weight-bold"><span data-ar="إعطاء دور للمستخدم:"
                            data-en="Assign Role to User:">Assign Role to User:</span></td>
                    <td>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" wire:model.defer="selectedRole">
                                <option selected disabled><span data-ar="اختر الدور" data-en="Choose Role">Choose
                                </option>

                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('selectedRole')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="form-group mb-0">
                            <select class="form-select form-select-sm" wire:model.defer="selectedRole"
                                aria-label="اختر الدور">
                                <option selected disabled><span data-ar="اختر الدور" data-en="Choose Role">Choose
                                        Role</span></option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('selectedRole')
                                <span style="color: red" class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                    </td>
                </tr>
                <tr>
                    <th colspan="2" class="table-light text-center">
                        <span data-ar="صلاحيات المستخدم" data-en="User Permissions">User Permissions</span>
                    </th>
                </tr>
                <tr>
                    <td class="font-weight-bold"><span data-ar="الصلاحيات الحالية:"
                            data-en="Current Permissions:">Current Permissions:</span></td>
                    <td>
                        @if (!$UserPermissions || $UserPermissions->isEmpty())
                            <p class="text-danger" data-ar="لا توجد صلاحيات متاحة لهذا المستخدم"
                                data-en="No permissions available for this user">No permissions available for this user
                            </p>
                        @else
                            <div class="btn-group" role="group" aria-label="Permissions">
                                @foreach ($UserPermissions as $item)
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
                    <td class="font-weight-bold"><span data-ar="إعطاء صلاحية للمستخدم:"
                            data-en="Assign Permission to User:">Assign Permission to User:</span></td>
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
