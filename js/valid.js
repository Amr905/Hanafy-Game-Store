function validateup() {
    var f = document.forms["signup"]["fname"].value;
    var l = document.forms["signup"]["lname"].value;
    var e = document.forms["signup"]["email"].value;
    var p = document.forms["signup"]["pass"].value;
    var Fname = /^\b[A-Za-z]{2,10}\b$/;
    var Lname = /^\b[A-Za-z]{2,10}\b$/;
    var Serial = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
    var mail = /(.+)@(.+){2,}\.(.+){2,}/;
    var pass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (!f.match(Fname)) {

        alert("FirstName Invalid");
        return false;
    }
    if (!l.match(Lname)) {
        alert("lastName Invalid");
        return false;
    }
    if (!e.match(mail)) {
        alert("Email Invalid");
        return false;
    }
    if (!p.match(pass)){
        alert("Password invalid");
        return false;
    }
}
function validatein() {
    var e = document.forms["signin"]["email"].value;
    var p = document.forms["signin"]["pass"].value;

    var mail = /(.+)@(.+){2,}\.(.+){2,}/;
    var pass = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if (!e.match(mail)) {
        alert("Email Invalid");
        return false;
    }
    if (!p.match(pass)){
       alert("Password invalid");
        return false;
    }
}
