<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | Karma Stock</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  
    <style type="text/css">
      h1 {
        text-align: center;
        color: white;
      }

      body{
        background: #3F3F3F;
      }
      form{ 
        background: rgba(236, 236, 236, 0.98); 
        padding: 100px; border-radius: 5px; 
        box-shadow: 0 0px 12px rgba(0, 0, 0, .74); 
      }

      p {
        text-align: center;
        color: white;
        padding-top: 90px;
      }


    </style>
  </head>
  <body>

    @if (count($errors) > 0)
        <!-- Form Error List -->
        <div class="alert alert-danger">
            <strong>Whoops! Something went wrong!</strong>

            <br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <h1>Login Here</h1>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}">
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i> Login
                    </button>

                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
    <p>Copyright @ Bajra STIKI INDONESIA</p>
    

    <!-- JavaScripts -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>