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
        <title>ADMIN | PCH</title>
    </head>
    <body>
        <link href="/style.css" rel="stylesheet" />

        <nav class="navbar navbar-dark bg-dark py-1 navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/admin/root/user/pch">
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
                            <a class="nav-link" href="/admin/root/user/pch/">Winner's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/root/user/pch/contacts">Contact's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/root/user/pch/claims">Claim's</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        
      
    </body>
    <script src="/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</html>
