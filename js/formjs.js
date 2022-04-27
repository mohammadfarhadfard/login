var userName= document.getElementById('user-name')
var password= document.getElementById('user-pass')
var submit= document.getElementById('submit')

submit.addEventListener('click',validation)

function validation () { 
   if (userName.value.length < 4){
       alert("Username must be longer than four characters")
       return false;
   }
   if (password.value.length < 6) {
    alert("password must be longer than six characters")
    return false;
  }
  alert("done")
}