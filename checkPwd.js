let password = document.getElementById("input-password") ;
let checkPassword = document.getElementById("input-confirmation") ;
let message = document.getElementById("message") ;

checkPassword.addEventListener('keyup', function() {
     if (password.value === checkPassword.value) {
        message.style.color = "green"
        message.innerHTML = "v The passwords entered match.";
     } else {
        message.style.color = "red"
        message.innerHTML = "! The passwords entered don't match.";
     }
})
