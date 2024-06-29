<main class="bmd-layout-content">
    <div class="container-fluid ">

        <div class="card-body">
            <h5 class="card-title" data-ar="جدول الادوار " data-en="Roles Table">Roles Table</h5>

            <button class="btn btn-primary" style="float: right" data-bs-toggle="modal" data-bs-target="#AddRole"
                data-ar="إضافة دور" data-en="Add Role">
                <i class="fa-solid fa-plus"></i> Add Role
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
                    @foreach ($roles as $role)
                        <tr>
                            <td class="text-center" scope="row">{{ ++$counter }}</td>
                            <td class="text-center">{{ $role->name }}</td>
                            <td class="text-center">
                                <button wire:click='EditRole({{ $role->id }})' class="btn btn-info btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#EditRole" data-ar="تعديل" data-en="Roles">
                                    Edit
                                </button>
                                <button wire:click='DeleteRole({{ $role->id }})' class="btn btn-danger btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#DeleteRole" data-ar="حذف" data-en="Delete">
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
    <!--Add Role Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="AddRole"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="اضافة اذن" data-en="Add Role">
                        Add Role</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('admin.roles.create')
                </div>

            </div>
        </div>
    </div>
    <!--  -->
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="EditRole"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="تعديل اذن" data-en="Edit Role">
                        Edit Role</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($role_id)
                        @livewire('admin.roles.edit', [$role_id])
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade" id="DeleteRole" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #e95656;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #f7fbff;">Confirm Deletion</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($role_id)
                        @livewire('admin.roles.delete', [$role_id])
                    @endif
                </div>
            </div>
        </div>
    </div>

    </div>
</main>
