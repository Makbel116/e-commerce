<!DOCTYPE html>
<html lang="en">

@include('partials.head._head')

<body>
    <header>
        <div id="navigation-bar">
            @include('partials.navigation._topNavBar')
            @include('partials.navigation._bottomNavBar')
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        @include('partials.footer._footer')
    </footer>
    <x-flashMessage />
    <!-- loading the js file -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
</body>
