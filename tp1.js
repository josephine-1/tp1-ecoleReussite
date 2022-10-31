
/* Partie formulaire */
let btn = document.getElementById('btn');
btn.addEventListener('click',function(e){


    var monEmail= document.getElementById('mail');
    var monPasse= document.getElementById('mdp');
    
    if (monPasse.value == ""){
        myerror=document.getElementById('error');
        myerror.innerHTML="Veillez saisir votre mot de passe";
        myerror.style.color ="red";
        e.preventDefault();
    }  
 

    
    
    if ( monEmail.value == "" ){
        myerror=document.getElementById('error');
        myerror.innerHTML="Veillez remplir votre mail!";
        myerror.style.color ="red";
        e.preventDefault();
    }
    





})
/* Inscription control */
