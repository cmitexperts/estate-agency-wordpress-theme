
// Ajax for custom post...... 
// console.log(my_ajax_object.ajax_url);
// $(document).ready(function () {
//   $("select.custom-select").on('change', function () {
//     Property = $(".custom-select option:selected").val();

//     // if (Property == "rent") {
//     //   // alert("For Rent");
//     // }
//     // else if (Property == "sale") {
//     //   // alert("For New");
//     // }

//     $.ajax({
//       url: ajax_url,
//       type: 'POST',
//       data: { 'action': 'saveAjaxData', 'filter': Property },
//       success: function (data) {
//         $("#property_rent").html(data);
//       }
//     }); // Ajax...
//   });  // On.change
// }); // document.ready


// For All...

// $(document).ready(function () {
//   let currentPage = 1;
//   $('#load_more').on('click', function () {
//     // alert('hello');
//     currentPage++;
//     $.ajax({
//       url: ajax_url,
//       type: 'POST',
//       dataType: 'html',
//       data: { 'action': 'all_load_more', 'paged': currentPage},
//       success: function (data) {
//         let ppp = $('#rent_load').val()
//         if (ppp == '') {
//           $('#load_more').hide();
//         }
//         $("#property_rent").append(data);
//       }
//     });
//   });
// });

// For Rent

// $(document).ready(function () {

//   rentpage = 1;
//   $('#rent_load').on('click', function () {
//     rentpage++;
//     $.ajax({
//       url: ajax_url,
//       type: 'POST',
//       dataType: 'html',
//       data: { 'action': 'Rent_load_more', 'page': rentpage},
//       success: function (data) {
//         $("#property_rent").append(data);
//       }
//     });
//   });
// });

// for onclick and onchange...........
$(document).ready(function () {
  $('#property_rent, #custom_select').on('click change', function (e) {
    Property = $("#custom_select option:selected").val();
    rent = $("#load_more").val();
    var currentpage = 1;
    if (e.type === 'load_more') {
      currentpage++;
      alert('onclick');
    }
    else if (this.id !== 'custom_select') {
      alert('onchange');
    }
    $.ajax({
      url: ajax_url,
      type: 'POST',
      data: { 'action': 'saveAjaxData', 'filter': Property, 'paged': currentpage },
      success: function (data) {
        $("#property_rent").html(data);
      }
    }); // Ajax...
  });
});




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
