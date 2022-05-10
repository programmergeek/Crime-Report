
// validate email address
const email = document.getElementById("email")
const email_error = document.getElementById("email-error")
const email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
var isEmailValid = false

// validate phone number
const phone_number = document.getElementById("phone-number")
const phone_error = document.getElementById("phone-error")
const phone_num_regex = /^7\d{7}/
var isPhoneNumValid = false

email.addEventListener("change", (e) => {
    if(email_regex.test(e.target.value)){
        email_error.textContent = ""
        isEmailValid = true
    }else{
        email_error.textContent = "Invalid email address."
        isEmailValid = false
    }
    disableSubmit(isEmailValid, isPhoneNumValid)
})


phone_number.addEventListener("change", (e) => {
    if(phone_num_regex.test(e.target.value)){
        phone_error.textContent = ""
        isPhoneNumValid = true
    }else{
        phone_error.textContent = "Enter a valid phone number."
        isPhoneNumValid = false
    }
    disableSubmit(isEmailValid, isPhoneNumValid)
})

// disable submit button when fields are invalid
const submit = document.getElementById("submit")
const buttonClasses = submit.className

const disableSubmit = (emailValidator, phoneNumberValidator) => {
    if(emailValidator && phoneNumberValidator){
        submit.className = buttonClasses
        submit.disabled = false
    }else{
        submit.className = `${buttonClasses} disabled`
        submit.disabled = true
    }
    console.log(submit.className)
}