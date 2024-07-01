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

    $('.card-body').hide(800);



    // If the clicked card body is already visible, hide it

    if (isVisible) {

		$('.card-header'+ index).removeClass('active');

		$('.card-header'+ index).removeClass('card-header-click');

        cardBody.hide(2000).slideUp(); 

		// Slide up corresponding card body

    } else {

		$('.card-header'+ index).addClass('card-header-click');

		$('.card-header'+ index).addClass('active');

        // Show corresponding card body with slide down effect

        cardBody.slideDown("slow");

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





// // Add smooth scrolling effect with correct starting position

// document.querySelectorAll('.submenu a').forEach(anchor => {

//     anchor.addEventListener('click', function(e) {

//         e.preventDefault();



//         const targetId = this.getAttribute('href');

//         const targetElement = document.querySelector(targetId);

        

//         // Get the offset position of the target element

//         let offsetTop = targetElement.offsetTop;



//         // Adjust offsetTop to account for fixed headers

//         const headerHeight = document.querySelector('#myHeader').offsetHeight;

//         const subHeaderHeight = document.querySelector('.submenu').offsetHeight;

//         const navHeight = document.querySelector('nav').offsetHeight;



//         offsetTop -= (headerHeight + subHeaderHeight + navHeight);



//         window.scrollTo({

//             top: offsetTop,
            

//             behavior: 'smooth'

//         });

//     });

// });



document.addEventListener("DOMContentLoaded", function() {

    var dropdown = document.querySelector('.custom-dropdown1');

    var dropdownMenu = document.querySelector('.custom-dropdown-menu1');

    var filterButton = document.querySelector('.custom-button1');



    // Toggle dropdown on button click

    dropdown.addEventListener('click', function() {

      if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {

		$('.offcanvas-overlay1').css('display','block');

        dropdownMenu.style.display = 'block';

        document.querySelector('.dropdown-arrow1').style.borderTopColor = 'transparent'; // Change arrow color

      } else {

        dropdownMenu.style.display = 'none';

		$('.offcanvas-overlay1').css('display','none');

		

        document.querySelector('.dropdown-arrow1').style.borderTopColor = 'transparent'; // Change arrow color

      }

    });

    

    // Close dropdown on Apply Filter button click

    filterButton.addEventListener('click', function(e) {

      e.stopPropagation(); // Prevents closing the dropdown when clicking Apply Filter

      dropdownMenu.style.display = 'none';

	  $('.offcanvas-overlay1').css('display','none');

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

		$('.offcanvas-overlay1').css('display','none');

        document.querySelector('.dropdown-arrow1').style.borderTopColor = 'transparent'; // Change arrow color

      }

    });

	

	

	

	var dropdown2 = document.querySelector('.custom-dropdown2');

    var dropdownMenu2 = document.querySelector('.custom-dropdown-menu2');

    var filterButton2 = document.querySelector('.custom-button2');



    // Toggle dropdown on button click

    dropdown2.addEventListener('click', function() {

      if (dropdownMenu2.style.display === 'none' || dropdownMenu2.style.display === '') {

		$('.offcanvas-overlay2').css('display','block');

        dropdownMenu2.style.display = 'block';

        document.querySelector('.dropdown-arrow2').style.borderTopColor = 'transparent'; // Change arrow color

      } else {

        dropdownMenu2.style.display = 'none';

		$('.offcanvas-overlay2').css('display','none');

        document.querySelector('.dropdown-arrow2').style.borderTopColor = 'transparent'; // Change arrow color

      }

    });

   

    // Close dropdown on Apply Filter button click

    filterButton2.addEventListener('click', function(e) {

      e.stopPropagation(); // Prevents closing the dropdown when clicking Apply Filter

      dropdownMenu2.style.display = 'none';

	  $('.offcanvas-overlay2').css('display','none');

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

		$('.offcanvas-overlay2').css('display','none');

        document.querySelector('.dropdown-arrow2').style.borderTopColor = 'transparent'; // Change arrow color

      }

    });
	
	
	
	///////////////////////////////////////////////TYPE/////////////////////////////
	
	
	
	var dropdown0 = document.querySelector('.custom-dropdown0');

    var dropdownMenu0 = document.querySelector('.custom-dropdown-menu0');

    var filterButton0 = document.querySelector('.custom-button0');



    // Toggle dropdown on button click

    dropdown0.addEventListener('click', function() {

      if (dropdownMenu0.style.display === 'none' || dropdownMenu0.style.display === '') {

		$('.offcanvas-overlay0').css('display','block');

        dropdownMenu0.style.display = 'block';

        document.querySelector('.dropdown-arrow0').style.borderTopColor = 'transparent'; // Change arrow color

      } else {

        dropdownMenu0.style.display = 'none';

		$('.offcanvas-overlay0').css('display','none');

        document.querySelector('.dropdown-arrow0').style.borderTopColor = 'transparent'; // Change arrow color

      }

    });

   

    // Close dropdown on Apply Filter button click

    filterButton0.addEventListener('click', function(e) {

      e.stopPropagation(); // Prevents closing the dropdown when clicking Apply Filter

      dropdownMenu0.style.display = 'none';

	  $('.offcanvas-overlay0').css('display','none');

      document.querySelector('.dropdown-arrow0').style.borderTopColor = 'transparent'; // Change arrow color

    });



    // Prevent dropdown menu from closing when clicking inside the dropdown menu

    dropdownMenu0.addEventListener('click', function(e) {

      e.stopPropagation();

    });



    // Close dropdown when clicking outside the dropdown menu

    document.addEventListener('click', function(e) {

      if (!dropdown0.contains(e.target)) {

        dropdownMenu0.style.display = 'none';

		$('.offcanvas-overlay0').css('display','none');

        document.querySelector('.dropdown-arrow0').style.borderTopColor = 'transparent'; // Change arrow color

      }

    });

	

	

  }); 

  

  $(document).ready(function() {

  // Add class to div when hovering over the Industries link

  $('.main-nav li.nav-item').hover(function() {

    $('#myHeader').addClass('blue-sticky');

  }, function() {

    $('#myHeader').removeClass('blue-sticky');

  });

});



