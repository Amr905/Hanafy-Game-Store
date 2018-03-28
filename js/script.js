var slideIndex = 1;
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
        var dots = document.getElementsByClassName("dot");

        if (n > x.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = x.length }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        if (slideIndex > x.length) { slideIndex = 1 }
        x[slideIndex - 1].style.display = "grid";
        dots[slideIndex - 1].className += " active";
        slideIndex++;
    }
    window.onload = function () {
        showDivs(slideIndex);
   };
