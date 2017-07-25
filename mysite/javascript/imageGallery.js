jQuery.noConflict();
jQuery(function($)
{
	if($('#productListing').length)
	{
            $('#productListing a').lightBox({
                imageLoading: 'mysite/images/lightbox-ico-loading.gif',
                imageBtnClose: 'mysite/images/lightbox-btn-close.gif',
                imageBtnPrev: 'mysite/images/lightbox-btn-prev.gif',
                imageBtnNext: 'mysite/images/lightbox-btn-next.gif'
            });	
	}	
});