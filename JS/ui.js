let currentSlide = 1;
let previousSlide = null;

$(document).ready(function ()
{
    $(".pure-menu-link").on("click", function ()
    {
        $(".pure-menu-selected").removeClass("pure-menu-selected");
        $(this).addClass("pure-menu-selected");
        $(this.hash)[0].scrollIntoView({ behavior: "smooth", block: "start" });
    });

    showSlide(currentSlide);

    $(".dot").on("click", function ()
    {
        let index = $(this).attr("value");
        previousSlide = currentSlide;
        currentSlide = index;
        showSlide();
    });

    

    $(".prev").click(() => { nextSlide(-1); });
    $(".next").click(() => { nextSlide(1); });
});

function nextSlide(index)
{
    previousSlide = currentSlide;
    currentSlide += index;
    showSlide(currentSlide);
}
function showSlide()
{
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");

    if (currentSlide > slides.length) { currentSlide = 1; }
    if (currentSlide < 1) { currentSlide = slides.length; }

    for (i = 0; i < slides.length; i++)
    {
        slides[i].style.display = "none";
        dots[i].style.color = "grey";
    }
    
    slides[currentSlide - 1].style.display = "block";
    document.getElementsByClassName("dot")[currentSlide - 1].style.color = "black";
}