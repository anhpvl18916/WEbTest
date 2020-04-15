<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script>
<script>
var inputs = document.forms['summit'].getElementsByTagName('input');
  var run_onchange = false;
  function valid(){
   var errors = false;
   var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
   for(var i=0; i<inputs.length; i++){
    var value = inputs[i].value;
    var id = inputs[i].getAttribute('id');
   
    var span = document.createElement('span');
    var p = inputs[i].parentNode;
    if(p.lastChild.nodeName == 'SPAN') {p.removeChild(p.lastChild);}
   
    if(value == ''){
     span.innerHTML ='Please fill the from';
    }else{
     if(id =='user'){
     if(value.length<4){span.innerHTML = 'User must has at least 4 characters';}
     var pass = value;
     }
     if(id == 'email'){
      if(reg_mail.test(value) == false){ span.innerHTML ='Email invalid! (ex: abc@gmail.com)';}
      var email =value;
     }
     if(id == 'confirm_email' && value != email){span.innerHTML ='Invalid!';}
     if(id == 'password'){
      if(value.length <6){span.innerHTML ='Password must has at least 6 characters';}
      var pass =value;
     }
     if(id == 'confirm_pass' && value != pass){span.innerHTML ='Please input again!';}
   
    
    if(span.innerHTML != ''){
     inputs[i].parentNode.appendChild(span);
     errors = true;
     run_onchange = true;
     inputs[i].style.border = '1px solid #c6807b';
     inputs[i].style.background = '#fffcf9';
    }
   }// end for
  
   if(errors == false){alert('Success');}
   return !errors;
  }// end valid()
 

  var register = document.getElementById('submit');
  register.onclick = function(){
   return valid();
  }
 
  // Check error onchange -> recall  valid()
   for(var i=0; i<inputs.length; i++){
    var id = inputs[i].getAttribute('id');
    inputs[i].onchange = function(){
     if(run_onchange == true){
      this.style.border = '1px solid #999';
      this.style.background = '#fff';
      valid();
     }
    }
   }
</script>
</head>
<body>
      <label for="user"><b>User</b></label>
    <input type="text" placeholder="Enter User" name="user" required><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>
    <label for="cfemail"><b>Confirm Email</b></label>
    <input type="text" placeholder="Enter Email" name="cfemail" required><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="cfpsw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cfpsw" required><br>

    <button type="submit" name="submit" onclick="valid();">Submit</button>

</body>
</html>
