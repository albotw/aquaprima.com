$(document).ready(function ()
{
    $(".pure-menu-link").on("click", function ()
    {
        $(".pure-menu-selected").removeClass("pure-menu-selected");
        $(this).addClass("pure-menu-selected");
        $(this.hash)[0].scrollIntoView({ behavior: "smooth", block: "start" });
    });
});