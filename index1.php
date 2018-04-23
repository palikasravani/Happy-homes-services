<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>housecleaning_new</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>HappyHome</strong> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="#">About</a></li>
                    <li role="presentation"><a href="#">Contact Us</a></li>
                </ul>
                <button class="btn btn-info navbar-btn navbar-right" type="button" onclick="window.location.href='mybookings.php';">My bookings</button>
                <button class="btn btn-info navbar-btn navbar-right" type="button" onclick="window.location.href='cancelbook.php';">Cancel Booking</button>
				<button class="btn btn-info navbar-btn navbar-right" type="button" onclick="window.location.href='canceledit.php';">Edit Booking</button>
				<button class="btn btn-info navbar-btn navbar-right" type="button" onclick="window.location.href='logout.php';">Logout</button>
            </div>
        </div>
    </nav>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="item"><img src="assets/img/C1.jpg" alt="Slide Image"></div>
            <div class="item"><img src="assets/img/c2.jpg" alt="Slide Image"></div>
            <div class="item"><img src="assets/img/c5.jpg" alt="Slide Image"></div>
            <div class="item"><img src="assets/img/c3.jpg" alt="Slide Image" width="1300"></div>
            <div class="item"><img src="assets/img/c4.jpg" alt="Slide Image" width="1300"></div>
            <div class="item"><img src="assets/img/c6.jpg" alt="Slide Image" width="1300"></div>
            <div class="item active"><img src="assets/img/k5.jpg" alt="Slide Image" width="1300"></div>
        </div>
        <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
            <li data-target="#carousel-1" data-slide-to="4"></li>
            <li data-target="#carousel-1" data-slide-to="5"></li>
            <li data-target="#carousel-1" data-slide-to="6" class="active"></li>
        </ol>
    </div>
    <h1 class="text-center"><strong>Our Services</strong></h1>
    <div class="row">
        <div class="col-md-3">
            <div class="thumbnail"><img src="assets/img/Living-Room.jpeg">
                <div class="caption">
                    <h3> <a href="livepay.html"><strong><em>Living Room</em></strong></a></h3>
                    <p>Get professional services for your house. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="thumbnail"><img src="assets/img/Bedroom.jpeg">
                <div class="caption">
                    <h3> <a href="#"><strong><em>Bed</em></strong> <strong><em>Room</em></strong></a></h3>
                    <p>Get professional services for your house.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="thumbnail"><img src="assets/img/br.jpg">
                <div class="caption">
                    <h3> <a href="#"><strong><em>Bath Room</em></strong></a></h3>
                    <p>Get professional services for your house. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="thumbnail"><img src="assets/img/k3.jpg">
                <div class="caption">
                    <h3> <a href="#"><strong><em>Kitchen</em></strong></a></h3>
                    <p>Get professional services for your house. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="thumbnail"><img src="assets/img/domestic-cleaning-services-malta-2.jpg">
                <div class="caption">
                    <h3> <a href="#"><strong><em>Furniiture</em></strong> </a></h3>
                    <p>Get professional services for your house. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="thumbnail"><img src="assets/img/apartment-gardening.jpg">
                <div class="caption">
                    <h3> <a href="#"><strong><em>Gardening</em></strong></a></h3>
                    <p>Get professional services for your house. </p>
                </div>
            </div>
        </div>
    </div>
	<form action="form.php" method="post">
	<button>Book Now</button>
	</form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>