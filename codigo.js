document.addEventListener("DOMContentLoaded", function() {

    var btnRadio1 = document.getElementById("btnradio1");
    var btnRadio2 = document.getElementById("btnradio2");


    btnRadio1.addEventListener("click", function() {
        var divC=document.getElementById("CURPCont");
        var divD=document.getElementById("DatosCont");
        divC.style.display = "block";
        divD.style.display = "none";
    });

    btnRadio2.addEventListener("click", function() {
        var divC=document.getElementById("CURPCont");
        var divD=document.getElementById("DatosCont");
        divC.style.display = "none";
        divD.style.display = "block";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var select = document.getElementById("exampleFormControlSelect1");
    for (var i = 1; i <= 30; i++) {
    var option = document.createElement("option");
    option.text = "Option " + i;
    select.add(option);
    }
});