<!DOCTYPE html>
<html>
<head>
    <title>ADMIN-PANEL</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">admin panel</div>
                <div class="card-body">
                    <nav class="nav nav-pills nav-fill">

                        <a class="nav-link " aria-current="page" href="#">Home</a>
                        <a class="nav-link " href="{{ route('countries.index') }}">countries</a>
                        <a class="nav-link" href="{{ route('langs.index') }}">langs</a>
                        <a class="nav-link" href="{{ route('logos.index') }}">logos</a>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
