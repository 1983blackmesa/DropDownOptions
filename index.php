<!doctype html>
<html lang="en">
    <head>
        <title>Shop for Discount Auto Parts, Replacement &amp;amp; Performance Parts &amp; Accessories</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
        <meta name="description" content="Discount auto parts, performance parts, &amp;amp; quality genuine replacement dealer parts for domestic and foreign cars. Highest Quality Parts, Lowest Prices.">
        <meta name="keywords" content="oem parts, auto parts, vehicle accessories, dealer parts">
        <meta name="robots" content="index, follow">
        <meta name="language" content="English">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Viga" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="assets/css/stacktable.css" type="text/css">
        <link rel="stylesheet" href="assets/css/layout.css" type="text/css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
                
<!-- Custom style -->
<style>
.container{
	padding: 20px;
}
select{
    font-size: 16px;
    padding: 4px 8px;
    color: #666;
	margin-right: 20px;
}
select:last-child{
	margin-right: 0;
}
</style>

<style type="text/css">
.custom {
 font-family: Courier;
 color: red;
 font-size:20px;
}
</style>

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>


<script>
    $(function() {
                $("#year").change(function() {
                    //var displayyear=$("#year option:selected").text();
                    //$("#txtresults").val(displayyear);
                })
            })
        </script>

<script>
$(document).ready(function(){
    $('#make').on('change', function(){
        var makeID = $(this).val();
        if(makeID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'make_id='+makeID,
                success:function(html){
                    $('#model').html(html);
                    $('#part').html('<option value="">Select Model first </option>'); 
                }
            }); 
        }else{
            $('#make').html('<option value="">Select make first</option>');
            $('#model').html('<option value="">Select model first</option>'); 
        }
    });
    
    $('#state').on('change', function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#part').html(html);
                }
            }); 
        }else{
            $('#part').html('<option value="">Select model first</option>'); 
        }
    });
});
</script>

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

    <div class="container-fluid padding-5 homepage">

        <div class="row">
            <div class="col-sm-12">
                <p class="about">
                    <a class="company-name" href="/">Junky Auto Parts&reg;</a> offers discount auto parts completely unmatched in the industry. Having been online since 2010 makes a huge difference -- incredibly fast shipping from our network of auto parts warehouses, hundreds of millions of new, aftermarket, OEM, replacement, performance, and discount auto parts.
                    
                </p>
                <p class="about">
                    <strong>Why Shop With Us?</strong>
                </p>
                <ul class="points">
                    <li>
                        &Sc; Accurate Real Time Inventory Updated Every Second
                    </li>
                    <li>
                        &Sc; Money Back Guarantee with a 30 Day Return Policy
                    </li>
                    <li>
                        &Sc; US Based Support from Industry Professionals
                    </li>
                    <li>
                        &Sc; Fast Shipping - Most Orders Ship Same-Day
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="top-parts-cont">
                    <h2 class="header">Junky AutoParts</h2>
                    <div class="spacer"></div>
                    
<div class="container">

<form name="myform" id="myForm" action="part_request.php" method="post">
<div class="panel panel-primary">
        <div class="panel-heading">Junkyard AutoPart Selection</div>
        <div class="panel-body">
        <div class="form-group">
