(function () {
  let btn_deleteForm = document.getElementsByClassName('btn-delete');
  
  for (let i = 0; i < btn_deleteForm.length; i++) {
    btn_deleteForm[i].addEventListener('click', function (ev) {
      let ok = confirm('Voulez vous vraiment supprimer cet équipement ?');
      
      if (ok === true) {
        let deleteForm = ev.target.parentNode; // Get the form
        deleteForm.submit();
      } else {
        ev.preventDefault();
      }
    });
  }
})();
