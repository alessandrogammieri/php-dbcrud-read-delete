$ = require("jquery");

function getPagamenti() {
  $(".card").remove();
  $.ajax({
    url: "api.php",
    method: "GET",
    success: function (data) {
      printPagamenti(data);
    },
    error: function() {
        alert("C'è stato un errore in download");
    } 
  });  
}

function printPagamenti(data) {
  var source = $("#item-template").html();
  var template = Handlebars.compile(source);
  for (i = 0; i < data.length; i++) {
    var d = data[i];
    var context = {
      id: d.id,
      price: d.price,
      status: d.status
    }
    var html = template(context);
    if (d.status == "pending") {
      $(".prezzi-pend").append(html);
    }
    if (d.status == "rejected") {
      $(".prezzi-rej").append(html);
    }
    if (d.status == "accepted") {
      $(".prezzi-acc").append(html);
    }
  }
}

function deletePayment() {  
  var element = $(this);
  var box = element.parent();
  var idPayment = box.data("id")  
  $.ajax({
    url: "api-del.php",
    method: "GET",
    data: { id: idPayment},
    success: function (data) {
      getPagamenti();
    },
    error: function () {
      alert("C'è stato un errore nella cancellazione");
    }
  })
}

function init() {
  getPagamenti();
  $(document).on("click", ".delete", deletePayment);
}

$(document).ready(init);