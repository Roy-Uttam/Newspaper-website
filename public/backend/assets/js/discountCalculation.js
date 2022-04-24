//  type cast number function
function format_value(val) {
    var number = Number(val.replace(/[^0-9\.-]+/g, ""));
    var val = parseFloat(number);
    return val;
}

//  get two decimal value
function two_decimal(number) {
    var data = parseFloat(number);
    return data.toFixed(2);
}

// get discountet amount
function getDiscountedAmount(regularPrice, percentage) {
    let amount = (regularPrice * percentage) / 100;
    let discountedAmount = regularPrice - amount;
    return two_decimal(discountedAmount);
}

// add modal functionality start
// get discount in add modal
function getDiscount(e) {
    let regularPrice =document.getElementById('regularPrice').value;
    if (regularPrice) {
        let discountedAmount = getDiscountedAmount(format_value(regularPrice), format_value(e.value));
        document.getElementById('discounted_price').value = discountedAmount;
    }
}

function getDiscountedPrice(e){
    let discountPercantage =document.getElementById('discount_percentage').value;
    if(discountPercantage == 0 || discountPercantage == ''){
        document.getElementById('discounted_price').value = format_value(e.value);
    }else{
        let discountedAmount = getDiscountedAmount(format_value(e.value), format_value(discountPercantage));
        document.getElementById('discounted_price').value = discountedAmount;
    }
}
// add modal functionality end

// edit modal functionality start

// get discount in edit modal
function getDiscountEdit(e) {
    console.log(e.value);
    let regularPrice =document.getElementById('edit_regular_price').value;
    if (regularPrice) {
        let discountedAmount = getDiscountedAmount(format_value(regularPrice), format_value(e.value));
        document.getElementById('edit_discounted_price').value = discountedAmount;
    }
}


function getDiscountedPriceEdit(e){
    let discountPercantage =document.getElementById('edit_discount_percentage').value;
    if(discountPercantage == 0 || discountPercantage == ''){
        document.getElementById('edit_discounted_price').value = format_value(e.value);
    }else{
        let discountedAmount = getDiscountedAmount(format_value(e.value), format_value(discountPercantage));
        document.getElementById('edit_discounted_price').value = discountedAmount;
    }
}
// edit modal functionality end