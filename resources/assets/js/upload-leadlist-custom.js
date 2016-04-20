Dropzone.options.listUpload = {
    init: function() {
        this.on("success", function(file) {
            swal({
                title:             "Upload Success",
                type:              "success",
                text:              "Your lists have been uploaded, validation has begun",
                timer:             1700,
                showConfirmButton: false
            })
        });
    },
    paramName: 'leadList',
    maxFilesize: 50,
    addRemoveLinks: true,
    maxFiles: 1,
    acceptedFiles: '.csv',
    dictResponseError: 'File Upload Error.'
};
