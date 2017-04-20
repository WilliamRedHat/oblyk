
<!doctype html>
<html lang="fr">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.nav')
        </header>

        <main class="corps-de-page">
            @yield('content')
        </main>

        <footer class="page-footer">
            @include('includes.footer')
        </footer>

        @include('includes.modal')

        @include('includes.scripts')

    </body>
</html>