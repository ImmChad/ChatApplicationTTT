const pswrdField = document.querySelector(".form input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

// ham hien thi password 
toggleBtn.onclick = ()=> {
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }else {
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}








