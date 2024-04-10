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

    // Hide all card bodies with slide up effect
    $('.card-body').slideUp();

    // If the clicked card body is already visible, hide it
    if (isVisible) {
        cardBody.slideUp(); // Slide up corresponding card body
    } else {
        // Show corresponding card body with slide down effect
        cardBody.slideDown();
    }
}

$(document).ready(function() {
    var submenuOffset = $('.submenu').offset().top;
    var headerHeight = $('#myHeader').outerHeight();

    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > submenuOffset - headerHeight) {
            $('.submenu').addClass('fixed');
        } else {
            $('.submenu').removeClass('fixed');
        }
    });
});



// Get all elements with the class 'card-header'
var gridItems = document.querySelectorAll('.ind-serv-itm .card-header');

// Loop through each grid item and add an event listener
gridItems.forEach(function(item) {
  item.addEventListener('click', function() {
    // Remove the 'active' class from all grid items
    gridItems.forEach(function(gridItem) {
      gridItem.classList.remove('active');
    });
    // Add the 'active' class to the clicked grid item
    item.classList.add('active');
  });
});


// Add smooth scrolling effect with correct starting position
document.querySelectorAll('.submenu a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);
        
        // Get the offset position of the target element
        let offsetTop = targetElement.offsetTop;

        // Adjust offsetTop to account for fixed headers
        const headerHeight = document.querySelector('#myHeader').offsetHeight;
        const subHeaderHeight = document.querySelector('.submenu').offsetHeight;
        const navHeight = document.querySelector('nav').offsetHeight;

        offsetTop -= (headerHeight + subHeaderHeight + navHeight);

        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var dropdown = document.querySelector('.custom-dropdown1');
    var dropdownMenu = document.querySelector('.custom-dropdown-menu1');
    var filterButton = document.querySelector('.custom-button1');

    // Toggle dropdown on button click
    dropdown.addEventListener('click', function() {
      if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
        dropdownMenu.style.display = 'block';
        document.querySelector('.dropdown-arrow1').style.borderTopColor = 'transparent'; // Change arrow color
      } else {
        dropdownMenu.style.display = 'none';
        document.querySelector('.dropdown-arrow1').style.borderTopColor = 'transparent'; // Change arrow color
      }
    });
    
    

   

    // Close dropdown on Apply Filter button click
    filterButton.addEventListener('click', function(e) {
      e.stopPropagation(); // Prevents closing the dropdown when clicking Apply Filter
      dropdownMenu.style.display = 'none';
      document.querySelector('.dropdown-arrow1').style.borderTopColor = 'transparent'; // Change arrow color
    });

    // Prevent dropdown menu from closing when clicking inside the dropdown menu
    dropdownMenu.addEventListener('click', function(e) {
      e.stopPropagation();
    });

    // Close dropdown when clicking outside the dropdown menu
    document.addEventListener('click', function(e) {
      if (!dropdown.contains(e.target)) {
        dropdownMenu.style.display = 'none';
        document.querySelector('.dropdown-arrow1').style.borderTopColor = 'transparent'; // Change arrow color
      }
    });
	
	
	
	var dropdown2 = document.querySelector('.custom-dropdown2');
    var dropdownMenu2 = document.querySelector('.custom-dropdown-menu2');
    var filterButton2 = document.querySelector('.custom-button2');

    // Toggle dropdown on button click
    dropdown2.addEventListener('click', function() {
      if (dropdownMenu2.style.display === 'none' || dropdownMenu2.style.display === '') {
        dropdownMenu2.style.display = 'block';
        document.querySelector('.dropdown-arrow2').style.borderTopColor = 'transparent'; // Change arrow color
      } else {
        dropdownMenu2.style.display = 'none';
        document.querySelector('.dropdown-arrow2').style.borderTopColor = 'transparent'; // Change arrow color
      }
    });
    
    

   

    // Close dropdown on Apply Filter button click
    filterButton2.addEventListener('click', function(e) {
      e.stopPropagation(); // Prevents closing the dropdown when clicking Apply Filter
      dropdownMenu2.style.display = 'none';
      document.querySelector('.dropdown-arrow2').style.borderTopColor = 'transparent'; // Change arrow color
    });

    // Prevent dropdown menu from closing when clicking inside the dropdown menu
    dropdownMenu2.addEventListener('click', function(e) {
      e.stopPropagation();
    });

    // Close dropdown when clicking outside the dropdown menu
    document.addEventListener('click', function(e) {
      if (!dropdown2.contains(e.target)) {
        dropdownMenu2.style.display = 'none';
        document.querySelector('.dropdown-arrow2').style.borderTopColor = 'transparent'; // Change arrow color
      }
    });
	
	
  }); 
  
  $(document).ready(function() {
  // Add class to div when hovering over the Industries link
  $('.navbar-expand-lg ').hover(function() {
    $('#myHeader').addClass('sticky');
  }, function() {
    $('#myHeader').removeClass('sticky');
  });
});


