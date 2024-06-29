<main class="bmd-layout-content">
    <div class="container-fluid">
        <div class="card-body">
            <button class="btn btn-primary" style="float: right" data-bs-toggle="modal" data-bs-target="#AddAccount"
                data-ar="إضافة مستخدم" data-en="Add Account">
                <i class="fa-solid fa-plus"></i> Add Account
            </button>
        </div>

        <!-- Asset Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar=" حسابات الاصول " data-en="Asset Accounts">Asset Accounts
            </h5>

            @if ($assetAccounts->isEmpty())
                <p class="text-center">No accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="اسم الحساب" data-en="Account Number">Account
                                Number</th>
                            <th scope="col" class="text-center" data-ar="رقم الحساب" data-en="Account Name">Account
                                Name
                            <th scope="col" class="text-center" data-ar="نوع الحساب" data-en="Account Type">Account
                                Type
                            <th scope="col" class="text-center" data-ar="الرصيد" data-en="Balance">Balance

                            </th>
                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assetAccounts as $account)
                            <tr>
                                <td class="text-center" scope="row">{{ $account->id }}</td>
                                <td class="text-center">{{ $account->account_number }}</td>
                                <td class="text-center">{{ $account->account_name }}</td>
                                <td class="text-center">{{ $account->account_type }}</td>

                                <td class="text-center">${{ $account->balance }}</td>
                                <td class="text-center">
                                    <button wire:click='EditAccount({{ $account->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#EditAccount" data-ar="تعديل"
                                        data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteAccount({{ $account->id }})'
                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#DeleteAccount" data-ar="حذف" data-en="Delete">
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
        <!-- Liability Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar="  حسابات الالتزامات " data-en="Liability Accounts ">Liability Accounts
            </h5>

            @if ($liabilityAccounts->isEmpty())
                <p class="text-center">No accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="اسم الحساب" data-en="Account Number">Account
                                Number</th>
                            <th scope="col" class="text-center" data-ar="رقم الحساب" data-en="Account Name">Account
                                Name
                            <th scope="col" class="text-center" data-ar="نوع الحساب" data-en="Account Type">Account
                                Type
                            <th scope="col" class="text-center" data-ar="الرصيد" data-en="Balance">Balance

                            </th>
                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($liabilityAccounts as $account)
                            <tr>
                                <td class="text-center" scope="row">{{ $account->id }}</td>
                                <td class="text-center">{{ $account->account_number }}</td>
                                <td class="text-center">{{ $account->account_name }}</td>
                                <td class="text-center">{{ $account->account_type }}</td>

                                <td class="text-center">${{ $account->balance }}</td>
                                <td class="text-center">
                                    <button wire:click='EditAccount({{ $account->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#EditAccount" data-ar="تعديل"
                                        data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteAccount({{ $account->id }})'
                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#DeleteAccount" data-ar="حذف" data-en="Delete">
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
        <!-- Equity Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar="حسابات حقوق الملكية" " data-en="Equity Accounts">Equity Accounts
            </h5>

              @if ($equityAccounts->isEmpty())
                <p class="text-center">No accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="اسم الحساب" data-en="Account Number">
                                Account
                                Number</th>
                            <th scope="col" class="text-center" data-ar="رقم الحساب" data-en="Account Name">
                                Account
                                Name
                            <th scope="col" class="text-center" data-ar="نوع الحساب" data-en="Account Type">
                                Account Type
                            <th scope="col" class="text-center" data-ar="الرصيد" data-en="Balance">Balance

                            </th>
                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equityAccounts as $account)
                            <tr>
                                <td class="text-center" scope="row">{{ $account->id }}</td>
                                <td class="text-center">{{ $account->account_number }}</td>
                                <td class="text-center">{{ $account->account_name }}</td>
                                <td class="text-center">{{ $account->account_type }}</td>

                                <td class="text-center">${{ $account->balance }}</td>
                                <td class="text-center">
                                    <button wire:click='EditAccount({{ $account->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#EditAccount" data-ar="تعديل"
                                        data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteAccount({{ $account->id }})'
                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#DeleteAccount" data-ar="حذف" data-en="Delete">
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
        <!-- Revenue Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar="حسابات الإيرادات" " data-en="Revenue Accounts">Revenue Accounts
            </h5>

              @if ($revenueAccounts->isEmpty())
                <p class="text-center">No accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="اسم الحساب" data-en="Account Number">
                                Account
                                Number</th>
                            <th scope="col" class="text-center" data-ar="رقم الحساب" data-en="Account Name">
                                Account
                                Name
                            <th scope="col" class="text-center" data-ar="نوع الحساب" data-en="Account Type">
                                Account Type
                            <th scope="col" class="text-center" data-ar="الرصيد" data-en="Balance">Balance

                            </th>
                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($revenueAccounts as $account)
                            <tr>
                                <td class="text-center" scope="row">{{ $account->id }}</td>
                                <td class="text-center">{{ $account->account_number }}</td>
                                <td class="text-center">{{ $account->account_name }}</td>
                                <td class="text-center">{{ $account->account_type }}</td>

                                <td class="text-center">${{ $account->balance }}</td>
                                <td class="text-center">
                                    <button wire:click='EditAccount({{ $account->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#EditAccount" data-ar="تعديل"
                                        data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteAccount({{ $account->id }})'
                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#DeleteAccount" data-ar="حذف" data-en="Delete">
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
        <!-- Expense Accounts Section -->
        <div class="card-body">
            <h5 class="card-title" data-ar="حسابات المصروفات" " data-en="Expense Accounts">Expense Accounts
                </h5>

                  @if ($expenseAccounts->isEmpty())
                <p class="text-center">No accounts found.</p>
            @else
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center" data-ar="اسم الحساب" data-en="Account Number">
                                Account
                                Number</th>
                            <th scope="col" class="text-center" data-ar="رقم الحساب" data-en="Account Name">
                                Account
                                Name
                            <th scope="col" class="text-center" data-ar="نوع الحساب" data-en="Account Type">
                                Account Type
                            <th scope="col" class="text-center" data-ar="الرصيد" data-en="Balance">Balance

                            </th>
                            <th scope="col" class="text-center" data-ar="اجراءات" data-en="Actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenseAccounts as $account)
                            <tr>
                                <td class="text-center" scope="row">{{ $account->id }}</td>
                                <td class="text-center">{{ $account->account_number }}</td>
                                <td class="text-center">{{ $account->account_name }}</td>
                                <td class="text-center">{{ $account->account_type }}</td>

                                <td class="text-center">${{ $account->balance }}</td>
                                <td class="text-center">
                                    <button wire:click='EditAccount({{ $account->id }})' class="btn btn-info btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#EditAccount" data-ar="تعديل"
                                        data-en="Edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit
                                    </button>
                                    <button wire:click='DeleteAccount({{ $account->id }})'
                                        class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#DeleteAccount" data-ar="حذف" data-en="Delete">
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
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="اضافة حساب" data-en="Add User">Add
                        Account</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('admin.accounts.create')
                </div>
            </div>
        </div>
    </div>

    <!-- Roles Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="EditAccount"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" data-ar="تعديل حساب"
                        data-en="Roles And Permissions">Edit Account</h5>
                    <button type="button" wire:click='refreshID' class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($account_id)
                        @livewire('admin.users.roles', [$account_id])
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Delete User Modal -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="DeleteAccount"
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
                    @if ($account_id)
                        @livewire('admin.users.delete', [$account_id])
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
