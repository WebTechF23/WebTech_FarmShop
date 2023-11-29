var submitBasketBtn = document.getElementsByClassName("submitToBasketBtn");


for (let submitBasketBtnElement of submitBasketBtn) {

    submitBasketBtnElement.addEventListener("click", submitToBasket);

}

//submitBasketBtn.addEventListener("click", submitToBasket);
//document.getElementById(submitBasketBtn).addEventListener("click", submitToBasket);

var roast = document.getElementById("roast-input").value;
var steaks = document.getElementById("steaks-input").value;
var potatoes = document.getElementById("potatoes-input").value;
var minced = document.getElementById("minced-beef-input").value;
var beefSausage = document.getElementById("beef-sausage-input").value;
var beefSalami = document.getElementById("beef-salami-input").value;


const userbasket = {

    items: [
        {
            name: "roast",
            count: 0
        },
        {
            name: "steaks",
            count: 0
        },
        {
            name: "potatoes",
            count: 0
        },
        {
            name: "minced",
            count: 0
        },
        {
            name: "beefSausage",
            count: 0
        },
        {
            name: "beefSalami",
            count: 0
        },

    ]

};

function submitToBasket() {

    userbasket.items[0].count = document.getElementById("roast-input").value;
    userbasket.items[1].count = document.getElementById("steaks-input").value;
    userbasket.items[2].count = document.getElementById("potatoes-input").value;
    userbasket.items[3].count = document.getElementById("minced-beef-input").value;
    userbasket.items[4].count = document.getElementById("beef-sausage-input").value;
    userbasket.items[5].count = document.getElementById("beef-salami-input").value;

    localStorage.setItem("basketJSON2", JSON.stringify(userbasket))

    const loadedBasket2 = JSON.parse(localStorage.getItem("basketJSON2"))

    console.log(loadedBasket2)
    console.log(loadedBasket2.items[0].name)
    console.log(loadedBasket2.items[0].count)




    /*
    userbasket.roast = document.getElementById("roast-input").value;
    userbasket.steaks = document.getElementById("steaks-input").value;
    userbasket.potatoes = document.getElementById("potatoes-input").value;
    userbasket.minced = document.getElementById("minced-beef-input").value;
    userbasket.beefSausage = document.getElementById("beef-sausage-input").value;
    userbasket.beefSalami = document.getElementById("beef-salami-input").value;

    // localStorage.setItem("basket", JSON.stringify("tempbasket"));
    localStorage.setItem("basket", userbasket);
    localStorage.setItem("basketJSON", JSON.stringify(userbasket));

    //console.log(roast);

    // let testBasket = localStorage.getItem("basket");
    // let roasties = localStorage.getItem("basket");

    let loadedbasket = JSON.parse(localStorage.getItem("basketJSON"));


    console.log(loadedbasket.items[01].name);
    console.log(loadedbasket.items[0].count);

     */
    /*
        const basket = {
            items: [
                {
                    name: "chocolate",
                    count: 1
                }
            ]
        }

        // basket.items[0].count++;

        localStorage.setItem("basket", "white chocolate")
        localStorage.setItem("basketJSON", JSON.stringify(basket))

        console.log(localStorage.getItem("basket"))
        console.log("basketJSON", localStorage.getItem("basketJSON"))

        const loadedBasket = JSON.parse(localStorage.getItem("basketJSON"))
        console.log(loadedBasket)
        console.log(loadedBasket.items[0].name)
        console.log(loadedBasket.items[0].count)

        console.log(localStorage.getItem("hello"))

     */


}


/*
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

 */
