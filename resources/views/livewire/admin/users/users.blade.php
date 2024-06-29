{{-- <div class="content-wrapper">
    <div class="box box-primary" style=" margin: -0.5px 0px  0px  0px">
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
        </div>

        <div class="box-body table-responsive no-padding" style="margin-right: 50px">
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
        </div>
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


    </div> --}}
{{-- <main class="bmd-layout-content">
    <div class="container-fluid ">

        <div class="card-body">
            <h5 class="card-title" data-ar="جدول المستخدمين " data-en="Roles Table">Users Table</h5>

            <button class="btn btn-primary" style="float: right" data-bs-toggle="modal" data-bs-target="#AddUser"
                data-ar="إضافة مستخدم" data-en="Add User">
                <i class="fa-solid fa-plus"></i> Add User
            </button>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center" data-ar="الاسم" data-en="Name">Name</th>
                        <th scope="col" class="text-center"data-ar="البريد الالكتروني " data-en="Email">Email</th>
                        <th scope="col" class="text-center"data-ar="اجراءات" data-en="Actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center" scope="row">{{ ++$counter }}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">
                                <button wire:click='UserRoles({{ $user->id }})' class="btn btn-info btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#UserRoles" data-ar="الاذونات/الصلاحيات"
                                    data-en="Roles/Permissions">
                                    Roles/Permissions
                                </button>
                                <button wire:click='DeleteUser({{ $user->id }})' class="btn btn-danger btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#DeleteUser" data-ar="حذف" data-en="Delete">
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
    <!--Add User Modal -->

    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="AddUser"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="اضافة مستخدم" data-en="Add User">
                        Add User</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('admin.users.create')
                </div>

            </div>
        </div>
    </div>
    <!--Roles Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="UserRoles"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="الاذونات والصلاحيات"
                        data-en="Roles And Permissions">Roles And Permissions</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
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
    <!--  -->
    <!--Delete User Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="DeleteUser"
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
                    @if ($user_id)
                        @livewire('admin.users.delete', [$user_id])
                    @endif
                </div>
            </div>
        </div>
    </div>

    </div>
</main> --}}
<main class="bmd-layout-content">
    <div class="container-fluid">
        <div class="card-body">
            <button class="btn btn-primary" style="float: right" data-bs-toggle="modal" data-bs-target="#AddAccount"
                data-ar="إضافة مستخدم" data-en="Add Account">
                <i class="fa-solid fa-plus"></i> Add User
            </button>
        </div>

        <!-- Admin Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar="جدول حسابات المسؤول" data-en="Admin Accounts Table">Admin Accounts Table
            </h5>

            @if ($admins->isEmpty())
                <p class="text-center">No Admin accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="الاسم" data-en="Name">Name</th>
                            <th scope="col" class="text-center" data-ar="البريد الالكتروني" data-en="Email">Email
                            </th>
                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td class="text-center" scope="row">{{ $admin->id }}</td>
                                <td class="text-center">{{ $admin->name }}</td>
                                <td class="text-center">{{ $admin->email }}</td>
                                <td class="text-center">
                                    <button wire:click='UserRoles({{ $admin->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#UserRoles" data-ar="الاذونات/الصلاحيات"
                                        data-ar="تعديل" data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteUser({{ $admin->id }})' class="btn btn-danger btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#DeleteUser" data-ar="حذف"
                                        data-en="Delete">
                                        <i class="fa fa-fw fa-close"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <!-- User Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar="جدول المستخدمين" data-en="User Accounts Table">User Accounts Table</h5>

            @if ($users->isEmpty())
                <p class="text-center">No User accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="الاسم" data-en="Name">Name</th>
                            <th scope="col" class="text-center" data-ar="البريد الالكتروني" data-en="Email">Email
                            </th>
                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center" scope="row">{{ $user->id }}</td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">
                                    <button wire:click='UserRoles({{ $user->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#UserRoles" data-ar="الاذونات/الصلاحيات"
                                        data-ar="تعديل" data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteUser({{ $user->id }})' class="btn btn-danger btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#DeleteUser" data-ar="حذف"
                                        data-en="Delete">
                                        <i class="fa fa-fw fa-close"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <!-- Employee Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar="جدول حسابات الموظفين" data-en="Employee Accounts Table">Employee Accounts
                Table</h5>

            @if ($employees->isEmpty())
                <p class="text-center">No Employee accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="الاسم" data-en="Name">Name</th>
                            <th scope="col" class="text-center" data-ar="البريد الالكتروني" data-en="Email">Email
                            </th>
                            <th scope="col" class="text-center" data-ar="الهاتف" data-en="Phone">Phone</th>
                            <th scope="col" class="text-center" data-ar="المنصب" data-en="Position">Position</th>
                            <th scope="col" class="text-center" data-ar="الراتب" data-en="Salary">Monthly-Salary
                            </th>
                            <th scope="col" class="text-center" data-ar="تاريخ التوظيف" data-en="Hire Date">Hire
                                Date</th>
                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td class="text-center">{{ $employee->id }}</td>
                                <td class="text-center">{{ $employee->name }}</td>
                                <td class="text-center">{{ $employee->email }}</td>
                                <td class="text-center">{{ $employee->phone }}</td>
                                <td class="text-center">{{ $employee->position }}</td>
                                <td class="text-center">${{ $employee->salary }}</td>
                                <td class="text-center">{{ $employee->hire_date }}</td>
                                <td class="text-center">
                                    <button wire:click='UserRoles({{ $employee->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#UserRoles"
                                        data-ar="تعديل" data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteUser({{ $employee->id }})'
                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#DeleteUser" data-ar="حذف" data-en="Delete">
                                        <i class="fa fa-fw fa-close"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @endif
        </div>

        <!-- Supplier Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar="جدول حسابات الموردين" data-en="Supplier Accounts Table">Supplier Accounts
                Table</h5>

            @if ($suppliers->isEmpty())
                <p class="text-center">No Supplier accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="الاسم" data-en="Name">Name</th>
                            <th scope="col" class="text-center" data-ar="البريد الالكتروني" data-en="Email">Email
                            </th>
                            <th scope="col" class="text-center" data-ar="الهاتف" data-en="Phone">Phone</th>
                            <th scope="col" class="text-center" data-ar="العنوان" data-en="Phone">Address</th>

                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td class="text-center" scope="row">{{ $supplier->id }}</td>
                                <td class="text-center">{{ $supplier->name }}</td>
                                <td class="text-center">{{ $supplier->email }}</td>
                                <td class="text-center">{{ $employee->phone }}</td>
                                <td class="text-center">{{ $employee->address }}</td>


                                <td class="text-center">
                                    <button wire:click='UserRoles({{ $supplier->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#UserRoles"
                                        data-ar="تعديل" data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteUser({{ $supplier->id }})'
                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#DeleteUser" data-ar="حذف" data-en="Delete">
                                        <i class="fa fa-fw fa-close"></i>
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

    <!-- Add User Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="AddAccount"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="اضافة مستخدم" data-en="Add User">Add
                        User</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('admin.users.create')
                </div>
            </div>
        </div>
    </div>

    <!-- Roles Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="UserRoles"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="الاذونات والصلاحيات"
                        data-en="Roles And Permissions">Roles And Permissions</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
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
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="DeleteUser"
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
                    @if ($user_id)
                        @livewire('admin.users.delete', [$user_id])
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
