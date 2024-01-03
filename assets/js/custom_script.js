var paged = 2;
// var ppp = 1;
$(document).ready(function () {
  $("select#custom_select").on('change', function () {
    load_data(false);
  });
});

$(document).ready(function () {
  $('#load_more').on('click', function () {
    // alert('hello');
    load_data(true);
  });
});
function load_data(loadMore) {
  Property = $("#custom_select option:selected").val();
  // if (loadMore) {
  //   paged++;
  // }
  $.ajax({
    url: ajax_url,
    type: 'POST',
    dataType: 'html',
    data: { 'action': 'get_properties_data', 'paged': paged, 'loadmore': loadMore, 'filter': Property },
    success: function (data) {
      if (loadMore == false) {
        $("#property_rent").html(data);
      }
      // var count = $('#cnt').val();
      // console.log(count);
      if (data === 0) {
        $("#load_more").hide();
      }
        // $('#property_rent').append(data);
        // paged++;
        // $("#load_more").hide();
      
      if (loadMore == true) {
        $("#property_rent").append(data);
        paged++;
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
