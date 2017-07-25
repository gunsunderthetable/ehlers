<div id="header" <% if $SiteConfig.HeaderDepth %>style="height:{$SiteConfig.HeaderDepth}px;"<% end_if %>>
    <img class="masthead desktop" src="$ThemeDir/images/logo.gif" alt="barbara ehlers" title ="barbara ehlers" />
</div>

<div id="mobileHeader" class="mobile">
    <img class="masthead" src="$ThemeDir/images/logo.gif" alt="barbara ehlers" title ="barbara ehlers" />
    <a class="menuButton mobileNav" id="sidr-menu" href="#sidr"><img src="$ThemeDir/images/mobile_menu_black.png" alt="mobile menu button" /></a>
</div>

<% include MainNav %>
