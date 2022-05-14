
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BPAro | Login</title>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{url('admin/css/nifty.min.css')}}" rel="stylesheet">
</head>


<body>
<div id="container" class="cls-container">

    <div id="bg-overlay"></div>
    <div class="cls-content">
        <div class="cls-content-sm panel">
            <div class="panel-body">
                <div class="mar-ver pad-btm">
                    <h1 class="h3">BPAro</h1>
                    <p>Sign In with your email and password</p>
                </div>
                <form method="POST" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Email" autofocus>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>
    <!--===================================================-->
</div>
<!--jQuery [ REQUIRED ]-->
<script src="{{url('admin/js/jquery.min.js')}}"></script>

<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{url('admin/js/bootstrap.min.js')}}"></script>
</body>
</html>
