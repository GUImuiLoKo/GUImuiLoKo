let menuCelular = document.querySelector('.menuCelular');
menuCelular.addEventListener('click',abrirMenu)


 function abrirMenu(){
    var menuPrincipal = document.querySelector('.menu');
    menuPrincipal.classList.toggle('AdicionarClasseAoClicar')
    
 }