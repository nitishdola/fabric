<!DOCTYPE html>
<html>
  
<head>
    <title>
      Fabric
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/font-awesome.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/se7en-font.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/style.css') }}" media="all" rel="stylesheet" type="text/css" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body class="login2">
    <!-- Login Screen -->
    <div class="login-wrapper">
      <a href="index.html"><h1>SAI MARKETING</h1></a>
      {!! Form::open(array('route' => 'admin.login', 'id' => 'admin.login', 'class' => 'form-horizontal row-border')) !!}
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-user"></i></span>
            {!! Form::text('username', null, ['class' => 'form-control required', 'id' => 'username', 'placeholder' => 'User Name', 'autocomplete' => 'off', 'required' => 'true']) !!}
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-lock"></i></span>
            <input class="form-control" name="password" placeholder="Password" type="password">
          </div>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">
      {!!form::close()!!}
    </div>
    <!-- End Login Screen -->
  </body>

</html>