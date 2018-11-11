var uname = false, pass = false;

function valid(){
        if (uname) {
                if (pass) {
                    document.signin.submit.disabled=false;
            }
            else{
                    verify(document.signin.Password);
                    document.signin.submit.disabled=true;
            }
        }
        else{
                document.signin.submit.disabled=true; 
                verify(document.signin.UserName);
        }  
    }


function verify(val){
     var a,b;
        a = document.signin.UserName.value;
        b = document.signin.Password.value;   
     
        if(val.getAttribute("name")=="UserName"){
            var re = new RegExp("^[a-zA-Z0-9_.+-]+_[a-zA-Z0-9-]+$");// xxx_xxx where x = a-z, A-Z, alphanumeric characters
            if (re.test(a))       
           {
               document.signin.UserName.style.borderColor = '#337ab7';
               uname = true; 
           }else{
               document.signin.UserName.style.borderColor = 'red';
               uname = false; 
              }
        }
        else if(val.getAttribute("name")=="Password"){
            var re = new RegExp("^[a-zA-Z0-9_.+-]+_[a-zA-Z0-9-@_]+$");// xxx_xxx 
            if (re.test(b))         
            {
                document.signin.Password.style.borderColor = '#337ab7';
                pass = true; 
            }else{
                document.signin.Password.style.borderColor = 'red';
                pass = false; 
            }
        } 
         valid();
    }








