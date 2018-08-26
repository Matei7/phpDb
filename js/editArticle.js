$(document).ready(function () {
    // $('.authors-list').dropdown({
    //     readOnly: false,
    //     limitCount: Infinity,
    //     input: '<input type="text" maxLength="20" placeholder="Search">',
    //     data: [],
    //     multipleMode: 'label',
    //     searchable: true,
    //     searchNoData: '<li style="color:#ddd">No Results</li>',
    //     choice: function () {
    //     }
    //
    // });

    $('.categories-list').dropdown({
        readOnly: false,
        limitCount: Infinity,
        input: '<input type="text" maxLength="20" placeholder="Search">',
        data: [],
        multipleMode: 'label',
        searchable: true,
        searchNoData: '<li style="color:#ddd">No Results</li>',
        choice: function () {
        }

    });

});



