<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>

    <div class="container-fluid">
        <header class="col-lg-6 offset-lg-3">
            <form class="search-box form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 col-lg-8" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 col-lg-2" type="submit">Search</button>
            </form>
        </header>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>

        <div class="row">
            <aside class="col-lg-3">
                sidebar
            </aside>

            <section class="col-lg-9">
                @yield('pages')
            </section>

            <footer class="col-lg-12">
                footer
            </footer>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('script')
</body>
</html>