(function ($) {

    "use strict";
    //active 
     
    //posts datatable
    var table = $('#posts_table').DataTable({
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            url: "posts",
        },
        "columns": [
            { data: "id", orderable: true, sortable: true },
            { data: "created_at", orderable: false, sortable: false },
            { data: "user.name", orderable: false, sortable: false },
            { data: "title", orderable: false, sortable: false },
            { data: "body", orderable: false, sortable: false },
            { data: "hide", orderable: false, sortable: false },
            { data: "action", orderable: false, sortable: false },
        ]
        
    });//end of table

    $(document).on('change', '.hide_post', function() {
        // 'this' refers to the checkbox that was changed.
        if ($(this).prop('checked')) {
            var post_id=$(this).attr('post_id');
            $.ajax({
                method:"POST",
                url: "post/update",
                data:{
                    "id":post_id,
                },
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                    $('.preloader').show();
                    $('.loader').show();
                },
                success: function (response) {
                    toastr.success(response.message);
                    table.ajax.reload();
                },
                complete: function () {
                    $('.preloader').hide();
                    $('.loader').hide();
                }
            });
        }
    });
    

})(jQuery);
