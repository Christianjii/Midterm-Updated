<?php
	/*Template Name: CONTACTUS*/
	get_header();
?>
<div class="container">
	<div class="container contact-form">
	<h1>Contact form</h1>
	<hr>

	<div class="row">
   
       <div class="col-md-6">
       	<address> Blk 6 Lot 4 Meadowville Subd. Imus, Cavite</address>
       	<p>Email: cjayrivera17@gmail.com</p>
       	<p>Phone: 09394455774</p>
       </div>

       <div class="col-md-6">
       	
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" class="form-control">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" class="form-control">
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea  class="form-control" rows="7"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block">Send</button>
         </div>

       </div>

    </div>

</div>
</div>


<?php get_footer(); ?>