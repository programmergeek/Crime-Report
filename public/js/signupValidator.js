
// validate email address
const email = document.getElementById("email")
const email_error = document.getElementById("email-error")
const email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

email.addEventListener("change", (e) => {
    if(email_regex.test(e.target.value)){
        email_error.textContent = ""
    }else{
        email_error.textContent = "Invalid email address."
    }
})

// validate phone number
const phone_number = document.getElementById("phone-number")
const phone_error = document.getElementById("phone-error")
const phone_num_regex = /^7\d{7}/

phone_number.addEventListener("change", (e) => {
    if(phone_num_regex.test(e.target.value)){
        phone_error.textContent = ""
    }else{
        phone_error.textContent = "Enter a valid phone number."
    }
})