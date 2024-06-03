back=()=>{
    window.location.href = 'admin-DB.php'
}

bookInv=()=>{
    window.location.href = 'admin-BI.php'
}

userAcc=()=>{
    window.location.href = 'admin-UA.php'
}

staffAcc=()=>{
    window.location.href = 'admin-SA.php'
}

genRep=()=>{
    window.location.href = 'admin-GR.php'
}

ua_createAcc=()=>{
    window.location.href = 'admin-UA-create.php'
}

save=()=>{
    window.location.href = 'BE_admin-UA-create.php'
}

const wrapper = document.querySelector('.wrapper')
const edit = document.querySelector('.bt-edit')
const iconClose = document.querySelector('.icon-close');

let popedit=(event)=>{
    wrapper.classList.add('active-popup')

    const userId = event.getAttribute('data-userid');
    const firstName = event.getAttribute('data-fname');
    const lastName = event.getAttribute('data-lname');
    const email = event.getAttribute('data-email');
    const password = event.getAttribute('data-password');
    const type = event.getAttribute('data-type');
    
    document.getElementById('user_id').value = userId;
    document.getElementById('first_name').value = firstName;
    document.getElementById('last_name').value = lastName;
    document.getElementById('email').value = email;
    document.getElementById('password').value = password;

    if (type === 'student') {
        document.querySelector('input[name="type"][value="student"]').checked = true;
    } else if (type === 'faculty') {
        document.querySelector('input[name="type"][value="faculty"]').checked = true;
    }

}

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});




