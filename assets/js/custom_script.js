var currentPage = 1;
var totalpost = parseInt($('#totalpost').val(), 10);
var postperpage = 3;
var test = Math.ceil(totalpost / postperpage);

$(document).ready(function () {
  $("select#custom_select").on('change', function () {
    load_data(false);
  });
});

$(document).ready(function () {
  $('#load_more').on('click', function () {
    load_data(true);
  });
});

function load_data(loadMore) {
  var Property = $("#custom_select option:selected").val();
  if (loadMore) {
    currentPage++;
  }

  $.ajax({
    url: ajax_url,
    type: 'POST',
    dataType: 'html',
    data: { 'action': 'get_properties_data', 'paged': currentPage, 'loadmore': loadMore, 'filter': Property },
    success: function (data) {
      if (loadMore == false) {
        currentPage = 1;
        $("#property_rent").html(data);
      }
      else if (loadMore == true) {
        $("#property_rent").append(data);
      }

      if (currentPage >= test) {
        $('#load_more').hide();
      }
      else {
        $('#load_more').show();
      }
    }
  });
}


// let rentbtn = document.getElementById('forrent');
// rentbtn.addEventListener('click', my_function);

// function my_function() {
//     const xhr = new XMLHttpRequest();

//     xhr.onload = function () {
//         document.getElementById('for-rent').innerHTML = this.responseText;
//     }
//     document.getElementById('for-rent').innerHTML = "hello";
//     xhr.open("GET", "Rent.php", true);
//     xhr.send();
// }

// add_action('wp_ajax_nopriv_my_action', 'my_function');
// add_action('wp_ajax_my_action', 'my_function');

// if (this.id == 'custom_select') {}
// if (e.type === 'load_more') {}

// let ppp = $('#rent_load').val()
// if (ppp == '') {
//   $('#load_more').hide();
// }

//  offset: (page * ppp) + 3,

// ,
//       error: function (errorThrown) {
//                 alert(errorThrown);
//       }
