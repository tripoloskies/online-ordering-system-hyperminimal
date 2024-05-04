(function() {


    var totalPrice = 0
    var listsBox = document.getElementById("cart-box-lists")
    var totalPriceLabel = document.getElementById("total-price-label")
    var totalPriceInput = document.getElementById("total-price-input")
    function reload() {
        var cartData = JSON.parse(localStorage.getItem("cart"))

        listsBox.innerHTML = ""

        for (let index = 0; index < cartData.length; index++) {
            let data = cartData[index]
            var container = document.createElement("div")
            var descriptionContainer = document.createElement("div")
            var priceContainer = document.createElement("div")
            var priceLabel = document.createElement("b")
            var nameLabel = document.createElement("h4")
            var descLabel = document.createElement("p")
    
            container.classList.add("cart-box-list")
            descriptionContainer.classList.add("cart-box-description")
            nameLabel.textContent = data.name
            descLabel = `${data.price.name}`

            totalPrice += data.price.value

            priceLabel.textContent = `Php ${data.price.value}.00`
            priceContainer.append(priceLabel)
            descriptionContainer.append(nameLabel)
            descriptionContainer.append(descLabel)
            container.append(descriptionContainer)
            container.append(priceContainer)
            listsBox.append(container)
        }
    }

    reload()

    totalPriceLabel.textContent = `Php ${totalPrice}.00`
    totalPriceInput.value = totalPrice
}())