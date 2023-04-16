const agranda= document.querySelector('.inscrito');
agranda.classList.add('crece');

window.addEventListener('load', function() {
    carga=document.getElementsByClassName('inscrito').value;
    carga.style.display='inline';
    document.getElementsByClassName('inscrito').value=carga;


  });