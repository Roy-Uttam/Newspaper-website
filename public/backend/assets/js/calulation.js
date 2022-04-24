function bdCurrencyFormat(num) {
    var n1, n2;
    num = num + '' || '';
    n1 = num.split('.');
    n2 = n1[1] || null;
    n1 = n1[0].replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");
    num = n2 ? n1 + '.' + n2 : n1;
    return num;
}




function calculator() {
    let total = 0;
    $(".singlePrice").each(function() {
        var cleanNumber2 = $(this).html();
        var number = Number(cleanNumber2.replace(/[^0-9\.-]+/g, ""));
        total += parseFloat(number || 0);
    });
    $('#subtotal').html(bdCurrencyFormat(total.toFixed(2)));

    $('.subtotal').val(bdCurrencyFormat(total.toFixed(2)));


    // Vat Calculation
    let vatValue = parseFloat($('#vatInputId').val());

    let vat = ((total / 100) * vatValue).toFixed(2);

    if (vatValue >= 0) {
        $('#taxValueId').html(bdCurrencyFormat(vat));
        $('.vat_amount').val(bdCurrencyFormat(vat));
    } else {
        $('#taxValueId').html(bdCurrencyFormat(0));
        $('.vat_amount').val(bdCurrencyFormat(0));
    }

    // Discount Calculation
    let disValue = parseFloat($('#disInputId').val());

    let discount = ((total / 100) * disValue).toFixed(2);
    if (disValue >= 0) {
        $('#disValueId').html(bdCurrencyFormat(discount));
        $('.discount_amount').val(bdCurrencyFormat(discount));
    } else {
        $('#disValueId').html(bdCurrencyFormat(0));
        $('.discount_amount').val(bdCurrencyFormat(0));
    }


    // Grand Total Calculator
    // console.log(total - disValue);

    // console.log(total, discount, vat)
    let grandTotal = (total - parseFloat(discount)) + parseFloat(vat);
    $('#grandTotalValue').html(bdCurrencyFormat(grandTotal.toFixed(2)));

    $('.grand_total').val(bdCurrencyFormat(grandTotal.toFixed(2)));

}




let allItems = [];
let databaseItems = [];

function onItems() {
    axios.get('https://quotation.antapp.space/api/items')
        .then(res => {
            if (res.status === 200 && res.data.success === true) {
                allItems = res.data.data;
                databaseItems = res.data.data;
                // console.log(allItems)
            }
        })
        .catch(err => {
            console.log(err)
        })
}

onItems();


function addListToItem($rowno) {
    $.each(allItems, function(key, value) {
        $(`#itemsDesc${$rowno}`).append($("<option></option>")
            .attr("value", value.id)
            .text(value.name));
    });



    $(`#defaultUnitPrice${$rowno}`).html(bdCurrencyFormat(allItems[0].unit_price));
    $(`#unitePrice${$rowno}`).val(allItems[0].unit_price);


    getQuantityAction($rowno);
    let selectedItemId = $(`#itemsDesc${$rowno}`).val();
    allItems = allItems.filter(item => item.id !== parseInt(selectedItemId))


}


// let serialNumber = [];
// serialNumber.push(serialNumber.length + 1);




function add_row_edit() {
    if (allItems.length !== 0) {

        $row_track_id = $('.invoice-table tbody>tr:last').data('row_track');
        if ($row_track_id == null) {
            $row_track_id = 1;
        } else {
            $row_track_id = $row_track_id + 1;
        }


        $(".invoice-table > tbody:last-child").append(`
    
            <tr data-row_track="${$row_track_id}"  id="row_edit${$row_track_id}">
            <td>
                <select class="form-control itemDesc" onchange="selectItemsAction('${$row_track_id}')" name="item[${$row_track_id}][item_id]" id="itemsDesc${$row_track_id}">
                   
                </select>
            </td>
            <td> <span class="tk">৳</span> <span id="defaultUnitPrice${$row_track_id}">12885</span></td>
            <td>
                <div class="d-flex justify-content-center align-items-center">
                    <span class="tk">৳</span><input class="form-control" type="number" name="item[${$row_track_id}][unit_price]" id="unitePrice${$row_track_id}" onkeyup="getUnitPriceAction('${$row_track_id}')"  minlength="1" value="12885">
                </div>
            </td>
            <td>
                <input class="form-control" type="number" name="item[${$row_track_id}][quantity]" id="quantity${$row_track_id}" onkeyup="getQuantityAction('${$row_track_id}')"  minlength="1" value="1">
            </td>
            <td>
                <button onclick="delete_row('${$row_track_id}')"><i class="fas fa-trash"></i></button>
                <span class="tk">৳</span> <span class="singlePrice" id="price${$row_track_id}">0</span>
            </td>
        </tr>
    
    `);


        addListToItem($row_track_id);
    }
}


