<html >
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    //Bootstrap CSS
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="/media/css/bootstrap.min.css">-->

    <!--JQuery UI CSS-->
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="/media/css/jquery-ui-base-1.8.20.css"> -->

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
    <!-- CSS to manage tagit while adding clients -->
    <link href="/media/css/tagit-awesome-blue.css" type="text/css" rel="stylesheet">


    <!-- Bootstrap JS -->
    <script src="/media/js/bootstrap.min.js"></script>
    <!-- JQuery JS -->
    <script src="/media/js/jquery.js"></script>
    <!-- JQuery UI JS
    <script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->
    <script src="/media/js/jquery-ui.min.js"></script>
    <!-- TAG-IT JS -->
    <script type="text/javascript" src="/media/js/tagit.js" charset="UTF-8"></script>

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <a class="navbar-brand" href="#">EXPENSE-TRACKER</a></a>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="/controlPanel">Control-Panel</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
            </ul>



        </div>
    </div>
</div>
<div id="content">
    <div class="container-fluid">
        <div class="row">

            <br><br><br>
            <div class="col-md-4 col-md-offset-4">
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        User-name already exists.Please try with something else.
                    </div>
@endif
                <div class="center span4 well">
                    <legend>Register</legend>

                    {{Form::open(array('id'=>'contactform','file'=>true,'method' => 'post'))}}
                    <div class="form-group">
                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            {{ Form::text('name',null,array('name'=>'name','id'=>'name','class'=>'form-control','placeholder'=>'Enter your full Name')) }}
                        </div>
                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                        </div>
                    <div class="form-group">
                        <div class="form-group @if ($errors->has('username')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            {{ Form::text('username',null,array('name'=>'username','id'=>'username','class'=>'form-control','placeholder'=>'Username')) }}
                        </div>
                            @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
                        </div>
                    <div class="form-group">
                        <div class="form-group @if ($errors->has('password')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            {{ Form::password('password',array('name'=>'password','id'=>'password','class'=>'form-control','placeholder'=>'Password')) }}
                        </div>
                            @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                        </div>
                    <div class="form-group">
                        <div class="form-group @if ($errors->has('confirm_password')) has-error @endif">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            {{ Form::password('password_confirmation',array('name'=>'confirm_password','id'=>'password','class'=>'form-control','placeholder'=>'Confirm-Password')) }}
                        </div>
                            @if ($errors->has('confirm_password')) <p class="help-block">{{ $errors->first('confirm_password') }}</p> @endif
                        </div>
                    {{ Form::submit('Resgister!',array('id'=>'submit','class'=>'btn btn-primary')) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                                Registered sucessfully! Click <a href="/login">here</a> to LOGIN
                            </div>

@endif

</body>
