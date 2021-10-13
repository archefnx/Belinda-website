document.getElementById("next-button").onclick=function () {

}
$(window).keypress(function (e) {
    if (e.key === ' ' || e.key === 'Spacebar') {
        // ' ' is standard, 'Spacebar' was used by IE9 and Firefox < 37
        e.preventDefault()
        location.reload();
    }
})