$(document).ready(function() {

  // Toggle search area when clicking the search button

  $(".Search").on('click', function() {

    $(".searcharea").toggle();
	$('.orig').val('');
	$('.orig').focus();
	
	
	$('#ajaxsearchliteres1').css('display','block');
	$('#ajaxsearchliteres1').css('visibility','visible');

var html ='<div class="results results_new" style="min-height:190px;" ><div class="resdrg"><div class="item asl_r_pagepost asl_r_pagepost_54 asl_r_post-industries"><div class="asl_content"><h3 class="search-default-head"> POPULAR <span class="overlap"></span> </a></h3><div class="etc"> </div></div><div class="clear"></div></div><div class="item asl_r_pagepost asl_r_pagepost_54 asl_r_post-industries"><div class="asl_content"><h3><a class="asl_res_url" onclick="search_default(\'Business\');" href="#">Business <span class="overlap"></span> </a></h3><div class="etc"> </div></div><div class="clear"></div></div><div class="item asl_r_pagepost asl_r_pagepost_575 asl_r_job_openings"><div class="asl_content"><h3><a class="asl_res_url" href="#" onclick="search_default(\'Technology\');"> Technology<span class="overlap"></span> </a></h3><div class="etc"> </div></div><div class="clear"></div></div><div class="item asl_r_pagepost asl_r_pagepost_54 asl_r_post-industries"><div class="asl_content"><h3><a class="asl_res_url" href="#" onclick="search_default(\'Strategy\');">Strategy<span class="overlap"></span> </a></h3><div class="etc"> </div></div><div class="clear"></div></div></div></div>';
		$('#ajaxsearchliteres1').html(html);

  });
  
  
  $(".orig").on("keyup", function() {
	 
	 $('#ajaxsearchliteres1').css('display','none');
  // your code
});



  // Close search area when clicking outside of it or when search input loses focus

//   $(document).on('click touchstart focusin', function(event) {

//     if (!$(event.target).closest('.searcharea').length && !$(event.target).closest('.Search').length) {

//       $(".searcharea").hide();

//     }

//   });

$(document).on('click touchstart focusin', function(event) {
    if (!$(event.target).closest('.searcharea').length && !$(event.target).closest('.Search').length && !$(event.target).closest('.showmore').length && !$(event.target).closest('.wpdreams_asl_results').length) {
        $(".searcharea, .wpdreams_asl_results").hide();
    }
});
$('.orig').on('input', function(event) {
    $(".searcharea, .wpdreams_asl_results").show();
});


  // Prevent closing the search area when clicking inside it

  $(".searcharea").on('click touchstart', function(event) {

    event.stopPropagation();

  });

});





$(document).ready(function() {

  $(".closearch").click(function() {

    $(".searcharea").toggle();
      $(".wpdreams_asl_results").toggle();

  });

});




// // Get the button element

// var button = document.getElementById("customDropdownButton");



// // Add a click event listener to the button

// button.addEventListener("click", function() {

//     // Toggle the class

//     this.classList.toggle("active");

// });



// // Get the button element

// var button = document.getElementById("customDropdownButton2");



// // Add a click event listener to the button

// button.addEventListener("click", function() {

//     // Toggle the class

