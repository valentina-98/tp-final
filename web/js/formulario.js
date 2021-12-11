const inscripcion = document.getElementById('inscription')
const contenedor = document.getElementById('contenedor-form')
const formulario = document.getElementById('formulario1')
const cruz = document.getElementById('cruz')
const menu2 = document.querySelector('.menu')


inscripcion.addEventListener('click', () => {
    contenedor.classList.toggle('showForm')
})

cruz.addEventListener('click', () => {
    contenedor.classList.toggle('showForm')
})


