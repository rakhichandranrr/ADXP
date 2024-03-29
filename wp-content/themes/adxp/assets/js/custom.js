//web sticky header js

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

//mobile sticky header js

$(window). scroll(function(){
if ($(this). scrollTop() > 50) {
$('#dynamic'). addClass('mob-header');
} else {
$('#dynamic'). removeClass('mob-header');
}
});


function showCardBody(index) {
    var cardBody = $('#cardBody' + index);
    var isVisible = cardBody.is(':visible');

    // Hide all card bodies
    $('.card-body').hide();

    // If the clicked card body is already visible, hide it
    if (isVisible) {
        cardBody.hide();
    } else {
        // Show corresponding card body
        cardBody.show();
    }
}
