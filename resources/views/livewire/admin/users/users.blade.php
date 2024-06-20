<div class="content-wrapper">
    <div class="box box-primary" style=" margin: -0.5px 0px  0px  0px">
        <!-- Box Header -->
        <div class="box-header with-border" style="margin-bottom: 10px">
            <h3 class="box-title"
                style="text-align: center;margin-right: 36% ; font-weight: bold; color: #343a40;font-size: 30px">جدول
                المستخدمين</h3>
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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>الاسم</th>
                        <th>البريد الإلكتروني</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ ++$counter }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <button wire:click='UserRoles({{ $user->id }})' class="btn btn-info btn-sm"
                                    data-toggle="modal" data-target="#UserRoles">
                                    الأذونات/الصلاحيات
                                </button>
                                <button wire:click='DeleteUser({{ $user->id }})' class="btn btn-danger btn-sm"
                                    data-toggle="modal" data-target="#DeleteUser">
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
        <div wire:ignore.self class="modal fade" id="UserRoles" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"
                        style="background-color: #f8f9fa; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: #343a40; font-weight: bold;">أذونات
                            المستخدم / الصلاحيات</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="outline: none;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if ($user_id)
                            @livewire('admin.users.roles', [$user_id])
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete User Modal -->
        <div wire:ignore.self class="modal fade" id="DeleteUser" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"
                    style="background-color: #e95656; border-bottom: 1px solid #dee2e6; display: flex; justify-content: space-between; align-items: center;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #f7fbff; font-weight: bold;">تأكيد الحذف</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="outline: none;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        @if ($user_id)
                            @livewire('admin.users.delete', [$user_id])
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