//     this.classList.toggle("active");


// });



document.addEventListener("DOMContentLoaded", function() {

  var toggleBtn = document.querySelector('.custom-dropdown-toggle');

  var overlay = document.querySelector('.offcanvas-overlay1');



  toggleBtn.addEventListener('click', function() {

    offcanvasMenu.classList.toggle('open');

    overlay.classList.toggle('show');

  });

});

$(document).ready(function() {
    // Add click event listener to the first dropdown button
    $("#customDropdownButton").click(function() {
        // Remove active class from all dropdown buttons
        $("#customDropdownButton2").removeClass("active");
		$("#customDropdownButton1").removeClass("active");
        // Add active class to the clicked button
        $(this).toggleClass("active");
    });

    // Add click event listener to the second dropdown button
    $("#customDropdownButton2").click(function() {
        // Remove active class from all dropdown buttons
        $("#customDropdownButton").removeClass("active");
		$("#customDropdownButton1").removeClass("active");
        // Add active class to the clicked button
        $(this).toggleClass("active");
    });
	
	 $("#customDropdownButton1").click(function() {
        // Remove active class from all dropdown buttons
        $("#customDropdownButton").removeClass("active");
		$("#customDropdownButton2").removeClass("active");
        // Add active class to the clicked button
        $(this).toggleClass("active");
    });
});

$(document.body).click(function(event) {
        // Check if the click occurred outside of the dropdown buttons
        if (!$(event.target).closest('#customDropdownButton').length) {
            // Remove active class from all dropdown buttons
            $("#customDropdownButton").removeClass("active");
        }
    });
    
    $(document.body).click(function(event) {
        // Check if the click occurred outside of the dropdown buttons
        if (!$(event.target).closest('#customDropdownButton2').length) {
            // Remove active class from all dropdown buttons
            $("#customDropdownButton2").removeClass("active");
        }
    });
	
	$(document.body).click(function(event) {
        // Check if the click occurred outside of the dropdown buttons
        if (!$(event.target).closest('#customDropdownButton1').length) {
            // Remove active class from all dropdown buttons
            $("#customDropdownButton1").removeClass("active");
        }
    });
    

// document.addEventListener('DOMContentLoaded', function() {
//     var links = document.querySelectorAll('ul.submenu li a');
//     links.forEach(function(link) {
//         link.addEventListener('click', function(event) {
//             event.preventDefault();
//             var container = link.closest('ul.submenu');
//             var linkRect = link.getBoundingClientRect();
//             var containerRect = container.getBoundingClientRect();
//             var isLeft = linkRect.left < containerRect.left + container.clientWidth / 2;
//             container.scrollLeft = isLeft ? 0 : container.scrollWidth; // Scroll to the left end if link is on the left, otherwise scroll to the right end
//         });
//     });
// });


document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('ul.submenu li a');
    
    // Function to scroll to the right end of the container
    function scrollToRightEnd(container) {
        container.scrollLeft = container.scrollWidth;
    }
    
    // Function to scroll to the left end of the container
    function scrollToLeftEnd(container) {
        container.scrollLeft = 0;
    }

    // Observer configuration
    var observerConfig = { attributes: true, subtree: true };

    // Callback function to handle changes to the class attribute
    function classChangeCallback(mutationsList, observer) {
        for(var mutation of mutationsList) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                var target = mutation.target;
                var container = target.closest('ul.submenu');
                
                // Check if the clicked link is the first or last child and if it has the "active" class
                var isFirstChildActive = target.parentElement === container.firstElementChild && target.classList.contains('active');
                var isLastChildActive = target.parentElement === container.lastElementChild && target.classList.contains('active');

                // Scroll to the left end if the link is the first child and active, otherwise scroll to the right end
                if (isFirstChildActive) {
                    scrollToLeftEnd(container);
                } else if (isLastChildActive) {
                    scrollToRightEnd(container);
                }
            }
        }
    }

    // Create a new observer instance
    var observer = new MutationObserver(classChangeCallback);

    // Start observing the target links for changes in attributes
    links.forEach(function(link) {
        observer.observe(link, observerConfig);
    });
});






document.addEventListener("DOMContentLoaded", function() {
  const elements = document.querySelectorAll('.ca-d');
  let delay = 0;

  const revealElements = (entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              elements.forEach((element, index) => {
                  setTimeout(() => {
                      element.classList.add('revealed');
                  }, delay);
                  delay += 500; // Increase delay for each element, 500ms in this example
              });
              observer.unobserve(entry.target);
          }
      });
  };

  const options = {
      threshold: 0.1 // Adjust this value as needed
  };

  const observer = new IntersectionObserver(revealElements, options);
  observer.observe(document.getElementById('Results'));
});