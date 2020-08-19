!function ($) {
		"use strict";
    var $frmCreate = $("#frmCreate"),
        $frmUpdate = $("#frmUpdate"),
        dataTable = ($.fn.dataTable !== undefined);

        if ($(".datatable").length > 0 && dataTable) {
            var dataTable = $('.datatable').DataTable( {
                "processing": true,
                "searching" : true,
                "paging": true,
                "order" : [],
                "ajax": {
                    "url": myLabel.users,
                    "type": 'POST',
                    "dataSrc": "data"
                },
                "oLanguage": {
                    "sEmptyTable": "Empty Table"
                },
                dom: 'lBfrtip',
                buttons: [
                'excel', 'csv', 'pdf'
                ],
                "columnDefs": [ {
                    "targets": 0,
                    "orderable": false
                },{
                    visible: false
                } ],
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
            }).on('click', '.edit', function (e) {
                var id = $(this).data('id');
                window.location.href = myLabel.edit + id;
            }).on('click', '.delete', function (e) {
                //var id = $(this).data('id');

                var arrayId = [];
                $('.datatable input[type=checkbox]').each(function () {
                    if ($(this).is(":checked")) {
                        var id = $(this).data('id');
                        if (id != undefined || id != 0 || id != '' || id != null) {
                            arrayId.push(id);
                        } 
                    }
                });
                //console.log(arrayId);
                if (arrayId.length > 0) {
                    swal({
                        title: "Confirm Delete",
                        text: "Are you want to delete this record?(Yes/No)",
                        type: "info",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function () {
                        /*
                    setTimeout(function () {
                        $.ajax({
                            type: "GET",
                            url: myLabel.baseUrl + '/artists/delete/' + id,
                            cache: false,
                            success: function (res) {
                                if (res.status === true) {
                                    swal(res.message);
                                } else {
                                    swal(res.message);
                                }

                                dataTable.ajax.reload();
                            }
                        });
                    }, 2000);
                        */
                    });
                } else {
                    swal("You must select one record");
                }

            }).on('click', '#checkAll', function () {
                $('.datatable input[type=checkbox]').prop('checked', this.checked);
            });
        }
      
        
        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });
        
        function loadDataTable(data = null) {
            var dataTable = $('.datatable').DataTable( {
                "processing": true,
                "searching" : true,
                "paging": true,
                "order" : [],
                "ajax": {
                    url: myLabel.users,
                    type : 'get',
                    data: {}
                },
                "oLanguage": {
                    "sEmptyTable": "Empty Table"
                },
                dom: 'lBfrtip',
                buttons: [
                'excel', 'csv', 'pdf'
                ],
                "columnDefs": [ {
                    "targets": 0,
                    "orderable": false
                },{
                    visible: false
                } ],
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
         });
        }
    $('select[name="address[0][country_id]"]').on('change', function() {
        var country_id = $('select[name="address[0][country_id]"]').find(":selected").val();
        $.ajax({
            url: myLabel.states,
            dataType: 'json',
            method: 'POST',
            data: {
                country_id: country_id
            },
            beforeSend: function() {
                $('select[name="address[0][country_id]"]').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
            },
            complete: function() {
                $('.fa-spin').remove();
            },
            success: function(json) {
                console.log(json);
                // if (json['postcode_required'] == '1') {
                //     $('input[name=\'postcode\']').parent().parent().addClass('required');
                // } else {
                //     $('input[name=\'postcode\']').parent().parent().removeClass('required');
                // }
                var html = '';
                html = '<option value="">select option</option>';

                if (json['states'] && json['states'] != '') {
                    for (var i = 0; i < json['states'].length; i++) {
                        html += '<option value="' + json['states'][i]['id'] + '"';
                        //console.log(json['states'][i]['id']);
                        if (json['states'][i]['id'] == myLabel.state_id) {

                            html += ' selected="selected"';
                        }

                        html += '>' + json['states'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value="0" selected="selected">Empty</option>';
                }

                $('select[name="address[0][state_id]"]').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                //alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

    $('select[name="address[0][country_id]"]').trigger('change');
   
}(window.jQuery);
