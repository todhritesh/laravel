<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <div class="container py-3">
            <div class="row">
                <div class="col-8 mx-auto">
                    <form action="" method="">
                        <div class="mb-3">
                            <div class="form-label">Name</div>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender : </label>
                            <label for="" class="form-check-label">Male</label>
                            <input type="radio" class="form-check-input" type="radio"  name="gender">
                            <label for="" class="form-check-label">female</label>
                            <input type="radio" class="form-check-input" type="radio" name="gender">
                        </div>
                        <div class="mb-3 ">
                            <div class="text-center"><input type="submit" value="Apply" class="btn btn-danger w-50"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>