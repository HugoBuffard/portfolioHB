$(function () {

    $("#messageForm").on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            success: function(data){
                $('#messageForm')[0].reset();
                    alert(data.msg);
            },
        })
    });
});
