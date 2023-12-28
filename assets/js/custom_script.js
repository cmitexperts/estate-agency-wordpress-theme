
// Ajax for custom post...... 
// console.log(my_ajax_object.ajax_url);
$(document).ready(function () {
  $("select.custom-select").on('change', function () {
    Property = $(".custom-select option:selected").val();

    // if (Property == "rent") {
    //   // alert("For Rent");
    // }
    // else if (Property == "sale") {
    //   // alert("For New");
    // }

    $.ajax({
      url: ajax_url,
      type: 'POST',
      data: { 'action': 'saveAjaxData', 'filter': Property },
      success: function (data) {
        $("#property_rent").html(data);
      }
    }); // Ajax...
  });  // On.change
}); // document.ready



// For All...
let currentPage = 1;
$(document).ready(function () {

  $('#load_more').on('click', function () {
    // alert('hello');
   
    currentPage++;
    // let page = 1;
    // page++;
    $.ajax({
      url: ajax_url,
      type: 'POST',
      dataType: 'html',
      data: { 'action': 'all_load_more', 'paged': currentPage },
      success: function (data) {
        if (currentPage == '3') {
          $('#load_more').hide();
          currentPage++;
        }
        $("#property_rent").append(data);
      }
    });
  });
});

// For Rent

// $(document).ready(function () {
//   currentPage = 1;
//   $('#load_more').on('click', function () {
//     // alert('hello');
//     currentPage++;
//     $.ajax({
//       url: ajax_url,
//       type: 'POST',
//       dataType: 'html',
//       data: { 'action': 'all_load_more', 'paged': currentPage, },
//       success: function (data) {
//         $("#property_rent").append(data);

//       }
//     });
//   });
// });






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
