$(document).ready(function () {
    $("#resumePDF").change(function () {
        var formData = new FormData();
        var files = $(this)[0].files;

        // Check file selected or not
        if (files.length > 0) {
            formData.append('resumePDF', files[0]);

            $.ajax({
                url: "api/resume/convert-pdf",
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#resume").val(response)
                },
            });
        }
    });
});