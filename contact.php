<?php
    include('partials/header.php');
?>
<body>

    <?php
        include('partials/banner.php');
    ?>
    
    <div id="templatemo_main">
    
		    
    	<div class="col_w960">
        	<h2>Contact Us</h2>
	        <div class="col_w450 float_l">
           	  
                <p>Nunc varius venenatis sem sed adipiscing. Mauris suscipit mauris in purus mattis placerat. Ut rhoncus imperdiet nibh sit amet sagittis. Aliquam erat volutpat. In pellentesque sagittis dictum. Aliquam erat volutpat. Donec ac aliquam.</p>
 				
                <div class="cleaner h30"></div>
                
 				<div class="col_w200 float_l" id="map">
 					<h4>Map</h4>
		            <a href="images/map_big.jpg" title="Where We Are" rel="lightbox">
                		<img src="images/map_thumb.jpg" alt="Map" />
					</a>
                </div>
                
                <div class="col_w200 float_r">
                    <h4>Mailing Address</h4>
                    <h6><strong>Company Name</strong></h6>
                        320-360 Vitae urna est egestas, <br />
                        Sit amet convallis eget, 14220<br />
                        Lorem ipsum dolor<br />
                        <br />
                        Tel: 020-050-4470<br />
                        Fax: 020-050-7740 </div>
                <div class="cleaner"></div>
            </div>
            
            <div class="col_w450 float_r">
                <div id="contact_form">
            
                    <h4>Quick Contact Form</h4>
                    
                    <form method="post" name="contact" action="inc/contact/insert.php"> 
                    
                            <label for="author">Meno:</label> <input name="contact_name" type="text" class="input_field" id="contact_name" maxlength="60" required /> 
                          	<div class="cleaner_h10"></div> 
                            
                            <label for="email">Email:</label> <input name="contact_email" type="text" class="input_field" id="contact_email" maxlength="60" required /> 
                          	<div class="cleaner_h10"></div> 
                            
 
                            <label for="text">Vaša správa:</label> <textarea id="contact_message" name="contact_message" rows="0" cols="0" class="required"></textarea> 
                            <div class="cleaner_h10"></div> 
                            
                            <input type="submit" class="submit_btn float_l" name="contact_us" id="submit" value="Odoslať" /> 
                        
                   	</form>
<div id="error" class="text-red">
                         
                </div> 
            </div>
            
            <div class="cleaner"></div>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
    
    <?php
        include('partials/footer.php');
    ?>
    
</div> <!-- end of wrapper -->

</body>
</html>