(function() {

    let counterUp = document.getElementById("counter-up")
    let counterDown = document.getElementById("counter-down")
    let counterInput = document.getElementById("counter-input")


    function changeCounterValue(valueIncrement) {
        let min = counterInput.getAttribute("min")
        let max = counterInput.getAttribute("max")
        let value = counterInput.value

        if (parseInt(value) + valueIncrement > max || parseInt(value) + valueIncrement < min)
            return
        
        counterInput.value = parseInt(value) + valueIncrement
    }


    counterUp.addEventListener("click", function(event) {
        event.preventDefault()
        changeCounterValue(1)
    })

    counterDown.addEventListener("click", function(event) {
        event.preventDefault()
        changeCounterValue(-1)
    })


}())