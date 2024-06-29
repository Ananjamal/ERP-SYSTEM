<main class="bmd-layout-content">
    <div class="container-fluid ">

        <div class="card-body">
            <h5 class="card-title" data-ar="جدول الصلاحيات " data-en="Roles Table">Permissions Table</h5>

            <button class="btn btn-primary" style="float: right" data-bs-toggle="modal" data-bs-target="#AddPermission"
                data-ar="إضافة صلاحية" data-en="Add Role">
                <i class="fa-solid fa-plus"></i> Add Permission
            </button>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center" data-ar="الاسم" data-en="Name">Name</th>
                        <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td class="text-center" scope="row">{{ ++$counter }}</td>
                            <td class="text-center">{{ $permission->name }}</td>
                            <td class="text-center">
                                <button wire:click='EditPermission({{ $permission->id }})' class="btn btn-info btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#EditPermission" data-ar="تعديل"
                                    data-en="ُEdit">
                                    Edit
                                </button>
                                <button wire:click='DeletePermission({{ $permission->id }})'
                                    class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#DeletePermission" data-ar="حذف" data-en="Delete">
                                    <i class="fa fa-fw fa-close"></i>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="AddPermission"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="اضافة صلاحية" data-en="Add Permission">
                        Add Permission</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('admin.permissions.create')
                </div>

            </div>
        </div>
    </div>
    <!--  -->
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="EditPermission"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="تعديل صلاحية"
                        data-en="Roles And Permissions">
                        Edit Permission</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($permission_id)
                        @livewire('admin.permissions.edit', [$permission_id])
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!--  -->
    <!--Delete Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="DeletePermission"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"
                    style="background-color: #e95656; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #f7fbff; font-weight: bold;"
                        data-ar="تأكيد الحذف" data-en="Confirm Deletion">Confirm Deletion</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close" style="outline: none;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($permission_id)
                        @livewire('admin.permissions.delete', [$permission_id])
                    @endif
                </div>
            </div>
        </div>
    </div>

    </div>
</main>
