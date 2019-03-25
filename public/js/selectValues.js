(function() {
    //add eventListener au boutton suivant ev.preventDefault()
    document.getElementById('btn').addEventListener('click', function () {
        let nomClient, nbAdultes, nbEnfants, dateDebut, dateFin, table, tr, td;
        const FILTEREQUIP = /^nbr.+$/;
        const FILTERTAILLE = /^taille.+$/;
        let array = [];

        table = document.getElementById('table_recap');
        nomClient = document.getElementById('nomClient').value;
        nbAdultes = document.getElementById('nbAdultes').value;
        nbEnfants = document.getElementById('nbEnfants').value;
        dateDebut = new Date(document.getElementById('dateDebut').value);
        dateFin = new Date(document.getElementById('dateFin').value);
        let inputNumbers = document.querySelectorAll('input[type="number"]');

        array['nomClient'] = nomClient;
        array['nbAdultes'] = nbAdultes;
        array['nbEnfants'] = nbEnfants;
        array['dateDebut'] = dateDebut.toLocaleDateString('fr-FR');
        array['dateFin'] = dateFin.toLocaleDateString('fr-FR');
        array['equipment'] = [];
        array['taille'] = [];

        for (let i = 0; i < inputNumbers.length; i++) {
            if (FILTEREQUIP.test(inputNumbers[i].id)) {
                array['equipment'][inputNumbers[i].id] = inputNumbers[i].value;
            }
        }

        for (let i = 0; i < inputNumbers.length; i++) {
            if (FILTERTAILLE.test(inputNumbers[i].id)) {
                array['taille'][inputNumbers[i].id] = inputNumbers[i].value;
            }
        }

        document.getElementById('nomClientC').innerHTML = array['nomClient'];
        document.getElementById('nbrAdultesC').innerHTML = array['nbAdultes'];
        document.getElementById('nbrEnfantC').innerHTML = array['nbEnfants'];
        document.getElementById('dateDebutC').innerHTML = array['dateDebut'];
        document.getElementById('dateFinC').innerHTML = array['dateFin'];

        for (let taille in array['taille']) {
            tr = document.createElement('tr');
            td = document.createElement('td');

            //document.getElementById('equipment').innerHTML = taille.substr(6);
            //document.getElementById('taille').innerHTML = array['taille'][taille];

            td.createTextNode(taille.substr(6))
        }

        console.log(array);
    });
})();
