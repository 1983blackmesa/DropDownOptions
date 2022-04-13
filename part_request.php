<?php
session_start();
//Actual registration form goes here and submit button, once submitted it will be emailed to users email and other junkyards

function getMake($make_id) {
    include 'db/dbConfig.php';
   
        $sql = mysqli_query($db, "SELECT make_id, make_name FROM make WHERE make_id='$make_id' "); 
        while ($row = $sql->fetch_assoc()) {
            return $row['make_name'];    
    }

} //end function

function getModel($model_id) {

include 'db/dbConfig.php';
    $sql2 = mysqli_query($db, "SELECT model_id, make_id, model_name FROM model WHERE model_id='$model_id' ");

    while($row2 = $sql2->fetch_assoc()) {
        
        return $row2['model_name'];
           
}

}//end function


if(isset($_POST['submit'])) //coming from buttom submit from home.php
{
    if(strlen($_POST['year']) > 0 AND strlen($_POST['make']) > 0 AND strlen($_POST['model']) > 0)
    {
            $year_value = $_POST['year'];
            $make_value = getMake($_POST['make']);
            $model_value = getModel($_POST['model']);
            
    }
    else 
    {
        header("Location: /home.php");
    }
}
     //echo '<p class="custom">You have requested Year: '. $_POST["year"] .'</p>';
     //echo '<br/>';
     //echo '<p class="custom">You have requested Car Make: ' . getMake($_POST['make'] . '</p>');
     //echo '<br/>';
     //echo '<p class="custom">You have requested Car Model ' . getModel($_POST['model'] . '</p>');
     //}

?>

<!doctype html>
<html lang="en">
    <head>
                    
        <title>Request Car Part</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
        <meta name="description" content="Welcome to your account. Please register.">
        <meta name="keywords" content="account register">
        <meta name="robots" content="index, follow">
        <meta name="language" content="English">

        

        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Viga" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="assets/css/stacktable.css" type="text/css">
        <link rel="stylesheet" href="assets/css/layout.css" type="text/css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

  
    </head>

    <body>
    <div class="site-wrap ">

        <header class="">
	<div class="left-container">
		<div class="logo-cont">
        JunkyAutoParts
		</div>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-element" data-toggle="collapse" data-target="#myNavbar">
				&#9776; Menu
			</button>
		</div>
	</div>

	<div class="right-container ">
		<div class="inner ">
						
			
			<div class="search-widget ">
				<div class="input-group">
					<input class="form-control input-sm query catalog-search-query" placeholder="Search by VIN, Make Model Year, Product Type, Part Number, and/or Brand" type="text" >
					<span class="input-group-btn">
                        <button class="btn btn-sm btn-default search catalog-search" type="button" data-url="/products/">Search</button>
                    </span>
				</div>
			</div>

		</div>

	</div>
	<div class="bottom-bar"></div>

	<div class="nav-container">
		<nav class="navbar-a collapse navbar-collapse" itemscope itemtype="http://schema.org/SiteNavigationElement" id="myNavbar">
        <ul class="navbar-nav nav">
				<li><a class="home" href="/"><span class="glyphicon glyphicon-home"></span> <span  itemprop="name">Home</span></a></li>
				
				</li>
				<li><a class="home" href="contact.php"><span class="glyphicon glyphicon-envelope"></span> <span  itemprop="name">Contact Us</span></a></li>
				<li><a class="home" href="about.php"><span class="glyphicon glyphicon-info-sign"></span> <span  itemprop="name">About Us</span></a></li>
								<li><a class="home" href="login.php"><span class="glyphicon glyphicon-user"></span> <span  itemprop="name">Login</span></a></li>
							</ul>
		</nav>
	</div>
	
