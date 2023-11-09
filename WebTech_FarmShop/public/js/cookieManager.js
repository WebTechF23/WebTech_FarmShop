const basket = {
    items: [
        {
            name: "chocolate",
            count: 1
        }
    ]
}

localStorage.setItem("basket", "white chocolate")
localStorage.setItem("basketJSON", JSON.stringify(basket))

console.log(localStorage.getItem("basket"))
console.log("basketJSON", localStorage.getItem("basketJSON"))

const loadedBasket = JSON.parse(localStorage.getItem("basketJSON"))
console.log(loadedBasket)
console.log(loadedBasket.items[0].name)
console.log(loadedBasket.items[0].count)

console.log(localStorage.getItem("hello"))

//Cookie lovgivning, alert() evt., nødvendige
