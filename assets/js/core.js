(function() {

    let toggleButtons = document.getElementsByClassName("sidebar-toggle")
    let sidebar = document.getElementById("sidebar")

    if (!localStorage.getItem("cart")) {
        localStorage.setItem("cart", JSON.stringify([]))
    }

    for (button of toggleButtons) {
        button.addEventListener("click", _ => {
            sidebar.classList.toggle("active")
        })
    }
    window.addEventListener("resize", _ => {
        if (window.innerWidth >= 768) {
            sidebar.classList.remove("active")
        }
    })




}());