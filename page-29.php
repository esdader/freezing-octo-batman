<?php 

 /*
  * Contact
  */

 ?>

 <?php get_header(); ?>
<div class="l-banner">
	<h1 class="banner-heady">Connect</h1>
	<?php if ( !get_field('header_description', 19) ) : ?>
		<div class="banner-description"><?php the_field('header_description', 19); ?></div>
	<?php endif; ?>
	<nav class="main-subpage-nav in-banner clearfix">
		<ul class="l-horizontal-nav clearfix">
			<li>
				<a href="<?php echo get_page_link(29); ?>" class="subpage-pill active">Contact</a>
			</li>
			<li>
				<a href="<?php echo get_page_link(31); ?>" class="subpage-pill">FAQs</a>
			</li>
		</ul>
	</nav>
</div>
<article class="l-content-panel is-first">
	<div class="l-content-panel-col-left">
		<h1 class="panel-heading">Contact</h1>
	</div>
	<div class="l-content-panel-col-right">
		<div class="l-contact-col-left">
			<section>
				<h1 class="contact-address-header">Address:</h1>
				<p>9125 Hwy 71 West
					<br>Austin, TX 78735
					<br>Suite A
				</p>
			</section>
			<section>
				<h1 class="contact-address-header">Phone:</h1>
				<p>(512) 899-2054
					<br>(866) 912-3963
				</p>
			</section>
			<section>
				<h1 class="contact-address-header contact-push-down">Email:</h1>
				<h2 class="contact-address-header-alt">Customer Service:</h2>
				<p><a href="mailto:help@primal7.com">help@primal7.com</a></p>
				<h2 class="contact-address-header-alt">Commercial Sales:</h2>
				<p><a href="mailto:buy@primal7.com">buy@primal7.com</a></p>
				<h2 class="contact-address-header-alt">General Inquiries:</h2>
				<p><a href="mailto:ask@primal7.com">ask@primal7.com</a></p>
			</section>
		</div>
		<div class="l-contact-col-right">
			<p>At Primal 7, we’re about people and relationships first. So please don’t hesitate to contact us. Whether you’ve got a question, comment, suggestion, or success story to share – we’d love to hear from you.</p> 
		</div>
	</div>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>
<article class="l-content-panel is-closed">
	<div class="toggle-btn">
		
	</div>
	<div class="l-content-panel-col-left">
		<div class="panel-heading-holder attachments-heading">
			<h1 class="panel-heading panel-heading-alt">Professionals</h1>
		</div>
	</div>
	<div class="l-content-panel-col-right">
		<?php 
			if ( get_field('professionals', $post->id) ) {
				the_field('professionals', $post->id);
			}
		?>
	</div>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>
<article class="l-content-panel is-closed">
	<div class="toggle-btn">
		
	</div>
	<div class="l-content-panel-col-left">
		<div class="panel-heading-holder attachments-heading">
			<h1 class="panel-heading panel-heading-alt">Submit a Story</h1>
		</div>
	</div>
	<div class="l-content-panel-col-right">
		<?php 
			if ( get_field('submit_a_story', $post->id) ) {
				the_field('submit_a_story', $post->id);
			}
		?>
	</div>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>
