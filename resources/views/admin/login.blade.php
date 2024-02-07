<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - Login</title>
    <!-- Styles -->
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/helper.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#"><img src="images/jobhub-logo.svg" alt=""></a>
                        </div>
                        <div class="login-form">                            
                            <form class="contact-form-style" id="contact-form" action="{{route('admin_login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    <p class="text-danger">@error('email') {{$message}}@enderror</p>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password-field" name="password" placeholder="Password">                                    
                                    <p class="text-danger">@error('password') {{$message}}@enderror</p>
                                </div>                             
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<style>
    .text-danger {
    color: red!important;
    font-size: 12px!important;
    font-weight: 700!important;
    text-align: left;
    }
    
</style>


</body>

</html>