<!-- resources/views/Components/Layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    @if(!isset($hideNavAndFooter) || !$hideNavAndFooter)
        <header class="site-header">
            <a href="#" class="logo"> <i class=""></i> Documentation</a>
            <nav class="nav">
                <a href="{{ route('homepage', ['username' => $username]) }}" class="{{ request()->is('homepage/*') ? 'active' : '' }}">Home</a>
                <a href="{{ route('route', ['username' => $username]) }}" class="{{ request()->is('route/*') ? 'active' : '' }}">Route</a>
                <a href="{{ route('views', ['username' => $username]) }}" class="{{ request()->is('views/*') ? 'active' : '' }}">Views</a>
                <a href="{{ route('lay', ['username' => $username]) }}" class="{{ request()->is('lay/*') ? 'active' : '' }}">Layout</a>
                <a href="{{ route('middleware', ['username' => $username]) }}" class="{{ request()->is('middleware/*') ? 'active' : '' }}">Middleware</a>
                <a href="{{ route('contactus', ['username' => $username]) }}" class="{{ request()->is('contactus/*') ? 'active' : '' }}">Contact Us</a>     
            </nav>

            <div class="icons">
                <div class="fa-solid fa-bars" id="menu-hmbtn"></div>
                <div class="fa-solid fa-magnifying-glass" id="search-btn"></div>
                <div class="fa-solid fa-user"></div>
            </div>

            <form action="" class="search-form">
                <input type="search" id="search-box" placeholder="Search here..">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>
                </div>
            </div>
        </header>
    @endif

    <main>
        <!-- This is where the content of the child views will be displayed -->
        @yield('content') <!--call the webpages to display its content-->
    </main>

    <!-- Add your footer here if needed -->
    @if(!isset($hideNavAndFooter) || !$hideNavAndFooter)
        <footer class="site-footer">
            <b>
                <p>&copy; 2024 John Russel Soreda Documentation. All Rights Reserved.</p>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/russelioo">Facebook</a></li>
                    <li><a href="https://www.instagram.com/russelioo/">Instagram</a></li>
                    <li><a href="jrns2022-4518-93552@bicol-u.edu.ph">Email</a></li>
                </ul>
            </b>
        </footer>
    @endif

    <script src="{{ asset('javascript/script.js') }}"></script>
</body>
</html>
