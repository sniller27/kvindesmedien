
  // mail regex method
  function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  function validateNewsletterForm() {
    var email = document.forms["newsletterform"]["email"].value;

    //tjekker om email er angivet
    if(email == ''){
       
        alert("Angiv venligst mail");
        return false;
        
    }else if(!validateEmail(email)){
       
        alert("Tjek venligst om din mail er skrevet korrekt");
        return false;
        
    }
  }

