<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link rel="shortcut icon" href="/pch-icon.png" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>PCH</title>
    </head>
    <body>
        <link href="/style.css" rel="stylesheet" />

        <nav class="navbar navbar-dark bg-dark py-1 navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="applogo img-fluid" src="/pch-icon.png" alt="" />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navmenu"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/winners"
                                >Winner's List</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/claim">How To Claim</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        
        <!-- footer  -->
        <footer
            class="p-5 bg-dark text-white text-center position-relative"
        >
            <p class="lead">Copyright &copy; Publishers Clearing House</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="40"
                    height="40"
                    fill="currentColor"
                    class="bi bi-arrow-up-square"
                    viewBox="0 0 16 16"
                >
                    <path
                        fill-rule="evenodd"
                        d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"
                    />
                </svg>
            </a>
        </footer>
    </body>
    <script src="/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</html>