</header>
<div class="spacer"></div>


                
<div class="padding-5"></div>
<div class="container-fluid sign-in-screen register-screen">
    <form method="post" id="register">
        <div class="container">


            <ol class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList" style="margin-bottom:0px">
                <li class="active" property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                                                   href="/"><span
                                property="name">Home</span></a>
                    <meta property="position" content="1">
                </li>
                <li class="active" property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                                                   href="login.php"><span
                                property="name">Login</span></a>
                    <meta property="position" content="2">
                </li>
                <li class="active" property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                                                   href="login.php"><span
                                property="name">Create New Account</span></a>
                    <meta property="position" content="2">
                </li>
            </ol>



            <div class="container-page">
                <div class="col-md-12">

                    <div class="row">
                        
                        <h3 class="dark-grey">Enter information below to email to junkyards to be contacted with your car part</h3>

                        <div class="col-md-12">
                            <div class="error-messages">
                                                        </div>
                        </div>

                        <div class="form-group col-lg-12">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control" id="" value="">
                                                    </div>

                                                    <div class="form-group col-lg-6">
                            <label>Name</label>
                            <input type="text" name="mobile" class="form-control" id="" value="">
                                                    </div>
                                                    
                                                    <div class="form-group col-lg-6">
                            <label>Last Name</label>
                            <input type="text" name="mobile" class="form-control" id="" value="">
                                                    </div>

                        <div class="form-group col-lg-6">
                            <label>Mobile Number</label>
                            <input type="text" name="mobile" class="form-control" id="" value="">
                                                    </div>

                        <div class="form-group col-lg-6">
                            <label>Car Year</label>
                            <input type="" name="<?=$year_value; ?>" class="form-control" id="" style="font-family: Courier; color:red; font-size:15px;" value="<?=$year_value; ?>">
                                                    </div>

                        <div class="form-group col-lg-6">
                            <label>Car Make</label>
                            <input type="" name="<?=$make_value; ?>" class="form-control" id="" style="font-family: Courier; color:red; font-size:15px;"  value="<?=$make_value;  ?>">
                                                    </div>

                        <div class="form-group col-lg-6">
                            <label>Car Model</label>
                            <input type="" name="<?=$model_value; ?>" class="form-control" id="" style="font-family: Courier; color:red; font-size:15px;"  value="<?=$model_value; ?>">
                                                    </div>

                                                    <div class="form-group col-lg-6">
                            <label>Car Part</label>
                            <input type="" name="part" class="form-control" id="" value="">
                                                    </div>

                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Submit Request</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
       
    </form>
</div>




    </div> <!-- container fluid -->


    <footer >
    

    <div class="container">

        <div class="row">

            <div class="col-sm-4">
                <h5>About Us</h5>
                <ul class="list-unstyled">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>

                <h5>Customer Service</h5>
                <ul class="list-unstyled">
                    <li><a href="/account/home">My Account</a></li>
                </ul>
            </div>

            <div class="col-sm-4">
                <h5>SUPPORT HOURS</h5>
                <ul class="list-unstyled">
                    <li>Mon - Fri: 8AM - 7PM EST</li>
                    <li>Sat: 8AM - 5PM EST</li>
                    <li>Sun: Closed</li>
                    <li>&nbsp;</li>
                    
                </ul>
            </div>

            <div class="col-sm-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li>Carjunky.com</li>
                    <li>Los Angeles</li>
                    <li>United States</li>
                    <li>&nbsp;</li>
                    <!--<li><span class="fa fa-phone" aria-hidden="true"></span>&nbsp; <a href="tel:802-589-0911">802.589.0911</a> -->
                    </li>
                    <li><a href="/contact-us">Send Us A Message</a></li>
                </ul>
            </div>

        </div>

    
    <!-- /container -->
    </div>

    <div class="footer-bottom">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <p class="ft-left"><a href="/our-policies#refunds_returns_exchanges">Returns &amp; Refunds</a> &nbsp;|&nbsp; <a
                                href="/terms-of-service">Terms of Service</a> &nbsp;|&nbsp; <a
                                href="/privacy-policy">Privacy Policy</a></p>
                    <p>&nbsp;</p>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <p class="ft-left">Copyright &copy 2022 <a href="/">Carjunky.com</a>.
                        &nbsp;All
                        Rights Reserved. CarJunky and Car Junkies are Registered Trademarks of CarJunky.com & Car Parts Junky</p>
                </div>

                <div class="col-sm-6">
                    <p class="ft-right"><img src="assets/images/visa.png"> <img
                                src="assets/images/mc.png"> <img src="assets/images/stripe.png"></p>
                </div>

            </div>

            <!-- /container -->
        </div>
    </div>


</footer>


    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'OiheN81aV7';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//code.jivosite.com/script/widget/'+widget_id
            ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
            if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
            else{w.addEventListener('load',l,false);}}})();
    </script>

    </body>
</html>



