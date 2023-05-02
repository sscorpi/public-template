<?php
function HelpItem($props)
{
    return <<<HTML
    <section data-type="fraud-component" id="{$props["id"]}" class="page-content secondary-bg">
        <div class="content white-text">
            <h1 class="header-title">{$props["title"]}</h1>
            <p class="header-sub-text">
                {$props["description"]}
            </p>
            <p class="header-sub-text">
                Also this page will scroll to top on load. You can edit scrolling pages from <code class="link blue-text text-bg text-bg-p-hlf">/.fraud/js/exports/scroll_top.js</code>
            </p>
        </div>
    </section>
HTML;
}
