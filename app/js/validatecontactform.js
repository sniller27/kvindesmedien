
  // Mail regex method
  function validateEmail(email) { 
      var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  }
  // function for formvalidation
  function validateContactForm() {
      var navn = document.forms["contactform"]["name"].value;
      var email = document.forms["contactform"]["mail"].value;
      var besked = document.forms["contactform"]["msg"].value;
      
      //checks if name is written
      if (navn == "") {
          alert("Du skal angive dit navn");
          return false;
          
      //checks if email is written and valid
      }else if(!validateEmail(email)){
         
          alert("Du skal angive din email");
          return false;
          
      //checks if anything is written in the message
      }else if(besked == ""){
         
          alert("Din besked skal indeholde noget");
          return false;
      
      }
  }
    

