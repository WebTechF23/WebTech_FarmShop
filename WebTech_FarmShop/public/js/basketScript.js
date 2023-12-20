console.log("BASKET BUY YEE");


function updateBasket() {

    console.log("---------------");

    let storedBasket = localStorage.getItem("loadedBasket");
    myBasket = JSON.parse(storedBasket);

    let basketContainer = document.getElementById('basket-main');


    // basketContainer.innerHTML = " ";

    myBasket.items.forEach(item => {

        let element = document.createElement('div');

        let itemName = item.name;

        let newitemName;
        newitemName = itemName.charAt(0).toUpperCase() + itemName.slice(1);

        newitemName = newitemName.replace(/_/g, ' ');


        let inputElement = document.createElement('input');
        inputElement.type = 'number';
        inputElement.min = 1;
        inputElement.value = item.quantity; // Set the value to the item's quantity
        inputElement.max = 100;
        inputElement.name = item.name;
        inputElement.id = item.name + 'Input-Id'; // Replace with your actual dynamic ID


        element.innerHTML = `<h3>${newitemName}</h3>`;
        element.appendChild(inputElement);


        let removeButton = document.createElement('button');
        removeButton.textContent = 'Remove type from basket';
        removeButton.addEventListener('click', function () {
            // Handle the removal of the corresponding element when the button is clicked
            basketContainer.removeChild(element);
        });

        element.appendChild(removeButton);


        basketContainer.append(element);

    });


}


function finalizePurchase() {

    console.log("Finalize Purchase: ");

    let storedBasket = localStorage.getItem("loadedBasket");
    myBasket = JSON.parse(storedBasket);


    //Testing
    // console.log(document.getElementById("steaksInput-Id").value);
    // let stockId =


    var request = new XMLHttpRequest();
    console.log("hello");
    request.open('POST',`/purchase?data=${myBasket}`,true);

    request.onload = function (){
        if (request.status == 200){
            //lave kode he

        }else {
            console.log("Error: " + request.statusText)
        }

    }

    request.send();

    /*$.ajax({
        type:'POST',
        url: '/purchase',
        data: myBasket,
        dataType:'json',
        success: function (){
            console.log(("success"));
        },
        error: function (){
            console.log("Error");
        }
    })*/
}

