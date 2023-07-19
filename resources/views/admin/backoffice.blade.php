<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resto App</title>
    <link rel="stylesheet" href="{{ asset('css/backoffice.css') }}">
</head>
<body>
<div class="sidebar">
    <div class="logo">
        Backoffice
    </div>
    <div class="logo">
        LOGO
    </div>
    <ul class="nav">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Orders</a></li>
    </ul>
</div>

<div class="main-content">
    <header>
        <h1>Welcome to the Dashboard</h1>
    </header>
    <section>
        <form id="logout-form" method="POST" action="/logout" class="hidden">
            @csrf
            <button>Log out</button>
        </form>
    </section>
</div>

<script src="{{ asset('js/backoffice.js') }}"></script>
</body>
</html>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .sidebar {
        width: 250px;
        background-color: #f0f0f0;
        height: 100vh;
        float: left;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
        padding: 20px;
    }

    .nav {
        list-style: none;
        padding: 0;
    }

    .nav li {
        padding: 10px 20px;
    }

    .nav a {
        text-decoration: none;
        color: #333;
        display: block;
    }

    .nav a:hover {
        background-color: #ddd;
    }

    .main-content {
        margin-left: 250px;
        padding: 20px;
    }

    header {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    section {
        margin-top: 20px;
    }
</style>
