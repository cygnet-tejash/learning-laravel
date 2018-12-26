module.exports = class AjaxRequst {
    constructor(options) {
        this.url = options.url;
        this.type = options.type ? options.type : "POST";
        this.data = options.data ? options.beforeSend : null;
        this.beforeSend = options.beforeSend ? options.beforeSend : null;
        this.success = options.success ? options.success : null;
        this.error = options.error ? options.error : null;
        this.complete = options.complete ? options.complete : null;

        // this.sendRequest(this.success, this.error);
        // this.resetConfig()
    }

    sendRequest(successCallback, errorCallback) {
        
        var xhr = new XMLHttpRequest();

        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                console.log("success!", xhr);
                successCallback(xhr);
            } else {
                console.log("The request failed!");
                errorCallback(xhr);
            }
        };

        xhr.open(this.type, this.url);

        xhr.send();
    }

    resetConfig() {
        this.url = null;
        this.type = null;
        this.data = null;
        this.beforeSend = null;
        this.success = null;
        this.error = null;
        this.complete = null;
    }
};