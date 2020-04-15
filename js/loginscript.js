const form = document.getElementById("loginform");
const login = document.getElementById("login");
const pass = document.getElementById("pass");
const error = document.getElementById("errmsg");



form.addEventListener("submit", (e) => {
    let mess = [];
    if (login.value === "" || login.value == null) {
        login.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Login is empty");
        if (lang == "ru")
            mess.push("Логин пустой");
    }
    else {
        login.style += ";/* border-color: red; */";
    }
    if (pass.value === "" || pass.value == null) {
        pass.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Password is empty");
        if (lang == "ru")
            mess.push("Пароль пустой");
    }
    else {
    pass.style += "/*;border-color: red;*/";
    }
    if (mess.length > 0){
    e.preventDefault();
    error.innerHTML = mess.join('</br>');
    }
});