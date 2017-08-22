/*
 * Name: Violet - Admin JS
 * Version : 1.0.0
 * URL: http://www.rakibhossain.cf
 * Description: This js file is required for media object and protfolio Categpries
 * Author   : Rakib Hossain
/* Email    :   serakib@gmail.com                   
/* Facebook :   http://www.facebook.com/prof.rakib  
/* Github   :   http://github.com/serakib           
/* Linkedin :   https://www.linkedin.com/in/serakib 
/* Website  :   http://www.rakibhossain.cf 
 *========================================
 */

jQuery(document).ready(function($){

		//variable decleration for category
		var port_cat = $('input.port_cat');
		var portfolio_box = $('input#portfolio_cat');
		var portfolio_box_val = $('input#portfolio_cat').val(); //Constant
		var tmp_val='';
		var current_val='';

		//variable decleration for media
		var portfolio_img = $('input#portfolio_img');
		var port_img_remove = $('div.port_img_preview');
		var port_img_preview = $('img#port_img_preview');
		var portfolio_link = $('input#portfolio_link');
		var portfolio_url = portfolio_link.val();
	
	//select image
	$('button#img-portfolio_img').live('click',function(e){
		e.preventDefault();
		port_img_remove.removeClass('none');

		var img_handler = wp.media({
			'title' : 'Upload full size portfolio image',
		});

		img_handler.open();
		img_handler.on('select',function(){
			var img = img_handler.state().get('selection').first().toJSON();
			var img_link=img.url;
			portfolio_img.val(img_link);
			port_img_preview.attr('src',img_link).show();
			portfolio_link.attr('disabled','yes').val('');
		});
		
	});

	//img remove btn
	port_img_remove.on('click',function(){
			portfolio_img.val('');
			port_img_preview.attr('src','').hide();
			portfolio_link.removeAttr('disabled').val(portfolio_url);
	});

	//if hav image then hide url
	if (port_img_preview.attr('src')!='') {
		portfolio_link.attr('disabled','yes').val('');
	}


	//Portfolio Category
	port_cat.on('click',function(){
		var btn_val = $(this).val();
		var btn_val_len = btn_val.length;

			if ($(this).is(':checked')) {
				$(this).attr('checked','checked');
				if (portfolio_box.val().indexOf(btn_val) === -1) {
					tmp_val = btn_val;
					if (portfolio_box.val()=='') {
						current_val = tmp_val;
					}else{current_val = portfolio_box.val() + ' ' + tmp_val;}
					portfolio_box.val('').val(current_val);

				}else{
					portfolio_box.val('').val(portfolio_box_val);
				}
				
			}else{
				$(this).removeAttr('checked');
			if(portfolio_box.val().indexOf(btn_val) != -1){
				var rep = portfolio_box.val().replace(btn_val, '');
				rep = rep.trim();
				portfolio_box.val('').val(rep);

			}
		}
	});
});