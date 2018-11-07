

function toggleParkingInput()
{
    var pnumber = $('#pnumber');
    pnumber.removeAttr('disabled');
}
function toggleDepositInput()
{
    var pnumber = $('#dnumber');
    pnumber.removeAttr('disabled');
}


function setPrice()
{
  var priceFromApart = $('#apartSelect option:selected').attr('price');
  var combinePrice = priceFromApart;
  var priceInput = $('#priceInput');

  priceInput.val(combinePrice);
}
setPrice();
