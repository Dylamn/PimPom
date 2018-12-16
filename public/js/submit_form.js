(function () {
    let btn_deleteForm = document.getElementById('btn-delete');

    btn_deleteForm.addEventListener('click', function (ev) {
        let ok = confirm('Voulez vous vraiment supprimer cet équipement ?');

        if (ok === true) {
            document.forms['delete_form'].submit();
        } else {
            ev.preventDefault();
        }
    });
})();
