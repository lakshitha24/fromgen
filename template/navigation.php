<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Form GEN</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                    
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php  echo $_SESSION['username']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="function/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
            <nav>
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="home.php"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="create_new.php"><i class="fa fa-plus-square"></i> Create New</a>
                    </li>
                    <li>
                        <a href="drafts.html"><i class="fa fa-file-text"></i> Draft  (<span id="Draft-num"></span>)</a>
                    </li>
                    <li>
                        <a href="settings.html"><i class="fa fa-cogs"></i> Setting</a>
                    </li>
                  
                    
                   
                </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

       