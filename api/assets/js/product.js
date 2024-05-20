(function() {
    let cartForm = document.getElementById("addToCart")
    cartForm.addEventListener("submit", form => {
        form.preventDefault()
        let _formData = new FormData(cartForm)
        let quantity = parseInt(_formData.get("quantity"))
        let cartData = JSON.parse(localStorage.getItem("cart"))

        cartData = [...cartData, {
            id: product_data.id,
            name: product_data.name,
            price: product_data.price,
            quantity: quantity
        }]
        
        localStorage.setItem("cart", JSON.stringify(cartData))

        location.href = "/cart.php"
    })


}())