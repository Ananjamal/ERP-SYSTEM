<div class="content-wrapper">
    <div class="box box-primary" style="margin: -0.5px 0px 0px 0px;">
        <!-- Box Header -->
        <div class="box-header with-border" style="margin-bottom: 10px;">
            <h3 class="box-title" style="text-align: center; margin-right: 36%; font-weight: bold; color: #343a40; font-size: 30px;">
                جدول الصلاحيات
            </h3>
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
        <div class="box-body table-responsive no-padding" style="margin-right: 50px;">
            <!-- Table -->
            <div style="float: left; margin-left: 50px;">
                <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#AddPermission">
                    <i class="fa fa-plus"></i> إضافة صلاحية
                </button>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الصلاحية</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ ++$counter }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>
                                <button wire:click='EditPermission({{ $permission->id }})' class="btn btn-info btn-sm" data-toggle="modal" data-target="#EditPermission">
                                    تعديل
                                </button>
                                <button wire:click='DeletePermission({{ $permission->id }})' class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeletePermission">
                                    <i class="fa fa-fw fa-close"></i> حذف
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- /.box-body -->

        <!-- Add Permission Modal -->
        <div wire:ignore.self class="modal fade" id="AddPermission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #e8e8e8; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px; color: #343a40; font-weight: bold;">
                            إضافة صلاحية
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('admin.permissions.create')
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Permission Modal -->
        <div wire:ignore.self class="modal fade" id="EditPermission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #e8e8e8; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px; color: #343a40; font-weight: bold;">
                            تعديل صلاحية
                        </h5>
                        <button type="button" wire:click='refreshID' class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
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

        <!-- Delete Permission Modal -->
        <div wire:ignore.self class="modal fade" id="DeletePermission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #e95656; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #f7fbff; font-weight: bold;">تأكيد الحذف</h5>
                        <button type="button" wire:click='refreshID' class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
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

        <style>
            .table-hover th, .table-hover td {
                text-align: center;
            }
        </style>
    </div>
</div>
