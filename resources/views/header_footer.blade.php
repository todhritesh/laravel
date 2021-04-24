<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abc public school - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a href="/" class="navbar-brand">Abc public school</a>

                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/adm" class="nav-link btn btn-outline-primary rounded-pill mx-2 px-2">Admission Info</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                    </ul>
            </div>
        </nav>

@yield('main')

<div class="container-fluid bg-dark text-white">
    <div class="container py-2">
        <div class="row pt-3">
            <div class="col-6 pe-2">
                <div class="row pb-2">
                    <div class="h1">Members</div>
                </div>
                Lorem ipsum dolor sit Lorem, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima aliquequuntur quae provident, at debitis! Aut impedit corporis molestiae distinctio necessitatibus non asperiores eum quod. Minima, deserunt! ipsum dolor sit amet consectetur adipisicing elit. Explicabo aliquid suscipit necessitatibus eius illo unde accusantium itaque laborum corrupti aut? amet consectetur adipisicing elit. Fugiat in aliquid quod perferendis non sapiente, rerum iusto magnam doloribus eaque consequatur alias molestias beatae facere ad expedita tempore possimus sint.
            </div>
            <div class="col-6 ps-2 d-flex">
                <div class="ms-auto">
                    <div class="h3 text-muted">Contact</div>
                    <div class="h5"><a href="" class="nav-link">Facebook</a></div>
                    <div class="h5"><a href="" class="nav-link">Instagram</a></div>
                    <div class="h5"><a href="" class="nav-link">Gmail</a></div>
                    <div class="h5"><a href="" class="nav-link">Twitter</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
