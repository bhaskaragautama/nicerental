function sideDim() {
    let winHeight = window.innerHeight;
    $('.sidebar').height(winHeight);
}

sideDim();
$(window).resize(function () { 
    sideDim();
});