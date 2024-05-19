$(document).ready(function () {
    let pageHash = window.location.hash.slice(1)
    const wrongAlertContainer = document.getElementById("alert")

    if (pageHash == "wrong") {
        wrongAlertContainer.innerText = "Yanlış kullanıcı adı ya da şifre";

        $("#alert").fadeOut(2500);
    }
})

const button = document.getElementById("button-submit")
const form = document.getElementById("myForm")

button.addEventListener("click", () => {
    let email = document.getElementById("mail").value
    let pass = document.getElementById("pass").value

    if (pass.trim() === "") {
        alert("Şifre kısmı boş.")
        return
    }
    else if (email.trim() === "") {
        alert("Email kısmı boş")
        return
    }
    else if (!email.includes("@")) {
        alert("Geçersiz email.")
        return
    }


    let etIndex = email.indexOf("@")
    let emailPart = email.substring(etIndex, email.length)
    if (!emailPart.includes(".")) {
        alert("Geçersiz email.")
        return
    }

    let emailPartDotControll = emailPart.indexOf(".")
    if (emailPartDotControll == emailPart.length - 1) {
        alert("Geçersiz email.")
        return
    }

    form.submit()
})
