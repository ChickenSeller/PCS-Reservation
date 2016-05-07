<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title') </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <!---->
        <link href="/css/style.css" rel = "stylesheet">
        <link href="/css/font.css" rel="stylesheet">
        <style>
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default alt" id="header">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" style="margin-right: 30px;border:0;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#" style="color:#fff;">PCS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="text-align: center">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        @section('content')
        
        @show

        @section('footer')
            <div class="footer">
                <div class="inner">
                    <p>
                        xxxx <a href="#">PC Repair</a>, by <a href="#">@</a>.
                    </p>
                </div>
            </div>
        @show

        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
        <script type="text/javascript">
            @section('javascript')

            @show
        </script>

    </body>
</html>

<body>
