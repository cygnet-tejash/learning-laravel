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
