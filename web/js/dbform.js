document.getElementById('formulario1').addEventListener('submit', function(e){
    e.preventDefault();

/* El evento submit por defecto recarga la página, este parametro es
para evitarlo*/

    let formulario = new FormData(document.getElementById('formulario1'));
    
});


/*Llamar al archivo que va a procesar la siguiente petición.
Petición: limpiar los campos si data==true */
fetch('enviar.php', {
    method: 'POST',
    body: formulario
})
.then(res => res.json())
.then(data => {
    if(data == 'true') {
        document.getElementById('nommbre').value = '';
        document.getElementById('apellido').value = '';
        document.getElementById('mail').value = '';
        document.getElementById('mensaje').value = '';
        alert('Su mensaje ha sido enviado.')
    } else {
        console.log(data);
    }
})