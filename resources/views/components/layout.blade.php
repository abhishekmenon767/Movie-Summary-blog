<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/templatemo-xtra-blog.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x" defer></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            <li class="nav-item">
                <form method="GET" action="#" class="d-flex ml-auto">
                    <input type="text" name="search" placeholder="Search" class="form-control mr-2" value="{{ request('search') }}">
                    <button  type="submit" class="btn btn-outline-light">Search</button>
                </form>
            </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                @auth

                    <x-dropdown>
                        <x-slot name="trigger">
                            <li class="nav-item">
                                <button class="button button5" href="#">Welcome {{ auth()->user()->name }}</button>
                            </li>
                        </x-slot>
                        @can('admin')
                        <x-dropdown-item href="/admin/posts">All Posts</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create">New Post</x-dropdown-item>
                            <x-dropdown-item href="/admin/posts/add-category">New Category</x-dropdown-item>
                        @endcan
                    </x-dropdown>

                    <li class="nav-item">
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="button button5">Log Out</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div>
    @if (session()->has('success'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000 )" x-show="show">
            <div class="success-message">
                <p>
                    {{ session('success') }}
                </p>
            </div>
        </div>
    @endif
        <!-- Search form -->
        {{ $slot }}



</div>

<script src="js/jquery.min.js"></script>
<script src="js/templatemo-script.js"></script>
</body>

</html>
