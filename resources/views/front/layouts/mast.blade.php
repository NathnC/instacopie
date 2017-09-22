<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand nice-font" href="#">Instacopie</a>
        </div>
        <div class="col-md-8 col-md-offset-1">
        <!-- Brand and toggle get grouped for better mobile display -->


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse padding-nos" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control search-box" placeholder="Search">
                    </div>
                </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth()->check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span>
                                <img class="img-circle profile-img-s pr-5" src="https://www.betterbrandagency.com/wp-content/uploads/2017/05/nathan_connor-300x300.jpg">
                            </span>
                            {{ Auth()->user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="login">Login</a></li>
                @endif

            </ul>
        </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>