// <td id="${$row_track_id}">${serialNumber[$row_track_id - 1]}</td>




function delete_row(rowno) {
    let selectedItemId = $(`#itemsDesc${rowno}`).val();
    allItems.push(databaseItems.find(item => item.id === parseInt(selectedItemId)))

    // $(".itemDesc").each(function() {
    //     var cleanNumber2 = $(this).val();
    //     $.each(allItems, function(key, value) {
    //         $(`.itemDesc`).append($("<option></option>")
    //             .attr("value", value.id)
    //             .text(value.name));
    //     });
    // });




    $(`#row_edit${rowno}`).remove();

    calculator();
}

function vatAction() {
    let vatValue = parseFloat($('#vatInputId').val());
    if (vatValue >= 0) {
        calculator();
    } else {
        $('#vatInputId').val(0)
    }
}

function discountAction() {
    let vatValue = parseFloat($('#disInputId').val());
    if (vatValue >= 0) {
        calculator();
    } else {
        $('#disInputId').val(0)
    }
}


$(document).ready(function() {
    $('#subtotal').html(bdCurrencyFormat(0));
});


function getQuantityAction(rowNumber) {
    let quantityValue = $(`#quantity${rowNumber}`).val();
    let unitPrice = $(`#unitePrice${rowNumber}`).val();
    let totalPrice = parseFloat(quantityValue) * parseFloat(unitPrice);

    if (quantityValue >= 1) {
        $(`#price${rowNumber}`).html(bdCurrencyFormat(totalPrice.toFixed(2)));

        calculator();

    } else {
        $(`#quantity${rowNumber}`).val(1);
    }
}



function getUnitPriceAction(rowNumber) {
    let quantityValue = $(`#quantity${rowNumber}`).val();
    let unitPrice = $(`#unitePrice${rowNumber}`).val();
    let totalPrice = parseFloat(quantityValue) * parseFloat(unitPrice);

    if (unitPrice >= 0) {
        $(`#price${rowNumber}`).html(bdCurrencyFormat(totalPrice));

        calculator();

    } else {
        $(`#unitePrice${rowNumber}`).val(1);
    }
}


// Ajax Js

let allClient;

function openClientSelectModal() {
    axios.get('https://quotation.antapp.space/api/clients')
        .then(res => {
            if (res.status === 200 && res.data.success === true) {
                // console.log(res.data.data);
                $('#getClientModal').modal('show');

                allClient = res.data.data;

                $('#client').empty();

                res.data.data.map(item => {
                    return $('#client').append($(`<option></option>`)
                        .attr("value", item.id)
                        .text(item.name))
                })

            }
        })
        .catch(err => {
            console.log(err)
        })
}

let selectedClient;

function clientSetAction() {
    let clientId = $('#client').val();

    if (clientId !== "") {
        selectedClient = allClient.find(items => items.id === parseInt(clientId));
        // console.log(selectedClient);

        $('.client-name').html(selectedClient.name);
        $('.clientPhone').html(`<span>P:</span> ${selectedClient.phone}`);
        $('.clientEmail').html(`<span>E:</span> ${selectedClient.email}`);
        $('.clientAddress').html(`${selectedClient.address}`);
        $('.customerNum').html(`#${selectedClient.id}`);

        $('.client_id').val(selectedClient.id);

        $('#getClientModal').modal('hide');

    }

}





function selectItemsAction(rowNumber) {
    let selectedItemId = $(`#
            itemsDesc$ { rowNumber }
            `).val();
    let selectItem = allItems.find(item => item.id === parseInt(selectedItemId))

    $(`#
            defaultUnitPrice$ { rowNumber }
            `).html(bdCurrencyFormat(selectItem.unit_price));
    $(`#
            unitePrice$ { rowNumber }
            `).val(selectItem.unit_price);


    getQuantityAction(rowNumber);

    allItems = allItems.filter(item => item.id !== parseInt(selectedItemId))
}






function assignSignetory() {
    axios.get('https://quotation.antapp.space/api/managers')
        .then(res => {
            console.log(res)
            if (res.status === 200 && res.data.success === true) {
                $('#asignSegnatory').empty();

                $('#asignSegnatory').append($(` < option > < /option>`)
                    .attr("value", '')
                    .text("Assign Second Signatory"))

                res.data.data.map(item => {
                    return $('#asignSegnatory').append($(`<option></option>`)
                        .attr("value", item.id)
                        .text(item.name))
                })
            }
        })
        .catch(err => {
            console.log(err);
        })
}

assignSignetory();