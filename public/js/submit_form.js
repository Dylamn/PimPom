(function () {
    let btn_deleteForm = document.getElementsByClassName('btn-delete');
    let text = 'ligne', form = btn_deleteForm[0].parentNode;

    switch (form.action) {
        case /utilisateurs/.test(form.action): {
            console.log('users');
            break;
        }

        default: {
            console.log('nothing');
        }
    }


    for (let i = 0; i < btn_deleteForm.length; i++) {
        btn_deleteForm[i].addEventListener('click', function (ev) {
            let ok = confirm(`Voulez vous vraiment supprimer cet équipement ?`);

            if (ok === true) {
                let deleteForm = ev.target.parentNode; // Get the form
                deleteForm.submit();
            } else {
                ev.preventDefault();
            }
        });
    }
})();
