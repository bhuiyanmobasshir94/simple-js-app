var f_name = false,l_name = false,email = false,uname = false,pass = false,cpass = false;
function valid(){
        if(f_name) {
            if(l_name){
               if(email){
                if(uname){
                    if (pass) {
                    if (cpass) {
                            document.signup.submit.disabled=false;
                    }
                    else{
                            verify(document.signup.Cpassword);
                            document.signup.submit.disabled=true;
                    }
                }
                else{
                        verify(document.signup.Password);
                        document.signup.submit.disabled=true;
                }
               }else{
                    document.signup.submit.disabled=true; 
                    verify(document.signup.UserName);
               }
               }else{
                document.signup.submit.disabled=true; 
                verify(document.signup.Email);   
               }
            }else{
                document.signup.submit.disabled=true; 
                verify(document.signup.LastName);
            }
        }
        else{
                document.signup.submit.disabled=true; 
                verify(document.signup.FirstName);
        }      
    }


function verify(val){
     var a,b,c,d,e,f;
        a = document.signup.FirstName.value;
        b = document.signup.LastName.value;
        c = document.signup.Email.value;
        d = document.signup.UserName.value;    
        e = document.signup.Password.value;
        f = document.signup.Cpassword.value;

        if(val.getAttribute("name")=="FirstName"){
            var re = new RegExp("^[A-Z][a-zA-Z]");//Start with capital letter
            if (re.test(a))
            {
                document.signup.FirstName.style.borderColor = '#337ab7';
                f_name = true;
            }else{
                document.signup.FirstName.style.borderColor = 'red';
                f_name = false;
            }
        }
        else if(val.getAttribute("name")=="LastName"){
            var re = new RegExp("^[A-Z][a-zA-Z]");//Start with capital letter
            if (re.test(b))
            {
                document.signup.LastName.style.borderColor = '#337ab7';
                l_name = true; 
            }else{
                document.signup.LastName.style.borderColor = 'red';
                l_name = false; 
            }
        }
        else if(val.getAttribute("name")=="Email"){
            var re = new RegExp("^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$");// combination: as expected email
            if (re.test(c))
           {
               document.signup.Email.style.borderColor = '#337ab7';
               email = true; 
           }else{
               document.signup.Email.style.borderColor = 'red';
               email = false; 
           }
       }
       else if(val.getAttribute("name")=="UserName"){
        var re = new RegExp("^[a-zA-Z0-9_.+-]+_[a-zA-Z0-9-]+$");// xxx_xxx where x = a-z, A-Z, alphanumeric characters
        if (re.test(d))       
       {
           document.signup.UserName.style.borderColor = '#337ab7';
           uname = true; 
       }else{
           document.signup.UserName.style.borderColor = 'red';
           uname = false; 
          }
      }
      else if(val.getAttribute("name")=="Password"){
        var re = new RegExp("^[a-zA-Z0-9_.+-]+_[a-zA-Z0-9-@_]+$");// xxx_xxx 
        if (re.test(e))         
        {
            document.signup.Password.style.borderColor = '#337ab7';
            pass = true; 
        }else{
            document.signup.Password.style.borderColor = 'red';
            pass = false; 
        }
     } 
      else if(val.getAttribute("name")=="Cpassword"){
        if(e!= f){
        document.signup.Cpassword.style.borderColor = 'red';
            cpass=false;
        }
        else{
        document.signup.Cpassword.style.borderColor = '#337ab7';
            cpass=true;
        }
    }
    valid();
    }









