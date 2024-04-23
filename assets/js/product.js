(function() {
    let cartForm = document.getElementById("addToCart")

    cartForm.addEventListener("submit", form => {
        form.preventDefault()
        let _formData = new FormData(cartForm)
        let type = _formData.get("type")
        let cartData = JSON.parse(localStorage.getItem("cart"))

        cartData = [...cartData, {
            id: product_data.id,
            name: product_data.name,
            price: {
                name: type,
                value: product_data.prices[type]
            }
        }]
        
        localStorage.setItem("cart", JSON.stringify(cartData))

        console.log(cartData)
    })
}())