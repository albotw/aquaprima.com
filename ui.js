$(document).ready(function ()
{
    $(".pure-menu-link").on("click", function ()
    {
        if (this.hash !== "")
        {
            event.preventDefault();
            let hash = this.hash;
            let anchor = $(hash);
            console.log(anchor);
            console.log(hash);
            if (anchor != null)
            {
                $('html, body').animate({
                    scrollTop: anchor.offset().top
                }, 800, function ()
                {
                    window.location.hash = hash;
                });
                $(this).parent().addClass("pure-menu-selected");
                $(".pure-menu-link[href ='" + hash + "']").parent().removeClass("pure-menu-selected");
            }
        }
    });
});
