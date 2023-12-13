var submitBasketBtn = document.getElementsByClassName("submitToBasketBtn");

let myBasket = {
    items: []
};
// for (let submitBasketBtnElement of submitBasketBtn) {
//
//     submitBasketBtnElement.addEventListener("click", submitToBasket);
//
// }

//submitBasketBtn.addEventListener("click", submitToBasket);
//document.getElementById(submitBasketBtn).addEventListener("click", submitToBasket);

function addQuantityToObject(productObj) {

    console.log("-----------------------");

    //
    if (myBasket.items.length !== 0) {

        myBasket = JSON.parse(localStorage.getItem("loadedBasket"));

    }


    let inputElement = document.getElementById(productObj.name + "-input");

    //Value from input field, parsed to int
    let inputValue = parseInt(inputElement.value);

    //Testing
    console.log('Quantity:', inputValue);


    //Testing if the productObj is in the basket already
    if (!myBasket.items.some(item => item.name === productObj.name)) {

        myBasket.items.push(productObj);
    }

    for (let i = 0; i < myBasket.items.length; i++) {

        if (myBasket.items[i].name === productObj.name) {

            if (myBasket.items[i].quantity) {
                myBasket.items[i].quantity += inputValue;

            } else {
                myBasket.items[i].quantity = inputValue;
            }
        }
    }


    localStorage.setItem("loadedBasket", JSON.stringify(myBasket));
    let loadedBasket = JSON.parse(localStorage.getItem("loadedBasket"));


    console.log(myBasket);

    /*
    if (myBasket.items.some(item => item.name === productObj.name)) {
            // console.log("true contains");
            // console.log(productObj.name);

            for (let i = 0; i < myBasket.items.length; i++) {

                indexOf = i;
                if (myBasket.items[i].name === productObj.name) {
                    myBasket.items[i].quantity += inputValue;

                }

            }


        } else {

            productObj.quantity = parseInt(inputValue);
            myBasket.items.push(productObj);
        }
     */

    /*
        existingItemIndex = myBasket.items.findIndex(item => item.name === productObj.name);
        let existingItemIndex

        if (existingItemIndex) {
            console.log("existingItemIndex: ");
            console.log(existingItemIndex);
        }

        if (myBasket.items.some(item => item.name === productObj.name)) {
            // console.log("true contains");
            // console.log(productObj.name);



            console.log(myBasket.items.quantity);

            myBasket.items.quantity += inputValue;




        } else {

            productObj.quantity = parseInt(inputValue);
            myBasket.items.push(productObj);
        }

     */


    // console.log(productObj);
    // console.log(myBasket);

    // let forms = document.getElementById('buy-form');
    // let inputElement = forms.querySelector('input');

    // console.log(productObj.name +'-input');
    //
    // var form = document.getElementById('buy-form');
    // var inputElement = form.querySelector(productObj.name +'-input');
    //
    // quantity = inputElement.value;

    // let inputElement = document.getElementById('{{ $productInput }}');
    // let inputElement = document.getElementById("");


    // Get the input element by its ID
    // var inputElement = document.getElementById('roast-input');


    /*
        let forms = document.getElementsByClassName('buy-form');
        let products = document.getElementsByClassName('product-display');

        for (var i = 0; i < forms.length; i++) {
            console.log(forms[i].querySelector('input'));
            let inputElement = forms[i].querySelector('input');


            let titleElement = products[i].querySelector('#product-title');
            let titleText = titleElement.textContent;

            console.log(inputElement.value);

        }

     */

    /*
        let form = document.getElementById("buy-form");
        console.log(form);
        //let input = form.querySelector('input[type="number"]');

        console.log(input);

     */

    /*
    x.quantity = quantity;

    console.log("x: ");
    console.log(x);

     */


    // var forms = document.getElementsByClassName('buy-form');
    // var products = document.getElementsByClassName('product-display');
    //
    // for (var i = 0; i < forms.length; i++) {
    //     console.log(forms[i].querySelector('input'));
    //     let inputElement = forms[i].querySelector('input');
    //
    //
    //     let titleElement = products[i].querySelector('#product-title');
    //     let titleText = titleElement.textContent;
    //
    //     myBasket.items.push({
    //         name: inputElement.value,
    //         count: titleText
    //     });
    //
    //     myBasket.items.at(i).name = inputElement.value;
    //     myBasket.items.at(i).count = titleText;
    //
    //
    // }

}


function submitToBasket(i) {
    //console.log(i);

    addQuantityToObject(i);

    //console.log(i);

    // myBasket.items.push(i);

    // myBasket.push(2);
    // myBasket.push(2);


    localStorage.setItem("loadedBasket", JSON.stringify(myBasket));
    let loadedBasket = JSON.parse(localStorage.getItem("loadedBasket"));

    //console.log(loadedBasket);

    // localStorage.setItem("loadedBasket", JSON.stringify("myBasket"));
    // localStorage.setItem("loadedBasket", myBasket);
    // localStorage.setItem("basketJSON", JSON.stringify(myBasket));

    //window.onbeforeunload = function () {

    /*
    localStorage.setItem("basketJSON2", JSON.stringify(myBasket))

    const loadedBasket2 = JSON.parse(localStorage.getItem("basketJSON2"))

     */

    //console.log(loadedBasket2)
    // console.log(loadedBasket2.items[0].name)

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
