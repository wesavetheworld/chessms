<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>[Ches(s]ms)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="/css/bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <link href="/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/css/chessms.css" rel="stylesheet">
        <link href="/css/jchess.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="/img/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/img/ico/apple-touch-icon-57-precomposed.png">

        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/chessms.js"></script>
        <script src="/js/jchess.js"></script>

    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <a class="brand" href="#">[Ches(s]ms) :: Chess Emm Ess :: Text 'play' to 262-67-CHESS (262-672-4377) for a game</a>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            Check it out on GitHub: <a href="https://github.com/v64/chessms">https://github.com/v64/chessms</a><br /><br />

            <?php $this->view($template_contents); ?>

        </div> <!-- /container -->
    </body>
</html>
