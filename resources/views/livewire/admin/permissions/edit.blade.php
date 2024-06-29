<div class="card-box">
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <td style="font-weight: bold; border: 1px solid #dee2e6;" data-ar="الاسم:" data-en="Name">Name:</td>
                <td style="border: 1px solid #dee2e6;">
                    <input wire:model="name" type="text" class="form-control">
                    @error('name')
                        <span style="color: red" class="error">{{ $message }}</span>
                    @enderror
                </td>




                <tr>
                    <td class="font-weight-bold"><span data-ar="الادوار الحالية:" data-en="Current Roles:">Current
                            Roles:</span></td>
                    <td>
                        @if (!$permissionRoles || $permissionRoles->isEmpty())
                            <p class="text-danger" data-ar="لا توجد ادوار متاحة لهذه الصلاحية"
                                data-en="No Roles available for this user">No Roles available for this user
                            </p>
                        @else
                            <div class="btn-group" role="group" aria-label="Permissions">
                                @foreach ($permissionRoles as $item)
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
                    <td class="font-weight-bold"><span data-ar="إعطاء دور للصلاحية:"
                            data-en="Assign Permission to User:">Assign Role to Permission:</span></td>
                    <td>

                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" wire:model.defer="selectedRole">
                                <option selected disabled><span data-ar="اخترالدور" data-en="Choose Role">Choose
                                </option>

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
