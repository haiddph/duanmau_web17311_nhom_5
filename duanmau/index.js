function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
// first make sure the plugin has generated the html
$(document).ready(function() {

    // select the buttons
    buttons = $('.main-carousel .flickity-button')

    // add them to a newly created div
    new_div = $('<div class="my-div"></div>').append(buttons)

    // append the new div (my-div) to .main-carousel
    $('.main-carousel').append(new_div)
})