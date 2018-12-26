import swal from "sweetalert";

var AjaxRequst = require("./ajaxRequest.js");

var ajaxConfig = {
    url: "https://api.github.com/users/cygnet-tejash",
    data: {},
    type: "GET",
    success: function(response) {
        if (response.status === 200) {
            var data = JSON.parse(response.responseText);
            console.log(data.login);
        }
    },
    error: function(response) {
        // var data = JSON.parse(response);
        console.log(response);
    }
};

var ajax = new AjaxRequst(ajaxConfig);
ajax.sendRequest(ajax.success, ajax.error);
ajax.resetConfig();

$(document).on("click", ".delete", function(e) {
    e.preventDefault();
    var form = $(this).parents("form");
    swal({
        title: "Are you sure?",
        text: "Are you sure that you want delete this resource?",
        icon: "warning",
        dangerMode: true,
        cancel: true
    }).then(willDelete => {
        if (willDelete) {
            swal(
                "Deleted!",
                "Your imaginary file has been deleted!",
                "success"
            );
            setTimeout(function() {
                form.submit();
            }, 750);
        }
    });
});
