
<div class="twelve columns">
    <div id="footer">
        <div id="colophonFooter">
            <div class="colophon left">
                <p>&copy; $Now.Year $SiteConfig.Title<br>$SiteConfig.AddressLine1<br>$SiteConfig.AddressLine2<br>$SiteConfig.AddressLine3</p>
            </div>
            <div class="colophon centre">
                <p>
                    <% loop $FooterLinks %>
                    <a href="$URL" title="$LinkText">$LinkText</a><% if Last %><% else %>&nbsp;|&nbsp;<% end_if %>        
                    <% end_loop %>
                </p>
            </div>
            <div class="colophon right">
                <p>Email: $SiteConfig.Email<br>Telephone: $SiteConfig.Telephone<br>Mobile: $SiteConfig.Mobile</p>

            </div>            
        </div>
        <div id="cloudLogo">
            <a href="http://suffolk.cloud"><img src = "mysite/images/cloud_footer_logo.png" alt = "suffolk cloud" /></a>
        </div>
    </div>
</div>
