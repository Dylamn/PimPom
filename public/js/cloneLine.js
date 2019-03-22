(function() {
    let nbEquip = document.getElementById("nbSnowboard");

    nbEquip.addEventListener('change', function(v){
        for (let i = 1; i <= nbEquip.value; i++) {
            let clone = document.getElementById('tailleSnowboard').cloneNode(true);
            clone.id = 'tailleSnowboard'+i;
            document.getElementById("tailleSnowboard").append(clone);
            console.log(clone)
        }
    });

    for (let i = 0; i < nbEquip; i++) {
        console.log('nb : '+nbEquip.value);
    }
})();