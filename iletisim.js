const button = document.getElementById("button-submit")
const buttonReset = document.getElementById("button-reset")
const form = document.getElementById("myForm")

button.addEventListener("click", () => {
    ControlText()
})

buttonReset.addEventListener("click", () => {
    form.reset()
})

function ControlText() {
    let text = document.getElementById("text").value
    let email = document.getElementById("email").value
    let message = document.getElementById("message").value
    if (text.trim() === "") {
        alert("İsim kısmı boş.")
        return
    }
    else if (email.trim() === "") {
        alert("Email kısmı boş")
        return
    }
    else if (message.trim() === "") {
        alert("Mesaj kısmı boş")
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


    if (emailPartDotControll == 1) {
        alert("Geçersiz email.")
        return
    }

    form.submit()

}

