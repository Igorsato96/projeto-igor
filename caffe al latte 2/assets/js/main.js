document.addEventListener("DOMContentLoaded", () => {


    $(".product-colors span").click(function() {
        $(".product-colors span").removeClass("active");
        $(this).addClass("active");
        $(".product-pic-cha").css("background-image", $(this).attr("data-pic"));
        $(".text-random").text($(this).attr("data-text"));
        $(".text-pop-up").text($(this).attr("data-text"));
    });

    $(".product-colors-milk span").click(function() {
        $(".product-colors-milk span").removeClass("active");
        $(this).addClass("active");
        $(".product-pic-milkshake").css("background-image", $(this).attr("data-pic1"));
        $(".text-random1").text($(this).attr("data-text1"));
        $(".text-pop-up").text($(this).attr("data-text1"));
    });

});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}