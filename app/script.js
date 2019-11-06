var btnLogin = document.getElementById('btnLogin')
var login = document.getElementById('login')

var btnRegister = document.getElementById('btnRegister')
var register = document.getElementById('register')

btnLogin.addEventListener('click', ()=>{
    register.classList.remove('active')
    login.classList.add('active')
})

btnRegister.addEventListener('click', ()=>{
    login.classList.remove('active')
    register.classList.add('active')
})