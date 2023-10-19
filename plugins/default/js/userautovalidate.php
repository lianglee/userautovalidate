//<script>
$(document).ready(function(){
		$(document).on("ajaxSuccess", function(event, xhr, settings ) {
  				//console.log(settings.url);
				if(settings.url.indexOf('action/user/register') !== -1) {	
					//console.log(xhr.responseJSON);
					if(xhr.responseJSON.success == 1){
							//console.log(1);
							window.location = Ossn.site_url + 'home';
					}
				}
		});
});