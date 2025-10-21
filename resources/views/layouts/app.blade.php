<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {min-height:100vh;overflow-x:hidden;}
        .sidebar{width:220px;background:#343a40;color:#fff;height:100vh;position:fixed;top:0;left:0;padding-top:60px;}
        .sidebar a{display:block;padding:12px 20px;color:#adb5bd;text-decoration:none;}
        .sidebar a:hover,.sidebar a.active{background:#495057;color:#fff;}
        .content {
    margin-left: 220px;
    padding: 20px;
    padding-top: 80px; /* ADD THIS */
}
        @media(max-width:992px){.sidebar{left:-220px}.sidebar.show{left:0}.content{margin-left:0;}}
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button class="btn btn-outline-light d-lg-none" id="menu-toggle">☰</button>
        <span class="navbar-brand mb-0 h1 ms-2">Admin Dashboard</span>
    </div>
</nav>

<div class="sidebar" id="sidebar">
    <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
    <a href="{{ url('/student') }}" class="{{ request()->is('student*') ? 'active' : '' }}">👤 User Details</a>
</div>

<div class="content" id="content">
    @yield('content') <!-- THIS IS LIKE OUTLET -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('show');
});
</script>
</body>
</html>
