const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const loginButton = document.querySelector('.login-button');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

loginButton.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});

function validateLoginForm(){
    var email = document.getElementById('login_email').value;
    var password = document.getElementById('login_password').value;

    if(email==="1@admin" && password ==='admin123'){
        window.location.href='admin-DB.php'
        return true;
    } else if (email === "" || password === ""){
        alert("Please fill in all fields.");
        return false;
    }

    return true;
}

function validateRegisterForm(){
    var fname = document.getElementById('reg_fname').value;
    var lname = document.getElementById('reg_lname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('reg_password').value;
    var type = document.getElementById('input[name="type"]:checked').value;
    
    

    if(fname===""||lname===""||email===""||password===""||!type){
        alert("Please fill in all fields.");
        return false;
    }

    return true;
}


// hello