<label for="year">Step 1: Select Year:</label>       
<select name="year" id="year" size="1">
<option value="" selected="selected">Select Year</option>
<option value="2022"> 2022 </option>
<option value="2021"> 2021 </option>
<option value="2020"> 2020 </option>
<option value="2019"> 2019 </option>
<option value="2018"> 2018 </option>
<option value="2017"> 2017 </option>
<option value="2016"> 2016 </option>
<option value="2015"> 2015 </option>
<option value="2014"> 2014 </option>
<option value="2013"> 2013 </option>
<option value="2012"> 2012 </option>
<option value="2011"> 2011 </option>
<option value="2010"> 2010 </option>
<option value="2009"> 2009 </option>
<option value="2008"> 2008 </option>
<option value="2007"> 2007 </option>
<option value="2006"> 2006 </option>
<option value="2005"> 2005 </option>
<option value="2004"> 2004 </option>
<option value="2003"> 2003 </option>
<option value="2002"> 2002 </option>
<option value="2001"> 2001 </option>
<option value="2000"> 2000 </option>
<option value="1999"> 1999 </option>
<option value="1998"> 1998 </option>
<option value="1997"> 1997 </option>
<option value="1996"> 1996 </option>
<option value="1995"> 1995 </option>
<option value="1994"> 1994 </option>
<option value="1993"> 1993 </option>
<option value="1992"> 1992 </option>
<option value="1991"> 1991 </option>
<option value="1990"> 1990 </option>
<option value="1989"> 1989 </option>
<option value="1988"> 1988 </option>
<option value="1987"> 1987 </option>
<option value="1986"> 1986 </option>
<option value="1985"> 1985 </option>
<option value="1984"> 1984 </option>
<option value="1983"> 1983 </option>
<option value="1982"> 1982 </option>
<option value="1981"> 1981 </option>
<option value="1980"> 1980 </option>
</select>

</div>

	<?php
		include 'db/dbConfig.php';
		
		// Fetch all the make data
        $query = "SELECT * FROM make WHERE status = 1 ORDER BY make_name ASC";
		$result = $db->query($query);
	?>
	<!-- Car make dropdown -->
    <div class="form-group">
    <label for="make">Step 2: Select Car Make/Manufacturer:</label>
    <select name="make" id="make" size="1">
        <option value="" selected="selected">Select Make </option>
        <?php

    if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){ 
        echo '<option value="'.$row['make_id'].'">'.$row['make_name'].'</option>';
    }
}else{
    echo '<option value="">Make not available</option>';
}
        ?>
    </select>
    </div>
    

    <!-- Car Model dropdown -->
    <div class="form-group">
    <label for="model">Step 3: Select Car Model:</label>
    <select name="model" id="model" size="1">
        <option value="" selected="selected">Select car make first</option>
    </select>
    </div>

	<!-- Car Part dropdown -->
    <div class="form-group">
    <label for="part">Select Car Part:</label>
    <select name="part" id="part" size="1">
        <option value="" selected="selected">Select car make first</option>
    </select>
    </div>
    
	
    <div class="form-group">
<div class="col-sm-offset-2 col-sm-10">

<button type="submit" name="submit" class="btn btn-primary">Submit</button>

</div>
</div>

    </div>
</div>



    </form>
</div>

                                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                
            </div>
        </div>

        

        <div class="row">
            <div class="col-sm-12">
                <div class="top-parts-cont">
                    <p class="header header-dynamic">Other JunkyAutoParts Services</p>
                    <div class="spacer"></div>
                    <div class="row margin-left-20 cj-home-info">
                        <div class="col-sm-6">
                            <p><strong>Coming Soon</strong></p>
                            
                        </div>
                        <div class="col-sm-6">
                            
                        </div>
                    </div>
                    <div class="spacer"></div>
                </div>
            </div>
        </div>

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
                        <li><a href="login.php">My Account</a></li>
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
                        <li>JunkyAutoParts.com</li>
                        <li>Los Angeles</li>
                        <li>United States</li>
                        <li>&nbsp;</li>
                        </li>
                        <li><a href="contact.php">Send Us A Message</a></li>
                    </ul>
                </div>

            </div>

        
        <!-- /container -->
        </div>

        <div class="footer-bottom">
            <div class="container">

                <div class="row">

                <div class="col-lg-12">
                     <a
                                href="terms.php">Terms of Service</a> &nbsp;|&nbsp; <a
                                href="privacy.php">Privacy Policy</a></p>
                    <p>&nbsp;</p>
                </div>

                </div>

                <div class="row">

                    <div class="col-sm-6">
                        <p class="ft-left">Copyright &copy 2022 <a href="/">JunkyAutoParts.com</a>.
                            &nbsp;All
                            Rights Reserved. JunkyAutoParts and Car Junkies are Registered Trademarks of JunkyAutoParts.com & Car Parts Junky</p>
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
