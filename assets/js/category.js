$(document).ready(function() {
    $("#kids-link").click(function(e) {
        e.preventDefault(); // Prevent the default behavior of the anchor link
        $(".filter-tab[data-category='kids']").click(); // Trigger a click event on the "Kids" tab
    });
});
