{{--
<div>

    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p> {{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="البحث ...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <ul class="sidebar-menu">
                <li class="header">
                    <a href="{{ route('dashboard') }}">
                        القائمة الرئيسية
                    </a>
                </li>
                <li>
                    <a wire:click='users'>
                        <i class="fa fa-users text-aqua"></i> <span>المستخدمين</span>
                    </a>
                </li>
                <li class=" treeview">
                    <a>
                        <i class="fa fa-fw fa-gears text-aqua"></i> <span>الاذونات والصلاحيات</span> <i
                            class="fa fa-angle-left pull-left "></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a wire:click='roles'><i class="fa fa-circle-o"></i> الاذونات</a>
                        </li>
                        <li><a wire:click='permissions'><i class="fa fa-circle-o"></i>الصلاحيات</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
</div> --}}
<div id="dw-s1" class="bmd-layout-drawer bg-faded">
    <div class="container-fluid side-bar-container">
        <header class="pb-0">
            <a href="{{ route('dashboard') }}" class="navbar-brand">
                <img class="side-logo" src="{{ asset('adminDash/svg/financial-org.svg') }}" type="image/svg+xml"></im>
            </a>
        </header>
        <p class="side-comment" data-ar="لوحة التحكم" data-en="Dashboard"> Dashboard</p>
        <ul class="side a-collapse short">
            <a class="ul-text" data-ar="الاذونات والصلاحيات" data-en=" Roles/Permissions"><i
                    class="mr-2 fa-solid fa-gears"></i> Roles/Permissions
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item "><a href="{{ route('roles') }}"><i class=" fas fa-angle-right mr-2"></i><span
                            class="lang-text" data-ar="الادوار" data-en="Roles"> Roles</span></a></li>
                <li class="side-item"><a href="{{ route('permissions') }}" wire:click='permissions'><i
                            class=" fas fa-angle-right mr-2"></i><span class="lang-text" data-ar="الصلاحيات"
                            data-en="Permissions"> Permissions</span></a></li>

            </div>
        </ul>
        <li class="side a-collapse short">
            <a href="{{ route('users') }}" class="side-item"><i class="mr-2 fa-solid fa-users"></i><span
                    class="lang-text" data-ar="المستخدمين" data-en="Users"> Users</span></a>
        </li>
        <li class="side a-collapse short">
            <a href="{{ route('accounts') }}" class="side-item"><i
                    class="mr-2 fa-solid fa-hand-holding-dollar"></i><span class="lang-text" data-ar="الحسابات"
                    data-en="Accounts"> Accounts</span></a>
        </li>
        <li class="side a-collapse short">
            <a href="{{ route('salaries') }}" class="side-item"><i class="mr-2 fa-solid fa-sack-dollar"></i><span
                    class="lang-text" data-ar="الرواتب" data-en="Salaries"> Salaries</span></a>
        </li>

        <li class="side a-collapse short">
            <a href="{{ route('invoices') }}" class="side-item"><i
                    class=" mr-2 fa-solid fa-file-invoice-dollar"></i><span class="lang-text" data-ar="الفواتير"
                    data-en="Invoices"> Invoices</span></a>
        </li>
        <li class="side a-collapse short">
            <a href="{{ route('inventory') }}" class="side-item"><i class="mr-2 fa-solid fa-warehouse"></i><span
                    class="lang-text" data-ar="المخزون" data-en="Inventory"> Inventory</span></a>
        </li>
        <li class="side a-collapse short">
            <a href="{{ route('transactions') }}" class="side-item"><i class="mr-2 fa fa-exchange"></i><span
                    class="lang-text" data-ar="المعاملات" data-en="Transactions"> Transactions</span></a>
        </li>
        <li class="side a-collapse short">
            <a href="{{ route('JournalEntries') }}" class="side-item"><i
                    class="mr-2 fa-solid fa-book-journal-whills"></i><span class="lang-text" data-ar="القيود المحاسبية"
                    data-en="Journal Entries "> Journal Entries </span></a>
        </li>
        <li class="side a-collapse short">
            <a href="{{ route('expenses') }}" class="side-item"><i class="mr-2 fa-solid fa-money-bill"></i><span
                    class="lang-text" data-ar="المصاريف" data-en="Expenses "> Expenses</span></a>
        </li>
        <!-- Rest of the sidebar menu items with data-ar and data-en attributes -->


    </div>
</div>
