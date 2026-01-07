<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Namangan Turizm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: white;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar .active {
            background-color: #007bff;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="sidebar p-3" style="width: 250px;">
            <h4>Admin Panel</h4>
            <hr>
            <nav class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.tours.index') }}"
                    class="nav-link {{ request()->routeIs('admin.tours.*') ? 'active' : '' }}">Tours</a>
                <a href="{{ route('admin.hotels.index') }}"
                    class="nav-link {{ request()->routeIs('admin.hotels.*') ? 'active' : '' }}">Hotels</a>
                <a href="{{ route('admin.galleries.index') }}"
                    class="nav-link {{ request()->routeIs('admin.galleries.*') ? 'active' : '' }}">Gallery</a>
                <a href="{{ route('admin.posts.index') }}"
                    class="nav-link {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">Blog</a>
                <a href="{{ route('admin.hero-slides.index') }}"
                    class="nav-link {{ request()->routeIs('admin.hero-slides.*') ? 'active' : '' }}">Hero Slides</a>
                <a href="{{ route('admin.features.index') }}"
                    class="nav-link {{ request()->routeIs('admin.features.*') ? 'active' : '' }}">Features</a>
                <a href="{{ route('admin.about.index') }}"
                    class="nav-link {{ request()->routeIs('admin.about.*') ? 'active' : '' }}">About Page</a>
                <a href="{{ route('admin.settings.index') }}"
                    class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">General Settings</a>
                <form action="{{ route('logout') }}" method="POST" class="mt-3">
                    @csrf
                    <button class="btn btn-danger w-100">Logout</button>
                </form>
            </nav>
        </div>
        <div class="flex-grow-1 p-4 bg-light">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard-all/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Relax validation for width to allow % units
            CKEDITOR.on('dialogDefinition', function (ev) {
                var dialogName = ev.data.name;
                var dialogDefinition = ev.data.definition;

                if (dialogName == 'image2' || dialogName == 'image') {
                    var infoTab = dialogDefinition.getContents('info');
                    if (infoTab) {
                        var widthField = infoTab.get('width');
                        if (widthField) {
                            widthField.validate = function () {
                                return true; // Allow any value including %
                            };
                        }
                    }
                }
            });


            const textareas = document.querySelectorAll('textarea');
            textareas.forEach(textarea => {
                CKEDITOR.replace(textarea, {
                    // Load plugins from the "all" build
                    extraPlugins: 'uploadimage,image2',

                    // Remove conflicting plugins if necessary
                    removePlugins: 'image',

                    // Disable the security notification banner (since we are forced to use EOL version for free)
                    versionCheck: false,

                    // Upload configuration
                    filebrowserUploadUrl: "{{ route('admin.info.upload', ['_token' => csrf_token()]) }}",
                    filebrowserUploadMethod: 'form',
                    uploadUrl: "{{ route('admin.info.upload', ['_token' => csrf_token()]) }}",

                    height: 300
                });
            });
        });
    </script>
</body>

</html>