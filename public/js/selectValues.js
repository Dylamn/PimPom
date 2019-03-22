(function() {
    document.getElementById('btn').addEventListener('click', function () {
        let nomClient, nbAdultes, nbEnfants, dateDebut, dateFin;
        const FILTER = /^nbr.+$/;
        let array = [];

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

        for (let i = 0; i < inputNumbers.length; i++) {
            if (FILTER.test(inputNumbers[i].id)) {
                array['equipment'][inputNumbers[i].id] = inputNumbers[i].value;
            }
        }

        document.getElementById('nomClientC').innerHTML = array['nomClient'];
        document.getElementById('nbrAdultesC').innerHTML = array['nbAdultes'];
        document.getElementById('nbrEnfantC').innerHTML = array['nbEnfants'];
        document.getElementById('dateDebutC').innerHTML = array['dateDebut'];
        document.getElementById('dateFinC').innerHTML = array['dateFin'];
    });
})();