<form action = 'Home.php' method = 'GET'>
    <select class='form-select form-select-lg mb-3' aria-label='Large select example' onchange='this.form.submit()' name = 'Chose'>// funzione Javascript per inviare l´elemnto //selezionato senza avere un bottone 
        <option selected>Additional options</option>
        <option value='1'>Delet</option>
        <option value='2'>Insert</option>
        <option value='3'>Update</option>
    </select>
</form>
