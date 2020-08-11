<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
<title>Super Admin | Loveworld Live Tv</title>
<meta name="description" content="Responsive, Bootstrap, BS4">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- style -->
<link rel="stylesheet" href="/assetss/css/site.min.css">
<link rel="stylesheet" href="/assetss/css/fontawesome-all.min.css">
</head>
<body class="bg-img" style="background-image: url(img/minister.jpg);">


<div class="flex">
    <div class="w-xl w-auto-sm mx-auto py-5 mt-5">
        <div class="card">
            <div id="content-body">
                <div class="p-3">
                    <!-- {{-- @include('alert') --}} -->
                    <div class="p-4 d-flex flex-column">
                        <a href="#" class="navbar-brand align-self-center">
                            <img src="{{ asset('assetss/img/logo.png') }}" alt="..."><span class="hidden-folded d-inline l-s-n-1x align-self-center">
                          Loveworld Live Tv</span>
                        </a>
                    </div>
                    <form class="" role="form" action="{{route('login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="my-3 text-right">
                                <a href="#" class="text" style="font-size: 14px">Forgot password?</a>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-4">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 
{{-- @include('inc.footer') --}} -->

<script src="{{ asset('assets/js/site.min.js') }}"></script>
</body>
</html>
