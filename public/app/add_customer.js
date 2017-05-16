/*$(document).ready(function() {
    $('#users-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "getcustomerlist"
    } );
} );*/

$(document).ready(function(){
    $('#users-table').DataTable({
        "processing": true,
        "serverSide": true,
        // ajax: '/getcustomerlist',
        "ajax": "getcustomerlist",
        "columns": [
        		  // { "data": "first_name" , "name" : "id"}
        		// { data: 'customer_id', name: 'id' }
            // { data: 'name', name: 'name' },
            // { data: 'e_mail', name: 'e_mail' },
            // { data: 'created_at', name: 'created_at' },
            // { data: 'updated_at', name: 'updated_at' }
        ]
    });

});