To avoid the problem of not knowing weather to use http or https for remote urls

Example (include external tracking js file):

{if is_ssl()}
    https://example.com/tracking.js
    //tpl code
{else}
    http://example.com/tracking.js
{/if)