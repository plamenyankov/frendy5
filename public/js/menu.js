
$(function () {
    $(".toggles").on("click", function () {
        if ($(".toggles").attr("data-toggle") == "hide") {
            $(".side-nav").show();
            $(".toggles").attr("data-toggle", "show");

        }
        else {
            $(".side-nav").hide();
            $(".toggles").attr("data-toggle", "hide");

        }
    });
});