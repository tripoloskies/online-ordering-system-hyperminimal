(function() {

    var listsBox = document.getElementById("cart-box-lists")
    var checkoutBtn = document.getElementById("checkout-button")

    function reload() {
        var cartData = JSON.parse(localStorage.getItem("cart"))

        listsBox.innerHTML = ""

        if (!cartData.length)
            checkoutBtn.style.display = 'none'

        for (let index = 0; index < cartData.length; index++) {
            let data = cartData[index]
            var container = document.createElement("div")
            var descriptionContainer = document.createElement("div")
            var actionsContainer = document.createElement("div")
            var deleteButton = document.createElement("button")
            var nameLabel = document.createElement("h4")
            var descLabel = document.createElement("p")
            var imageContainer = document.createElement("div")
            var img = document.createElement("img")

            imageContainer.classList.add("cart-box-image")
            container.classList.add("cart-box-list")
            descriptionContainer.classList.add("cart-box-description")
            actionsContainer.classList.add("cart-box-actions")
            deleteButton.classList.add("btn", "danger")
            
            deleteButton.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" style="color: #fff">
                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
            </svg>
            Delete
            `
            nameLabel.textContent = data.name
            descLabel = `$${data.price}.00 | ${data.quantity}pc(s)`

            img.src = `/assets/img/products/${data.id}.jpg`
            deleteButton.addEventListener("click", () => {
                cartData.splice(index, 1)
                localStorage.setItem("cart", JSON.stringify(cartData))
                reload()
            })
            

            imageContainer.append(img)
            descriptionContainer.append(nameLabel)
            descriptionContainer.append(descLabel)

            actionsContainer.append(deleteButton)
            container.append(imageContainer)
            container.append(descriptionContainer)
            container.append(actionsContainer)
            listsBox.append(container)
        }
    }

    reload()
}())