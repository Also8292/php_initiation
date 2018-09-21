

var httpRequest = new XMLHttpRequest();

var btnTable = document.querySelector('#btnTable');
var btnAnnuler = document.querySelector('#btnAnnuler');
var select = document.querySelector('#table');

btnTable.addEventListener('click', function(e) {
    e.preventDefault();
    
    httpRequest.onreadystatechange = function() {
   
        document.querySelector('#resultat').innerText = httpRequest.responseText
    
    }
    httpRequest.open('GET', 'post.php?table=' + select.selectedIndex + '', true);

    httpRequest.send();
});

btnAnnuler.addEventListener('click', function() {
    document.querySelector('#resultat').innerText = "";
});

