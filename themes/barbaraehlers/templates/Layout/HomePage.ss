<div class="row">
    <div id="pagePanel">
        <div id="homePanel" class="fullWidthLayout">
           
            <% if Slides %>
            <div id="sliderBox" class="desktop clearFix">
                <div class="content">
                    <div class="flexslider loading">
                      <ul class="slides">
                        <% loop Slides %>
                            <li>
                                <img src="$SlideImage.CroppedImage(600,250).URL" alt="$Title" title="$Title" />
                                <%-- <p class="flex-caption">
                                    <span>$Title</span>$Description
                                    <% if $PageID || $ExternalLink %>
                                        <% if $PageID %>
                                            <% with $Page %><a href="$Link">Read more</a><% end_with %>
                                        <% else %>
                                            <a href="$ExternalLink" target="_blank">Read more</a>
                                        <% end_if %>
                                    <% end_if %>
                                </p> --%>
                            </li>
                        <% end_loop %>
                      </ul>
                    </div>
                </div>
            </div>
            <% end_if %>



            <% if Boxes %>
            <div id="boxWrapper">
            <% loop $Boxes %>
                <div class="box pos-$Modulus(3)">
                    <div class="content">
                        <a href="$LinkPage.Link">
                        <% if $BoxImageID %>
                            <img src="$BoxImage.CroppedImage(520,420).URL" alt="$Title" title="$Title" />
                        <% end_if %>
                        <div class="boxText<% if $TextShadow %> textShadow<% end_if %>">
                        <h2 class="$Colour">$Title</h2>
                        <p class="$Colour">$Description</p>
                        </div>
                       </a>
                    </div>
                </div>
            <% end_loop %>
            </div>
            <% end_if %>
        </div> 

    </div>
</div>
<% require javascript(mysite/javascript/jquery.flexslider-min.js) %>
<% require javascript(mysite/javascript/flex_init.js) %>

<% require css(mysite/css/flexsliderbox.css) %>
<% require css(themes/barbaraehlers/css/slideboxhomepage.css) %>

