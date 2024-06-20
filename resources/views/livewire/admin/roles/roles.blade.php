{{-- <div class="main-panel">
    <div class="row mt-4 justify-content-center">
        <div class="col-sm-8 col-6 text-center">
            <h2>Roles Table</h2>
        </div>
        <div class="col-sm-4 col-6 text-center m-b-30">
            <button type="button" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#AddRole">
                <i class="fa fa-plus"></i> Add Role
            </button>
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ ++$counter }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <button wire:click='EditRole({{ $role->id }})' class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#EditRole">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button wire:click='DeleteRole({{ $role->id }})' class="btn btn-danger btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#DeleteRole">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Role Modal -->
    <div wire:ignore.self class="modal fade" id="AddRole" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('admin.roles.create')
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Role Modal -->
    <div wire:ignore.self class="modal fade" id="EditRole" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                    <button type="button"  wire:click='refreshID' class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($role_id)
                        @livewire('admin.roles.edit', [$role_id])
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Role Modal -->
    <div wire:ignore.self class="modal fade" id="DeleteRole" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                    <button type="button" wire:click='refreshID' class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($role_id)
                        @livewire('admin.roles.delete', [$role_id])
                    @endif
                </div>

            </div>
        </div>
    </div>

</div> --}}
<div class="content-wrapper">
    <div class="box box-primary" style=" margin: -0.5px 0px  0px  0px">
        <!-- Box Header -->
        <div class="box-header with-border" style="margin-bottom: 10px">
            <h3 class="box-title"
                style="text-align: center;margin-right: 36% ; font-weight: bold; color: #343a40;font-size: 30px">جدول
                الاذونات</h3>
            <div class="box-tools pull-right">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="البحث">
                    <div class="input-group-btn">
                        <button class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>

            </div>
        </div><!-- /.box-header -->

        <!-- Box Body -->
        <div class="box-body table-responsive no-padding" style="margin-right: 50px">
            <!-- Table -->
            <div class="  " style="float: left; margin-left: 50px">
                <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#AddRole">
                    <i class="fa fa-plus"></i> اضافة اذن
                </button>
            </div>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ ++$counter }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <button wire:click='EditRole({{ $role->id }})' class="btn btn-info btn-sm"
                                    data-toggle="modal" data-target="#EditRole">
                                    تعديل
                                </button>
                                <button wire:click='DeleteRole({{ $role->id }})' class="btn btn-danger btn-sm"
                                    data-toggle="modal" data-target="#DeleteRole">
                                    <i class="fa fa-fw fa-close"></i>
                                    حذف
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div><!-- /.box-body -->
        <!-- UserRoles Modal -->
        <div wire:ignore.self class="modal fade" id="AddRole" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"
                        style="background-color: #e8e8e8; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="modal-title" id="exampleModalLabel"
                            style="font-size: 20px;color: #343a40; font-weight: bold;">
                            اضافة دور
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="outline: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('admin.roles.create')
                    </div>
                </div>
            </div>
        </div>
        <div wire:ignore.self class="modal fade" id="EditRole" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"
                        style="background-color: #e8e8e8; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="modal-title" id="exampleModalLabel"
                            style="font-size: 20px; color: #343a40; font-weight: bold;">
                            تعديل دور
                        </h5>
                        <button type="button" wire:click='refreshID' class="close" data-dismiss="modal"
                            aria-label="Close" style="outline: none;">
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

        <!-- Delete User Modal -->
        <div wire:ignore.self class="modal fade" id="DeleteRole" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"
                        style="background-color: #e95656; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #f7fbff; font-weight: bold;">تأكيد
                            الحذف</h5>
                        <button type="button" wire:click='refreshID' class="close" data-dismiss="modal"
                            aria-label="Close" style="outline: none;">
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

        <style>
            .table-hover th,
            .table-hover td {
                text-align: center;
            }
        </style>


    </div>
</div>
