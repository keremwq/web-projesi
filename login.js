$(document).ready(function () {
    let pageHash = window.location.hash.slice(1)
    const wrongAlertContainer = document.getElementById("alert")

    if (pageHash == "wrong") {
        wrongAlertContainer.innerText = "Yanlış kullanıcı adı ya da şifre";

        $("#alert").fadeOut(1000);
    }
})
