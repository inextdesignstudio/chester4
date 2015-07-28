<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fresh Fruits and Vegetables from Chester St Fruit Market</title>
<meta name="description" content="Chester St Fruit company delivers you fresh, delicious vegetables and fruits." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
<script type="text/javascript">

	hs.graphicsDir = 'highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.wrapperClassName = 'dark borderless floating-caption';
	hs.fadeInOut = true;
	hs.dimmingOpacity = .75;

	// Add the controlbar
	if (hs.addSlideshow) hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .6,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>

<script src="jquery-1.10.2.min.js"></script>
<script src="jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#add").click(function() {
          $('#mytable tbody>tr:last').clone(true).insertAfter('#mytable tbody>tr:last');
 $('#mytable tbody>tr:last #name').val('');
 $('#mytable tbody>tr:last #age').val('');
          return false;
        });
    });
</script>
</head>
<body>
    <div id="templatemo_container">
    <!--  Free CSS Templates by TemplateMo.com  -->
    	<div id="templatemo_header">
        	<div id="templatemo_menu">
				<ul>
                    <li><a href="index.html">Homepage</a></li>
                    <li><a href="seasonguide.html">Seasonal Guide</a></li>
					<li><a href="order.html">Place Order</a></li>
                    <li><a href="freedelivery.html">Free Delivery</a></li>
                  	<li><a href="payment.html" class="current">Payment</a></li>
                  	<li><a href="contact.html">Contact Us</a></li>
					            	</ul>
			</div>
                    
        	<div id="templatemo_slogan">
            	<span class="slogan_text_1">
                	Fresh Fruit Market &amp; Wholesale
                </span>
                <span class="slogan_text_2">

                 </span>
            </div>
        </div>
        
        <div id="templatemo_content_area">
            <div id="templatemo_left_col">
            	<div class="templatemo_section">
                	<h1>Special Announcements</h1>
                    	<h2>Operating Since April 2011</h2>
                        <p>Chester St Fruit Market Oakleigh is operated his business since April 2011.</p>
                        
                        <h2>We Supply Everywhere</h2>
                        <p>We provide wide variety of fruits and vegetables to hotels, schools, cafes and other organizations. </p>
                        
                        <h2>Free Delivery Option</h2>
                        <p>We do free delivery in radius of 15km as well for reasonable order or our regular customers</p>
                        
                                        </div>
                <div class="templatemo_section">
                	
                </div>
            </div><!-- End Of Left -->
            
            <div id="templatemo_right_col">
            	<div class="templatemo_post_area">
                	<p style="font-size:14px;font-weight:bold;">Contact Form</p>
                   
                  <p><?php if(!isset($_POST['submitform'])) { ?><div id="contactform-area">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>Fields marked with * are compulsory to be filled</p>
    <label for="Name">Name:*</label>
				<input type="text" name="name" id="Name" />
                
                <label for="Phone">Contact Phone:*</label>
				<input type="text" name="phone" id="Phone" />
				
				<label for="Email">Email:*</label>
				<input type="text" name="email" id="Email" />
	
				<label for="Address">Address:*</label>
				<textarea name="address" id="Address" style="height:50px"/></textarea>
				
				<label for="Message">Message:</label><br />
				<textarea name="message" rows="20" cols="20" id="Message"></textarea>
                
                 <table id="mytable" style="margin-left:110px" border="1" cellspacing="0" cellpadding="2">
  <tbody>
  <input type="button" style="width:120px;margin-left:110px" value="+Add Product" id="add"> (click on Add Product button to add more products to the order)
    <tr>
      <td>Product</td>
<td>Qty</td>
    </tr>
    <tr class="order">
      <td><input type="text" name="prod[]" id="name" style="width:330px" /></td>
<td><input type="text" name="qty[]" id="age" style="width:130px"></td>
    </tr> </tbody>
  </table>
    

				<input type="submit" name="submitform" value="Submit Order" class="submit-button" />
			</form>
		<div style="clear: both;"></div><?php }// end of if
        else
        {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $message = $_POST['message'];
		$phone = $_POST['phone'];
        
        if(empty($name) or empty($phone) or empty($address) or empty($email))
        {
        echo "Please go back and fill all required fields.";
        exit;
        }
		
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  echo "Invalid name. Only letters and white space allowed in name";
  exit;
}
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
  exit;
}
        
        $body = "<b>Name:</b> ".$name."
		<br><b>Phone:</b> ".$phone."
        <br> <b>Email:</b> ".$email."
        <br> <b>Address:</b> ".$address."
        <br> <b>Message:</b> ".$message."
        <br> ";
		
		$order = " ";
$i = 0;

foreach($_REQUEST['prod'] as $p)
{
$order .= "<b>Product Ordered:</b> ".$p.", <b>Quantity:</b> ".$_REQUEST['qty'][$i]."
<br>";
$i++;
}

$body .= "<br><b><u>Order Details</u></b>: 
<br> ".$order."
<br>";
        
//echo $body;
 
        $to = "mail.chesterstfruitmarket@gmail.com";
        $subject = "Enquiry from Website";
        
        $success = mail($to,$subject,$body);       
        if($success)
        echo "Thanks for contacting us. We will get back shortly";
        else
        echo "Could not send your email. Please try again later";
        } //end of else
        ?>

    </p>        
            	</div>
                
                <div class="templatemo_gallery">
                	<div class="templatemo_title">
                     	Photo Gallery                        
               	  </div>
                    <div class="templatemo_picture">
                    	<div class="highslide-gallery">
                            <a href="images/templatemo_big_1.jpg" class="highslide" onclick="return hs.expand(this)">
                                <img src="images/templatemo_thumb_1.jpg" alt="Orange"
            title="Click to enlarge" class="left"/>
                            </a>
    
                            <div class="highslide-caption">
                                Order wide variety from fruits and vegetables.
                            </div>
    
                            <a href="images/templatemo_big_2.jpg" class="highslide" onclick="return hs.expand(this)">
                                <img src="images/templatemo_thumb_2.jpg" alt="Pile of strawberries"
            title="Click to enlarge" />
                            </a>
    
                            <div class="highslide-caption">
Fresh, tasty fruits and vegetables delivered to your doorstep.                            </div>
                            
                            <a href="images/templatemo_big_3.jpg" class="highslide" onclick="return hs.expand(this)">
                                <img src="images/templatemo_thumb_3.jpg" alt="Fruits"
            title="Click to enlarge" />
                            </a>
    
                            <div class="highslide-caption">
                               Try our service. Give us a chance to serve you.
                            </div>
                            
                             <a href="images/templatemo_big_4.jpg" class="highslide" onclick="return hs.expand(this)">
                                <img src="images/templatemo_thumb_4.jpg" alt="Lemon"
            title="Click to enlarge" class="right" />
                            </a>
    
                            <div class="highslide-caption">
Contact us to place an order.                             </div>
                        
                        </div>
                    </div>
                </div>
 
            </div><!-- End Of Right -->
            <div class="cleaner"></div>
            
            <div id="templatemo_footer">Copyright © 2015 <a href="index.html">Chester St Fruit Market</a> | Developed by <a href="http://inext.com.au" target="_blank">iNext Design Studio</a></div>
            
            <div class="cleaner"></div>
        </div><!-- End Of Content Area -->    
    </div><!-- End Of Container -->

<div align=center></div></body>
</html>