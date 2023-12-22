import './bootstrap';

var submitBasketBtn = document.getElementsByClassName("submitToBasketBtn");


let myBasket = {items: []};


for (let submitBasketBtnElement of submitBasketBtn) {

    submitBasketBtnElement.addEventListener("click", submitToBasket);

}

//submitBasketBtn.addEventListener("click", submitToBasket);
//document.getElementById(submitBasketBtn).addEventListener("click", submitToBasket);

function getInputVals() {

    // myBasket = {items: []};


    var forms = document.getElementsByClassName('buy-form');
    var products = document.getElementsByClassName('product-display');

    for (var i = 0; i < forms.length; i++) {
        let inputElement = forms[i].querySelector('input');

        let titleElement = products[i].querySelector('#product-title');
        let titleText = titleElement.textContent;

        myBasket.items.at(i).name = inputElement.value;
        myBasket.items.at(i).count = titleText;

        // myBasket.items.push({
        //     name: inputElement.value,
        //     count: titleText
        // });

    }

}


function submitToBasket() {

    getInputVals();

    // localStorage.setItem("loadedBasket", JSON.stringify("myBasket"));
    // localStorage.setItem("loadedBasket", myBasket);
    // localStorage.setItem("basketJSON", JSON.stringify(myBasket));


    localStorage.setItem("basketJSON2", JSON.stringify(myBasket))

    const loadedBasket2 = JSON.parse(localStorage.getItem("basketJSON2"))

    console.log(loadedBasket2)
    console.log(loadedBasket2.items[0].name)
    // // console.log(loadedBasket2.items[1].name)
    // console.log(loadedBasket2.items[0].count)
    // console.log(loadedBasket2.items[1].count)
    // console.log(loadedBasket2.items[1].name)


    /*


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
