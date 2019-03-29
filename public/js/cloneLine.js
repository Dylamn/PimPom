(function () {

    let nbPersonnes = document.getElementById("nbPersonnes");
    //console.log(nbPersonnes.value);

    let div = document.getElementById("detailsReservation");
    nbPersonnes.addEventListener('click', function () {

        for (let i = 1; i <= nbPersonnes.value; i++) {

            let div2 = document.createElement("div");
            div2.id = "divClient" + 1;
            div2.className = "row";

            let prenomClient = document.createElement("label");
            prenomClient.className = "col-md-2 col-form-label text-md-right";
            prenomClient.id = "prenomClient";
            prenomClient.setAttribute("for", "prenomClient");
            prenomClient.innerHTML = "Prénom du client : ";
            div2.appendChild(prenomClient);

            let prenomClientInput = document.createElement("input");
            prenomClientInput.id = "prenomClient" + i;
            prenomClientInput.className = "col-md-3 form-control";
            prenomClientInput.style ="display: inline";
            prenomClientInput.setAttribute("name","prenomClient" + i.toString());
            prenomClientInput.setAttribute("type","text");
            div2.appendChild(prenomClientInput);

            div.appendChild(div2);
            // let inputLab = document.createElement("label");
            // inputLab.className = "col-md-1 col-form-label text-md-right";
            // inputLab.setAttribute("for", "tailleSnowboard" + i.toString());
            // inputLab.innerHTML = "taille : ";
            // div.appendChild(inputLab);


            // let input = document.createElement("input");
            // input.id = "tailleSnowboard" + i;
            // input.className = "col-md-2 form-control";
            // input.style = "display: inline";
            // input.setAttribute("min", "0");
            // input.setAttribute("name", "tailleSnowboard" + i.toString());
            // input.setAttribute("type", "number");
            // document.getElementById('tailleSnowboard').appendChild(input);
            //
            // let inputLabC = document.createElement("label");
            // inputLabC.className = "col-md-1 col-form-label text-md-right form-check-label";
            // inputLabC.setAttribute("for", "enfantSnowboard" + i.toString());
            // inputLabC.innerHTML = "Enfant : ";
            // document.getElementById('tailleSnowboard').appendChild(inputLabC);
            //
            // let checkChild = document.createElement("input");
            // checkChild.id = "enfantSnowboard" + i;
            // checkChild.className = "col-md-2 form-check-input";
            // checkChild.style = "display: inline";
            // checkChild.setAttribute("name", "enfantSnowboard" + i.toString());
            // checkChild.setAttribute("value", "enfantSnowboard" + i.toString() + "[]");
            // checkChild.setAttribute("type", "checkbox");
            // document.getElementById('tailleSnowboard').appendChild(checkChild);
        }
    })

})
();

//<input class='col-md-2 form-control' style='display: inline' min='0' name='taillesnowboard" + i + "' type='number' value='0' id='tailleSnowboard" + i + "'>"
