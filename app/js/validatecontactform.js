
  // mail regex method
  function validateEmail(email) { 
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  }

  function validateContactForm() {
      var navn = document.forms["contactform"]["name"].value;
      var email = document.forms["contactform"]["mail"].value;
      var besked = document.forms["contactform"]["msg"].value;
      
      //tjekker om navn er angivet
      if (navn == "") {
          alert("Du skal angive dit navn");
          return false;
          
      //tjekker om email er angivet
      }else if(!validateEmail(email)){
         
          alert("Du skal angive din email");
          return false;
          
      //tjekker om titel er angivet
      }else if(besked == ""){
         
          alert("Din besked skal indeholde noget");
          return false;
      
      }
  }
    

