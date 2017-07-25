<div class="twelve columns">
    
    <div id="standardPage" class="fullWidthLayout">
        <div class="pageContent products">
            $Content
            <% with $SiteConfig %>
                <p class="orderInfo">To order telephone Barbara on $Telephone/$Mobile or email $Email</p>
            <% end_with %>
            <% if Products %>
            <div id="productListing">
                <% loop $Products %>
                <div class="product $FirstLast clearFix">
                    <div class="imageWrap">
                        <a href="$ProductImage.SetRatioSize(800,540).URL" alt="$Title Order code: $OrderCode | Price: $Price" title="$Title - Order code: $OrderCode | Price: $Price">
                            <img src="$ProductImage.CroppedImage(330,250).URL" title="$Title" alt="$Title"/>
                        </a>                            
                    </div>
                    <div class="textWrap">
                        <h2>$Title</h2>
                        <p>$Description</p>
                        <p class="grey"><strong>Order code: </strong>$OrderCode | <strong>Price: </strong>$Price</p>

                    </div>
                </div>
                <% end_loop %>
            </div>
            <% end_if %>

            
            $Form
            $PageComments
        
        </div>
        
        <div class="rightPanel">
            <% include SubNav %>
            $MyWidgetArea
            <% include ImageLinks %>
        </div>
    </div>
</div>

<% require css("mysite/css/jquery.lightbox-0.5.css") %>
<% require javascript("mysite/javascript/jquery.lightbox-0.5.pack.js") %>
<% require javascript("mysite/javascript/imageGallery.js") %>