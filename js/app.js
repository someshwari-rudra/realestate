const navslide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector('.nav-links');

    const navlinks = document.querySelectorAll('.nav-links li');


    burger.addEventListener('click', () => {
        // toggle now
        nav.classList.toggle('nav-active');


        //animation links
        navlinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ''
            }
            else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`
            }
        });
        burger.classList.toggle('toggle');
    });


}
navslide();


// ===================login model=================================
const Show_login = document.getElementById("Show-login")
const model_container = document.getElementById("model_container")
const close_btn = document.getElementById("close-btn")
const Show_login_back = document.getElementById('Show-login-back');

Show_login.addEventListener("click", function () {
    model_container.classList.add("show");
})
close_btn.addEventListener("click", () => {
    model_container.classList.remove("show")
})
Show_login_back.addEventListener('click', function () {
    model_container1.classList.remove('show')
    model_container.classList.add('show')
})
// ===================registration model=================================
const show_registration = document.getElementById('show_registration')
const model_container1 = document.getElementById('model_container1')
const close_btn1 = document.getElementById('close-btn1')

show_registration.addEventListener("click", function () {
    model_container1.classList.add("show");
    model_container.classList.remove('show');
})
close_btn1.addEventListener("click", function () {
    model_container1.classList.remove('show')
})

// ========================validation==============================

const form = document.getElementById('registration')
const username = document.getElementById('username')
const email = document.getElementById('emailRegistration')
const passowrd = document.getElementById('passwordRegistration')
const confirmPassword = document.getElementById('confirmPassword')
const submit_btn = document.getElementById('signup')


form.addEventListener('submit', e => {
    e.preventDefault()
    checkinputs()
})

function checkinputs() {
    const usernamevalue = username.value.trim()
    const emailvalue = email.value.trim()
    const passwordvalue = passowrd.value.trim()
    const confirmpassvalue = confirmPassword.value.trim()

    if (usernamevalue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if (emailvalue === '') {
        setError(email, 'email is required')
    } else if (!isValidEmail(emailvalue)) {
        setError(email, 'provide a valid email address')
    } else {
        setSuccess(email)
    }

    if (passwordvalue === '') {
        setError(passowrd, 'password is required')
    } else if (passwordvalue.length < 6) {
        setError(passowrd, 'password must be greater than 6 characters')
    } else {
        setSuccess(passowrd)
    }

    if (confirmpassvalue === '') {
        setError(confirmPassword, 'please confirm your password')
    } else if (confirmpassvalue !== passwordvalue) {
        setError(confirmPassword, "password doesn't match")
    } else {
        setSuccess(confirmPassword)
    }
}

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};
const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}











