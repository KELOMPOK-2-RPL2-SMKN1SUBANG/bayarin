<!-- Header -->
@include('admin.partials.header')

<!-- Navbar -->
@include('admin.partials.navbar')

<!-- Sidebar -->
@include('admin.partials.sidebar')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>@yield('title', 'Dashboard')</h1>
        </div>

        <div class="section-body">
            @yield('content')
        </div>
    </section>
</div>

<!-- Footer -->
@include('admin.partials.footer')