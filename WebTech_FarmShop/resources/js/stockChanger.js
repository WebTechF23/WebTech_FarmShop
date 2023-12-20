function updateStock(){
    let stockChange = $('#stockChangeInput').val();

    if(isNaN(stockChange)){
        alert('Please enter a valid number');

    }

    stockChange = parseInt(stockChange);

    $.ajax({
        type: 'PATCH',
        url: '/update-stock/' +
    })
}
