// validate email address
const email = document.getElementById("email")
const email_error = document.getElementById("email-error")
const email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
var isEmailValid = false

email.addEventListener("change", (e) => {
    if(email_regex.test(e.target.value)){
        email_error.textContent = ""
        isEmailValid = true
    }else{
        email_error.textContent = "Invalid email address."
        isEmailValid = false
    }
    disableSubmit(isEmailValid)
})

// disable submit button when fields are invalid
const submit = document.getElementById("submit")
const buttonClasses = submit.className

const disableSubmit = (emailValidator) => {
    if(emailValidator){
        submit.className = buttonClasses
        submit.disabled = false
    }else{
        submit.className = `${buttonClasses} disabled`
        submit.disabled = true
    }
}