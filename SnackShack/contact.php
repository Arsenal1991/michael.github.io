<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SnackShack</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    
            <nav class="navbar navbar-custom" role="navigation">

            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="index.php" a class="navbar-brand"><img class="img-responsive" src="images/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav">

                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="viewCart.php"><i class="fa fa-shopping-cart"></i></a>       
                    </li>
                </ul>


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-twitter color-twitter "></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook color-facebook"></i></a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        
        <!-- Jumbotron Header -->

                <h1> Contact. </h1>
        			
        			
                </header>

                <hr>

                <!-- /.row -->

                <!-- Page Features -->
                <div class="col-xl-12">


                <header class="jumbotron contact-display">

                <form id ="form" action="mail.php" method="POST">
                <p>Name</p> <input type="text" name="name">
                <p>Email</p> <input type="text" name="email">
                <p>Phone</p> <input type="text" name="phone">

                <p>Test checkbox</p>
                Yes:<input type="checkbox" value="Yes" name="call"><br />
                No:<input type="checkbox" value="No" name="call"><br />

                <p>Message</p>
                <textarea name="message" rows="6" cols="25"></textarea>
                <br />
                <input type="submit" value="Send"><input type="reset" value="Clear">
                </form>

                </div>

                <!-- Footer -->
                <footer>
                <section>

                <div class="row">
                    <div class="col-xl-12">
                     <div class="email-signup">
                         <form action="#">
                            <div class="input-group">
                             <input class="btn btn-lg" name="email" id="email" type="email" placeholder="your@email.com" required>
                             <button class="btn btn-info btn-lg" type="submit">Submit</button>
                            </div>
                        </form>
                        </br>
                     </div>
                    </div>
                </div>
                
            </section>

        </footer>

    </div>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
