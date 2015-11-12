<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lyman Wong</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<div class="brand">Lyman Wong</div>
<div class="address-bar">1942 36th Avenue | San Francisco, CA 94116 | 415.509.1409<br/></div>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.php">Lyman Wong</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#/">Home</a>
                </li>
                <li>
                    <a href="#/about">About</a>
                </li>
                <li>
                    <a href="#/projects">Projects</a>
                </li>
                <li>
                    <a href="#/blog">Blog</a>
                </li>
                <li>
                    <a href="#/contact">Contact</a>
                </li>
<!--            <li>
                    <a href="" class="music">Music</a>
                </li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <ul class="musiclist indents">
            Pick a genre.<br />It'll take a few seconds for the Soundcloud api to load...
            <p><a href="#" class="genre">Dubstep</a> | <a href="#" class="genre">Electronic</a> | <a href="#" class="genre">Hip Hop & Rap</a> | <a href="#" class="genre">Pop</a> | <a href="#" class="genre">Punk</a> | <a href="#" class="genre">Rock</a></p>
        </ul>
        <div id="player"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- <ul class="musiclist indents">
    Pick a genre.<br />It'll take a few seconds for the Soundcloud api to load...
    <p><a href="#" class="genre">Dubstep</a> | <a href="#" class="genre">Electronic</a> | <a href="#" class="genre">Hip Hop & Rap</a> | <a href="#" class="genre">Pop</a> | <a href="#" class="genre">Punk</a> | <a href="#" class="genre">Rock</a></p>
</ul>
<div id="player"></div> -->
