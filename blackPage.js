const sleep = (delay) => new Promise((resolve) => setTimeout(resolve, delay))
const navLinks = document.getElementsByClassName("anm")
const borders = document.getElementsByClassName("border-anm")
const blackPage = document.getElementById("blackPage")

const documentTheme = localStorage.getItem("theme")

if (documentTheme == "body-black") {
    document.body.className = "body-black d-flex flex-column min-vh-100"

    for (i = 0; i < navLinks.length; i++) {
        navLinks[i].style.color = "white"
    }

    for (i = 0; i < borders.length; i++) {
        borders[i].style.borderColor = "white"
    }

    blackPage.innerHTML = "<i class='fa-regular fa-circle' style='color: #ffffff;'></i>"
}

async function backgroundColoring() {

    if (localStorage.getItem("theme") != "body-black") {
        blackPage.disabled = true
        document.body.className = "body-black-animate d-flex flex-column min-vh-100"
        localStorage.setItem("theme", "body-black")
        await sleep(2500)

        for (i = 0; i < navLinks.length; i++) {
            navLinks[i].style.color = "white"
        }

        for (i = 0; i < borders.length; i++) {
            borders[i].style.borderColor = "white"
        }

        blackPage.innerHTML = "<i class='fa-regular fa-circle' style='color: #ffffff;'></i>"

        await sleep(100)
        blackPage.disabled = false

        return true
    }
    if (localStorage.getItem("theme") == "body-black") {
        blackPage.disabled = true
        document.body.className = "body-return-animate d-flex flex-column min-vh-100"
        localStorage.setItem("theme", "body-animate")
        await sleep(2500)

        for (i = 0; i < navLinks.length; i++) {
            navLinks[i].style.color = "black"
        }

        for (i = 0; i < borders.length; i++) {
            borders[i].style.borderColor = "black"
        }

        blackPage.innerHTML = "<i class='fa-solid fa-circle'></i>"

        await sleep(100)
        document.body.className = "body-animate d-flex flex-column min-vh-100"
        blackPage.disabled = false

        return false
    }
}

blackPage.addEventListener("click", () => backgroundColoring())