

function validateForm() {
    var f = document.forms["profile"]["fname"].value;
    var l = document.forms["profile"]["lname"].value;
    var e = document.forms["profile"]["email"].value;
    var Fname = /^\b[A-Za-z]{2,10}\b$/;
    var Lname = /^\b[A-Za-z]{2,10}\b$/;
    var Serial = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
    var mail = /(.+)@(.+){2,}\.(.+){2,}/;

    if (!f.match(Fname)) {

        alert("FirstName Invalid");
    }
    if (!l.match(Lname)) {
        alert("lastName Invalid");
    }
    if (!e.match(mail)) {
        alert("Email Invalid");
    }
}
