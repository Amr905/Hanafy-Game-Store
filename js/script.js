var slideIndex = 1;
window.onload = function () {
     showDivs(slideIndex);
};



    var kimo = setInterval(showDivs, 5000);
    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        clearInterval(kimo);
        showDivs(slideIndex = n);
        kimo = setInterval(showDivs, 5000);

    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");

        if (n > x.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = x.length }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }

        if (slideIndex > x.length) { slideIndex = 1 }
        x[slideIndex - 1].style.display = "grid";
        dots[slideIndex - 1].className += " w3-opacity-off";
        slideIndex++;
        //setTimeout(showDivs, 10000);

    }
