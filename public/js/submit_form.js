(function () {
    let btn_deleteForm = document.getElementsByClassName('btn-delete');

    if (btn_deleteForm.length > 1) {
        let form = btn_deleteForm[0].parentNode,
            tab = depluralize(form.action.split('/')[3]),
            adj = tab === 'categories' ? 'cette' : 'cet';

        for (let i = 0; i < btn_deleteForm.length; i++) {
            btn_deleteForm[i].addEventListener('click', function (ev) {
                let ok = confirm(`Voulez vous vraiment supprimer ${adj} ${tab} ?`);

                if (ok === true) {
                    let deleteForm = ev.target.parentNode; // Get the form
                    deleteForm.submit();
                } else {
                    ev.preventDefault();
                }
            });
        }
    }

    function depluralize(word) {
        let filter = ['categories', 'equipements'];

        let temp = filter.indexOf(word) === -1 ? word : word.replace('e', 'é');

        return temp.slice(0, word.lastIndexOf('s'));
    }
})();
