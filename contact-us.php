<?php include 'header.php'; ?>

	<?php
$name = $_REQUEST["name"];
   $emaila = $_REQUEST["emaila"];
   $phone = $_REQUEST["phone"];
   $web  =  $_REQUEST["web"];
   $message=$_REQUEST["message"];
?>
			<div class="bnr">
<img src="images/page-titles/contact-us-banner.jpg">
</div>			
				
				<div class="padd-top-50">
					<div class="container">
						<div class="row">
			    			<div class="cell-7 contact-form fx" data-animate="fadeInLeft">
			    				<h3 class="block-head">Get in Touch</h3>
			    				 <form name="filepost" method="post" action="mail.php" enctype = "multipart/form-data" id = "file">
  <div class='form-input'>
	<label>Name<span class='red'>*</span></label>
	<input name="name" type="text" id="from" required>
   </div>
   <div class='form-input'>
	<label>Email<span class='red'>*</span></label>
	<input name="emaila" type="text" id="emaila" required>
   </div>
   <div class='form-input'>
	<label>Phone<span class='red'>*</span></label>
	<input name="phone" type="text" id="phone" required>
   </div>
   <div class='form-input'>
	<label>Website</label>
	<input name="web" type="text" id="web">
   </div>
   
    <div class='form-input'>
	<label>Message<span class='red'>*</span></label>
	<textarea name="message" rows='15' cols='40' id="message" required>
  </textarea>
   </div>
   <div class='form-input'>
	
	<input type='submit' class='btn btn-large main-bg' name="Submit2" value="Submit" onClick = "return CheckData45()" >
  
   </div>
  </form>			    			</div>
			    			<div class="cell-5 contact-detalis">
			    				<h3 class="block-head">Contact Details</h3>
			    				<p class="fx" data-animate="fadeInRight">We'd Love to Discuss your Needs.</p>
			    				<hr class="hr-style4">
			    				<div class="clearfix"></div>
			    				<div class="padding-vertical">
			    					<div class="cell-5 fx" data-animate="fadeInRight">
				    					<!-- <h4 class="main-color bold">Office: </h4>
				    					<h5 >Address:</h5>
				    					<p>Skymultitech<br>
                                       Unit-8,15 <br/> Warwick Avenue, <br> Kurralta Park <br>
                                        SA – 5037</p> -->
				    					<h5 >Email:</h5>
				    					<p>info@skymultitech.com
</p>
				    					<h5 >Phone:</h5>
				    					<p> <a href="tel:+61 466392800">+61 466392800 </a></p>
				    					<!--<h5 >FAX:</h5>
				    					<p>+2 012 000 0001</p>-->
				    				</div>
				    				<div class="cell-2"><br></div>
				    				
			    				</div>
			    			</div>
						</div>
					</div>
				</div>
				
				<!-- <div class="padd-vertical-45">
			    	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<div id="map_canvas" style="height: 450px; width: 100%;">
                   
				    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d408.76365057186246!2d138.5663853!3d-34.9538715!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0cf329ed08693%3A0xaa1af0ad560c7df5!2sSkymultitech%20%7C%20Web%20Design%20Company!5e0!3m2!1sen!2sin!4v1583008362148!5m2!1sen!2sin" width="1920" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		    	</div> -->
				
			</div>
			</div>
			<!-- Content End -->
		
<?php include 'footer.php'; ?>