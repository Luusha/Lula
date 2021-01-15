function btn()
  {
      var Username = document.getElementById("user");
      var psw = document.getElementById("pass");
      if(Username.value.trim() == "")
      {
          //alert("No blank username allowed")
          Username.style.border= "solid 3px red";
          document.getElementById("userlabel").style.visibility="visible";
          return false;
      }
      else if(psw.value.trim()=="")
      {
       //alert("No blank password allowed")
       psw.style.border= "solid 3px red";
       document.getElementById("passlabel").style.visibility="visible";
          return false;
      }

      else if(psw.value.trim().length<5)
      {
       alert("minimum numbers are 5");
       psw.style.border= "solid 3px red";
          return false;
      }
       else
      {
             true;
      }
  }