<article class="l-content-panel is-closed">
	<div class="toggle-btn">
		
	</div>
	<div class="l-content-panel-col-left">
		<div class="panel-heading-holder attachments-heading">
			<h1 class="panel-heading panel-heading-alt">Sign Up</h1>
		</div>
	</div>
	<div class="l-content-panel-col-right">
		<?php 
			if ( get_field('sign_up', $post->id) ) {
				the_field('sign_up', $post->id);
			}
		?>
		<div id="mc_embed_signup">
		<form action="http://primal7.us8.list-manage.com/subscribe/post?u=eef52e57ddc3e5e32492d3409&amp;id=fc7c0d52ff" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<h2 class="form-subheader">Contact Info</h2>
		<div class="mc-field-group">
			<label for="mce-EMAIL">Email Address</label>
			<input type="email" value="" name="EMAIL" class="required email mce-email" id="mce-EMAIL">
		</div>
		<div class="mc-field-group">
			<label for="mce-FNAME">First Name </label>
			<input type="text" value="" name="FNAME" class="mce-fname" id="mce-FNAME">
		</div>
		<div class="mc-field-group">
			<label for="mce-LNAME">Last Name </label>
			<input type="text" value="" name="LNAME" class="mce-lname" id="mce-LNAME">
		</div>
		<div class="mc-field-group">
			<label for="mce-MMERGE3">Company </label>
			<input type="text" value="" name="MMERGE3" class="mce-company" id="mce-MMERGE3">
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;"><input type="text" name="b_eef52e57ddc3e5e32492d3409_fc7c0d52ff" value=""></div>
			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</form>
		</div>
		<script type="text/javascript">
		var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';
		try {
		    var jqueryLoaded=jQuery;
		    jqueryLoaded=true;
		} catch(err) {
		    var jqueryLoaded=false;
		}
		var head= document.getElementsByTagName('head')[0];
		if (!jqueryLoaded) {
		    var script = document.createElement('script');
		    script.type = 'text/javascript';
		    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
		    head.appendChild(script);
		    if (script.readyState && script.onload!==null){
		        script.onreadystatechange= function () {
		              if (this.readyState == 'complete') mce_preload_check();
		        }    
		    }
		}

		var err_style = '';
		try{
		    err_style = mc_custom_error_style;
		} catch(e){
		    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
		}
		var head= document.getElementsByTagName('head')[0];
		var style= document.createElement('style');
		style.type= 'text/css';
		if (style.styleSheet) {
		  style.styleSheet.cssText = err_style;
		} else {
		  style.appendChild(document.createTextNode(err_style));
		}
		head.appendChild(style);
		setTimeout('mce_preload_check();', 250);

		var mce_preload_checks = 0;
		function mce_preload_check(){
		    if (mce_preload_checks>40) return;
		    mce_preload_checks++;
		    try {
		        var jqueryLoaded=jQuery;
		    } catch(err) {
		        setTimeout('mce_preload_check();', 250);
		        return;
		    }
		    var script = document.createElement('script');
		    script.type = 'text/javascript';
		    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
		    head.appendChild(script);
		    try {
		        var validatorLoaded=jQuery("#fake-form").validate({});
		    } catch(err) {
		        setTimeout('mce_preload_check();', 250);
		        return;
		    }
		    mce_init_form();
		}
		function mce_init_form(){
		    jQuery(document).ready( function($) {
		      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
		      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
		      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
		      options = { url: 'http://primal7.us8.list-manage.com/subscribe/post-json?u=eef52e57ddc3e5e32492d3409&id=fc7c0d52ff&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
		                    beforeSubmit: function(){
		                        $('#mce_tmp_error_msg').remove();
		                        $('.datefield','#mc_embed_signup').each(
		                            function(){
		                                var txt = 'filled';
		                                var fields = new Array();
		                                var i = 0;
		                                $(':text', this).each(
		                                    function(){
		                                        fields[i] = this;
		                                        i++;
		                                    });
		                                $(':hidden', this).each(
		                                    function(){
		                                        var bday = false;
		                                        if (fields.length == 2){
		                                            bday = true;
		                                            fields[2] = {'value':1970};//trick birthdays into having years
		                                        }
		                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
		                                    		this.value = '';
											    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
		                                    		this.value = '';
											    } else {
											        if (/\[day\]/.test(fields[0].name)){
		    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
											        } else {
		    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
			                                        }
			                                    }
		                                    });
		                            });
		                        $('.phonefield-us','#mc_embed_signup').each(
		                            function(){
		                                var fields = new Array();
		                                var i = 0;
		                                $(':text', this).each(
		                                    function(){
		                                        fields[i] = this;
		                                        i++;
		                                    });
		                                $(':hidden', this).each(
		                                    function(){
		                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
		                                    		this.value = '';
											    } else {
											        this.value = 'filled';
			                                    }
		                                    });
		                            });
		                        return mce_validator.form();
		                    }, 
		                    success: mce_success_cb
		                };
		      $('#mc-embedded-subscribe-form').ajaxForm(options);
		      
		      
		    });
		}
		function mce_success_cb(resp){
		    $('#mce-success-response').hide();
		    $('#mce-error-response').hide();
		    if (resp.result=="success"){
		        $('#mce-'+resp.result+'-response').show();
		        $('#mce-'+resp.result+'-response').html(resp.msg);
		        $('#mc-embedded-subscribe-form').each(function(){
		            this.reset();
		    	});
		    } else {
		        var index = -1;
		        var msg;
		        try {
		            var parts = resp.msg.split(' - ',2);
		            if (parts[1]==undefined){
		                msg = resp.msg;
		            } else {
		                i = parseInt(parts[0]);
		                if (i.toString() == parts[0]){
		                    index = parts[0];
		                    msg = parts[1];
		                } else {
		                    index = -1;
		                    msg = resp.msg;
		                }
		            }
		        } catch(e){
		            index = -1;
		            msg = resp.msg;
		        }
		        try{
		            if (index== -1){
		                $('#mce-'+resp.result+'-response').show();
		                $('#mce-'+resp.result+'-response').html(msg);            
		            } else {
		                err_id = 'mce_tmp_error_msg';
		                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
		                
		                var input_id = '#mc_embed_signup';
		                var f = $(input_id);
		                if (ftypes[index]=='address'){
		                    input_id = '#mce-'+fnames[index]+'-addr1';
		                    f = $(input_id).parent().parent().get(0);
		                } else if (ftypes[index]=='date'){
		                    input_id = '#mce-'+fnames[index]+'-month';
		                    f = $(input_id).parent().parent().get(0);
		                } else {
		                    input_id = '#mce-'+fnames[index];
		                    f = $().parent(input_id).get(0);
		                }
		                if (f){
		                    $(f).append(html);
		                    $(input_id).focus();
		                } else {
		                    $('#mce-'+resp.result+'-response').show();
		                    $('#mce-'+resp.result+'-response').html(msg);
		                }
		            }
		        } catch(e){
		            $('#mce-'+resp.result+'-response').show();
		            $('#mce-'+resp.result+'-response').html(msg);
		        }
		    }
		}

		</script>
		<!--End mc_embed_signup-->
	</div>
	<div class="panel-down-btn">
		
	</div>
	<div class="panel-up-btn">
		
	</div>
</article>


<?php get_footer(); ?>