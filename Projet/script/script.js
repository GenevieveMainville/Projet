(function() {
    //<!--Source: Genevieve Mainville-->
    let elSubmit = document.querySelector("[data-js-login]")

    elSubmit.addEventListener("click",function(e){

    
    e.preventDefault(e)

    let elInputs = document.querySelectorAll("input") 
    console.log(elInputs)
    let elErreur = document.querySelector("[data-js-erreur]")
    
    let isValid = true;
    let passwordRegex = /[0-9a-zA-Z -\/:-@\[-\`{-~]{15,}/;

   for (i = 0, l = elInputs.length; i < l; i++)
   {
       
        if (elInputs[i].required && elInputs[i].value == '') {
            elErreur.classList.add('erreur');
            elErreur.textContent = "Remplissez tous les champs"
            isValid = false;
            

        } else {
            if (elErreur && elErreur.classList.contains('erreur')) {
                elErreur.classList.remove('erreur');
                elErreur.textContent = "";
            }
        }


        // VALIDATION PASSWORD

        if (elInputs[i].type == "password")
        {
            if (elInputs[i].value != "")
            {
                let password = elInputs[i].value;

                if (!passwordRegex.test(password))
                {
                    isValid = false;
                    elErreur.classList.add('erreur');
                    elErreur.textContent = "Le mot de passe doit avoir plus de 15 caractères"
                }
                else
                {
                    if (elErreur && elErreur.classList.contains('erreur')) {
                        elErreur.classList.remove('erreur');
                        elErreur.textContent = "";
                    }
                }
                
            }
        }
        
    }
    /*
    if(isValid)
    {
        window.location.href = 'r-v.php'; 
    }
    */
})

})();
