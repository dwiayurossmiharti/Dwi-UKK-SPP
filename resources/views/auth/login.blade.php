<!DOCTYPE html>
<html lang="en">
  <head>
    <title>simple java rest login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="SimpleRestLoginStyle.css">
    <style>
      body {
            background-image: url("assets/img/landing/bg.jpg");
            font-family: 'Raleway', sans-serif;
            background-size: cover;
        }
        .container{
            margin-top: 13%;
            height: 250px;
            opacity: 0.8;
            border-radius: 8px;
        }
        #login img{
            margin: 10px 0;
        }
        #login .center {
            text-align: center;
        }

        #login .login {
            max-width: 300px;
            margin: 35px auto;
        }

        #login .login-form{
        padding:0px 25px;
        }
        #login h1 {
            margin-bottom: 20px;
        }
        #login span{
            width: 25px;
            height: 30px;
        }
        #login input{
            height: 30px;
        }
        hr{
            width: 200px;
            border-top: 1px solid #f8f8f8;
            border-bottom: 1px solid rgba(0,0,0,0.2);
            margin: 0 auto;
        }

    </style>
  </head>
  <body>
    <div id="login" class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="login well well-small">
                    <div class="center">
                        <h1>Welcome</h1>                         
                    </div>
                    <form method="POST" action="{{route('login')}}" class="login-form">
                      @csrf
                      <div class="control-group">
                        <div class="input-prepend">
                            <hr>
                          <h4>Login</h4>  
                          <span class="add-on"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                          <input name="username" required="required" placeholder="Email" maxlength="255" type="text" id="email"> 
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="input-prepend">
                          <span class="add-on"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                          <input name="password" required="required" placeholder="Password" type="password" id="UserPassword"> 
                        </div>
                      </div>
                      <div class="control-group">
                          <button class="btn btn-primary btn-large btn-block" type="submit" value="Sign in">Submit</button> 
                      </div>
                    </form>
                </div><!--/.login-->
            </div><!--/.span12-->
        </div><!--/.row-fluid-->
      </div><!--/.container-->
  </body>
</html>