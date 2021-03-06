<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">{{ env('APP_NICKNAME') }}</a>
        </div>
        <ul class="sidebar-menu">
            <!-- Dashboard -->
            <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            
            <!-- Students -->
            <li class="menu-header">Student</li>
            <li><a class="nav-link" href="{{ route('admin.students') }}"><i class="fas fa-users"></i> <span>Students</span></a></li>

            <!-- Classrooms -->
            <li class="menu-header">Classroom</li>
            <li><a class="nav-link" href="{{ route('admin.classrooms') }}"><i class="fas fa-university"></i> <span>Classrooms</span></a></li>
            
            <!-- Transactions -->
            <li class="menu-header">Transactions</li>
            <li><a class="nav-link" href="{{ route('admin.payments') }}"><i class="fas fa-money-bill-wave-alt"></i> <span>Payments</span></a></li>
            <li><a class="nav-link" href="{{ route('admin.payment-transactions') }}"><i class="fas fa-shopping-cart"></i> <span>Payment Transactions</span></a></li>

            <!-- Users -->
            <li class="menu-header">Users</li>
            <li><a class="nav-link" href="{{ route('admin.users') }}"><i class="fas fa-user"></i> <span>Users</span></a></li>


    </aside>
</div>