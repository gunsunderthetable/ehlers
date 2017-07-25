<div id="navWrap" class="desktop">
    <div id="mainNav">
        <ul class="centerul">
            <% loop Menu(1) %>
            <li>
                <a href="$Link" title="$Title" class="$LinkingMode">$MenuTitle</a>
            </li>
            <% end_loop %>
        </ul>
    </div>
</div>