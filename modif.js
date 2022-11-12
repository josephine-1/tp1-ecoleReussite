let champreqEmail= document.getElementById("champ-reqEmail")
let emailInvalid= document.getElementById("email-invalid")
let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
let submit = document.getElementById("submit")
let champreqPrenom = document.getElementById("champ-reqPrenom")
let champreqNom = document.getElementById("champ-reqNom")
let nom = document.getElementById("nom")
let prenom = document.getElementById("prenom")
let email = document.getElementById("mail")
let confirmation = document.getElementById("confirmation") 


const checkEmail = () =>{
    resetEmail ()
    if(mail.value.trim() === ""){
        champreqEmail.classList.remove("d-none")
        champreqEmail.classList.add("d-flex")
        mail.style.border= "1px solid red"
        return false;
    }
    if(!regex.test(mail.value.trim())){
        emailInvalid.classList.remove("d-none")
        emailInvalid.classList.add("d-flex")
        mail.style.border= "1px solid red"
        
return false;
    }
   
    resetEmail()
    return true;
  
  }
  const resetEmail = () =>{
    champreqEmail.classList.remove("d-flex")
    champreqEmail.classList.remove("d-none")
    emailInvalid.classList.remove("d-flex")
    emailInvalid.classList.remove("d-none")
    mail.style.border= "1px solid black"
  }
  const resetNom = () =>{
    champreqNom.classList.remove("d-flex")
    champreqNom.classList.remove("d-none")
    nom.style.border= "1px solid black"
    
  }

  const checknom = () =>{
    resetNom()
    if(nom.value.trim() === ""){
        champreqNom.classList.remove("d-none")
        champreqNom.classList.add("d-flex")
        nom.style.border= "1px solid red"
        return false;
    }
    resetNom()
    return true;
  }
  const resetPrenom = () =>{
    champreqPrenom.classList.remove("d-flex")
    champreqPrenom.classList.remove("d-none")
    prenom.style.border= "1px solid black"    
  }

  const checkprenom = () =>{
    resetPrenom()
    if(prenom.value.trim() === ""){
        champreqPrenom.classList.remove("d-none")
        champreqPrenom.classList.add("d-flex")
        prenom.style.border= "1px solid red"
        return false;
    }
    resetPrenom()
    return true;
  }

  submit.addEventListener("click",(e) => {
    console.log("clicked");
  if((!checkEmail() && !checkmdp1() && !checkmdp2() && !checknom() && !checkprenom() && !checkroles()   ) || !checkEmail() || !checkmdp1() || !checkmdp2() || !checknom() || !checkprenom() || !checkroles() ){
    e.preventDefault()
   
  }

  })