const element = document.getElementById("miras").getBoundingClientRect()
const hash = window.location.hash.substring(1)

if (hash == "mirasimiz") {
    setTimeout(function () {
        scrollTo({
            top: element.top - 200,
            behavior: "smooth",
        })
    }, 200)
}
