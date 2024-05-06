(function ($) {

    "use strict";
    //active 
     
    //posts datatable
    var table = $('#posts_table').DataTable({
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            url: "admin/posts",
        },
        "columns": [
            { data: "id", orderable: true, sortable: true },
            { data: "created_at", orderable: false, sortable: false },
            { data: "user.name", orderable: false, sortable: false },
            { data: "title", orderable: false, sortable: false },
            { data: "body", orderable: false, sortable: false },
        ]
        
    });//end of table


})(jQuery);
