const form = document.getElementById("signupform");
const login = document.getElementById("login");
const pass1 = document.getElementById("password1");
const pass2 = document.getElementById("password2");
const error = document.getElementById("errmsg");
const file = document.getElementById("photo");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const country = document.getElementById("country");
const full_name = document.getElementById("full_name");

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
    if (pass1.value === "" || pass2.value === "" || pass2.value == null || pass1.value == null) {
        pass1.style += ";border-color: red;";
        pass2.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Password or password submit isn`t correct");
        if (lang == "ru")
            mess.push("Пароль или подтверждение пароля не верно");
    }
    else if (pass1.value !== pass2.value) {
        pass1.style += ";border-color: red;";
        pass2.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Password mismatch");
        if (lang == "ru")
            mess.push("Пароли не совпадают");
    }
    else {
        pass1.style += "/*;border-color: red;*/";
        pass2.style += "/*;border-color: red;*/";
    }
    if (file.value === "" || file.value == null) {
        file.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Photo not uploaded");
        if (lang == "ru")
            mess.push("Фото не загружено");
    }
    else {
        file.style += "/*;border-color: red;*/";
    }
    if (phone.value === "" || phone.value == null) {
        phone.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Phone is empty");
        if (lang == "ru")
            mess.push("Телефон не заполнен");
    }
    else {
        phone.style += "/*;border-color: red;*/";
    }
    if (country.value === "" || phone.value == null) {
        country.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Country is empty");
        if (lang == "ru")
            mess.push("Страна не заполнена");
    }
    else {
        country.style += "/*;border-color: red;*/";
    }
    if (email.value === "" || phone.value == null) {
        email.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Email is empty");
        if (lang == "ru")
            mess.push("Email не заполнен");
    }
    else {
        email.style += "/*;border-color: red;*/";
    }
    if (full_name.value === "" || phone.value == null) {
        full_name.style += ";border-color: red;";
        if (lang == "en")
            mess.push("Full name is empty");
        if (lang == "ru")
            mess.push("ФИО не заполнено");
    }
    else {
        full_name.style += "/*;border-color: red;*/";
    }
    if (mess.length > 0){
    e.preventDefault();
    error.innerHTML = mess.join('</br>');
    }
});