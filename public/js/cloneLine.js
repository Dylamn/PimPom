(function () {

    let nbEquip = document.getElementById("nbrSnowboard");
    console.log(nbEquip);
    nbEquip.addEventListener('change', function (ev) {
        let i = ev.target.value;
        let input = document.createElement("input");
        input.id = "tailleSnowboard" + i;
        input.className = "col-md-2 form-control";
        input.setAttribute("min", "0");
        input.setAttribute("name", "tailleSnowboard" + i.toString());
        input.setAttribute("type", "number");
        document.getElementById('tailleSnowboard').appendChild(input);



});
})
();

//<input class='col-md-2 form-control' style='display: inline' min='0' name='taillesnowboard" + i + "' type='number' value='0' id='tailleSnowboard" + i + "'>"