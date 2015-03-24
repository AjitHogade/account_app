
<html >
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.js" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="/media/css/bootstrap.min.css">-->

    <!--JQuery UI CSS-->
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="/media/css/jquery-ui-base-1.8.20.css"> -->
    <l  ink rel="stylesheet"
          href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
    <!-- CSS to manage tagit while adding clients -->
    <link href="/media/css/tagit-awesome-blue.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.launch-modal').click(function(){
                    $('#myModal').modal({
                        keyboard: false
                    });
                });
            });
        </script>
        <style type="text/css">
            .bs-example{
                margin: 20px;
            }
        </style>

    <!-- Bootstrap JS -->
    <script src="/media/js/bootstrap.min.js"></script>
    <!-- JQuery JS -->
    <script src="/media/js/jquery.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!--<script src="/media/js/jquery-ui.min.js"></script>-->
    <!-- TAG-IT JS -->
    <script type="text/javascript" src="/media/js/tagit.js" charset="UTF-8"></script>

</head>
<body>
@include('layout.header')
<div id="content">
    <div class="container-fluid">

            @yield('content')
    </div>
</div>
</body>