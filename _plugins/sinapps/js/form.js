var _currentrow = '';
var _redirectpage = '';

function sinappsAjax($imagebox, id_form, url_validation, login, btn) {
    $("#ssuccessclose").on("click", function(event) {
        event.preventDefault();
        $("#smsg").slideToggle("slow");
    });
    $("#sdangerclose").on("click", function(event) {
        event.preventDefault();
        $("#dmsg").slideToggle("slow");
    });
    $(document).on("click", '#' + btn, function(e) {
        e.preventDefault();
        var mysinappsform = $('#' + id_form);
        var $zf = mysinappsform.data('Zebra_Form');
        if ($zf.validate()) {
            var formData = mysinappsform.serialize();
            $.ajax({
                type: "POST",
                data: formData,
                url: url_validation,
                beforeSend: function() {
                    sinappsDialog.show('Traitement en cours...', {
                        dialogSize: 'sm',
                        imageBox: $imagebox
                    });
                },
                success: function(data) {
                    sinappsDialog.hide();
                    if (login != 'false') {
                        parseLogin(data);
                    } else {
                        parseAjax(data);
                    }
                },
                error: function() {
                    sinappsDialog.hide();
                    alert("Une erreur inattendue est survenue. Veuillez contacter l'administrateur");
                }
            })
        }
    });
}
/*------------------------------------------------------------------------*/
function ModalChange(modalname, id_form, urlvalidation, btn) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        var sinapps_btn = sinapps_modal + ' #' + btn;
        var form = '#' + id_form;
        FormSubmit(sinapps_modal, form, urlvalidation, sinapps_btn, 'change');
    });
}

function parseChange(data, sinapps_modal) {
    var response = jQuery.parseJSON(data);
    //alert(_currentrow);
    var isvalid = response.id;
    var msg = response.msg;
    var redirect = response.row;
    if (isvalid > 0) {
        var sinapps_btn_reset = sinapps_modal + ' #btncancel';
        $(sinapps_btn_reset).click();
        $(sinapps_modal + ' .modal-body').html(msg);
        setTimeout(function() {
            $(sinapps_modal).modal("hide");
        }, 2000);
        document.location.href = redirect;
    } else {
        modalFail(sinapps_modal, msg);
    }
}
/*------------------------------------------------------------------------*/
function parseLogin(data) {
    var response = jQuery.parseJSON(data);
    var isvalid = response.id;
    var msg = response.msg;
    var redirect = response.row;
    var sinapps_modal = 'body';
    if (isvalid > 0) {
        document.location.href = redirect;
    } else {
        var sinapps_nok_msg = sinapps_modal + ' #dmsg';
        $(sinapps_modal + " #opdmsg").html(msg);
        $(sinapps_nok_msg).show("slow");
    }
}

function parseAjax(data) {
    var response = jQuery.parseJSON(data);
    var isvalid = response.id;
    var msg = response.msg;
    //var redirect= response.redirect
    sinapps_modal = 'body';
    if (isvalid > 0) {
        if (typeof(response.redirect) != 'undefined') {
            if (response.redirect != '') {
                document.location.href = response.redirect;
                return true;
            }
        }
        modalSuccess(sinapps_modal, isvalid, msg);
    } else {
        var sinapps_nok_msg = sinapps_modal + ' #dmsg';
        $(sinapps_modal + " #opdmsg").html(msg);
        $(sinapps_nok_msg).show("slow");
    }
}
//----------------------------------------------------------Initiaisation -----------------------------------------------------------
// addMask to the modal for form elements
function modalMask(modalid, parent) {
    $(document).on("shown.bs.modal", modalid, function(e) {
        setTimeout(function() {
            $(modalid + ' .sinappsphone').mask('00 000 00 00');
            $(modalid + ' .sinappsdate').mask('00-00-0000');
            $(modalid + ' .sinappsselect2').select2({
                     dropdownParent: $(modalid),
                     width: '100%'
                 });
            ModalDataTable(modalid, parent);
        }, 300);
    });
}

function modalDisplayMask(modalid) {
    $(document).on("shown.bs.modal", modalid, function(e) {
        setTimeout(function() {
            $(modalid + ' .sinappsphone').mask('00 000 00 00');
            $(modalid + ' .sinappsdate').mask('00-00-0000');
            var is_datatable = $(modalid + ' .display-datatable').get(0);
            if (typeof(is_datatable) != 'undefined') {
                $(modalid + ' .display-datatable').DataTable({
                    "retrieve": true,
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                    }
                });
            }
            /* $(modalid + ' .sinappsselect2').select2({
                     dropdownParent: $(modalid),
                     width: '100%'
                 });*/
            ModalDataTable(modalid, parent);
        }, 300);
    });
}


function modalDetailsMask(modalid) {
    $(document).on("shown.bs.modal", modalid, function(e) {
        setTimeout(function() {

                             $(':radio:not(:checked)').attr('disabled', true);

            $(modalid + ' .sinappsphone').mask('00 000 00 00');
            $(modalid + ' .sinappsdate').mask('00-00-0000');
            var is_datatable = $(modalid + ' .display-datatable').get(0);
            if (typeof(is_datatable) != 'undefined') {
                $(modalid + ' .display-datatable').DataTable({
                    "retrieve": true,
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                    }
                });
            }
           
        }, 300);
    });
}


function modalMaskParent(modalid) {
    $(document).on("shown.bs.modal", modalid, function(e) {
        setTimeout(function() {
            $(modalid + ' .sinappsphone').mask('00 000 00 00');
            $(modalid + ' .sinappsdate').mask('00-00-0000');
            $(modalid + ' .sinappsselect2').select2({
                     dropdownParent: $(modalid),
                     width: '100%'
                 });
        }, 300);
    });
}

function initialize(sinapps_modal, sinapps_btn) {
    var sinapps_nok_msg = sinapps_modal + ' #dmsg';
    var sinapps_ok_msg = sinapps_modal + ' #smsg';
    var sinapps_pg = sinapps_modal + ' #pgbar';
    $(sinapps_pg).show();
    //$(sinapps_btn).hide('fast');
    $(sinapps_btn).prop('disabled', true);
    // $(sinapps_modal + " #opdmsg").html('');
    //$(sinapps_modal + ' #opsmsg').html('');
    $(sinapps_nok_msg).hide();
    $(sinapps_ok_msg).hide();
}
//buttons beahviours 
function initButtons(sinapps_modal) {
    var sinapps_nok_close = sinapps_modal + ' #sdangerclose';
    var sinapps_ok_close = sinapps_modal + ' #ssuccessclose';
    var sinapps_nok_msg = sinapps_modal + ' #dmsg';
    var sinapps_ok_msg = sinapps_modal + ' #smsg';
    $(sinapps_ok_close).on("click", function(event) {
        event.preventDefault();
        $(sinapps_ok_msg).slideToggle("slow");
    });
    $(sinapps_nok_close).on("click", function(event) {
        event.preventDefault();
        $(sinapps_nok_msg).slideToggle("slow");
    });
}
//----------------------------------------------------------FORM SUBMIT AND MODAL LOAD------------------------------------
function ModalDisplay(modalname) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        /** Modal load */
        $(document).on("show.bs.modal", sinapps_modal, function(e) {
            var link = $(e.relatedTarget).attr("href");
            $(sinapps_modal + " .modal-body").load(link);
        });
        modalDisplayMask(sinapps_modal);
    });
}

function ModalDetails(modalname) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        /** Modal load */
        $(document).on("show.bs.modal", sinapps_modal, function(e) {
            var link = $(e.relatedTarget).attr("href");
            $(sinapps_modal + " .modal-body").load(link);
        });
                modalDetailsMask(sinapps_modal);

    });
}

function loadModal(sinapps_modal, row, mode, parent) {
    $(document).on("show.bs.modal", sinapps_modal, function(e) {

        var link = $(e.relatedTarget).attr("href");

        $(sinapps_modal + " .modal-body").load(link);
        
        if (typeof(row) != 'undefined') {
            _currentrow = row;
        }
        switch (mode) {
            case 'edit':
                data_row = $(e.relatedTarget).attr("data-row");
                _currentrow = _currentrow + ' #' + data_row;
                break;
            case 'subedit':
                data_row = $(e.relatedTarget).attr("data-row");
                _currentrow = _currentrow + ' #' + data_row;
                break;
            case 'insert':
                break;
        }
    });
    $(document).on("hidden.bs.modal", sinapps_modal, function(e) {
        if (typeof(parent) != 'undefined') {
            _currentrow = parent;
        } else {
            _currentrow = row;
        }
        $(sinapps_modal + " .modal-body").html('');
        //   alert('mycurrent : ' + _currentrow);
        if ($zfs) {
            $zfs.clear_errors();
        }
        switch (mode) {
            case 'insert':
                if (typeof(parent) == 'undefined') {
                    sinapps_modal_table = null;
                } else {
                    if (parent == '') {
                        sinapps_modal_table = null;
                    } else {
                        sinapps_submodal_table = null;
                    }
                }
                break;
            case 'edit':
                sinapps_modal_table=null;
                break;
        }
    });
    switch (mode) {
        case 'edit':
            modalMaskParent(sinapps_modal);
            break;
        case 'subedit':
            modalMaskParent(sinapps_modal);
            break;
        case 'subinsert':
            modalMaskParent(sinapps_modal);
            break;
        default:
            modalMask(sinapps_modal, parent);
            break;
    }
}

function FormSubmit(sinapps_modal, id_form, url_post, sinapps_btn, sinapps_op, source) {
    $(document).on("submit", id_form, function(e) {
        e.preventDefault();
        initButtons(sinapps_modal);
        var mysinappsform = $(id_form);
        var $zf = mysinappsform.data('Zebra_Form');
        if ($zf.validate()) {
            $.ajax({
                type: "POST",
                url: url_post,
                data: $(id_form).serialize(),
                beforeSend: function() {
                    initialize(sinapps_modal, sinapps_btn);
                },
                success: function(data) {
                    //  alert(data);
                    //  $(sinapps_btn).show('slow');
                    $(sinapps_btn).prop('disabled', false);
                    switch (sinapps_op) {
                        case 'insert':
                            parseInsert(data, sinapps_modal, source);
                            break;
                        case 'change':
                            parseChange(data, sinapps_modal);
                            break;
                        case 'update':
                            parseUpdate(data, sinapps_modal);
                            break;
                        default:
                            alert('une erreur inattendue est survenue');
                    }
                },
                error: function() {
                    alert("Un erreur est survenue : Veuillez refermer et actualiser");
                    //$(sinapps_btn).show('slow');
                    $(sinapps_btn).prop('disabled', false);
                }
            });
        }
    });
}
//----------------------------------------------------------INSERT PROCESS------------------------------------
function DefaultModalInsert(modalname, id_form, urlvalidation, option, btn) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        var sinapps_btn = sinapps_modal + ' #' + btn;
        var form = '#' + id_form;
        $(document).on("show.bs.modal", sinapps_modal, function(e) {
            _currentrow = '.table tbody';
        });
        $(document).on("shown.bs.modal", sinapps_modal, function(e) {
            $(sinapps_modal + ' .sinappsselect2').select2({
                dropdownParent: $(sinapps_modal),
                width: '100%'
            });
        });
        $(document).on("hidden.bs.modal", sinapps_modal, function(e) {
            _currentrow = '';
        });
        //loadModal(sinapps_modal,row);
        FormSubmit(sinapps_modal, form, urlvalidation, sinapps_btn, 'insert', 'default');
    });
}

function ModalInsert(modalname, id_form, urlvalidation, parent, btn) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        var sinapps_btn = sinapps_modal + ' #' + btn;
        row = sinapps_modal + ' .table tbody';
        var form = '#' + id_form;
        if (parent != '') {
            _parentrow = '#' + parent + ' .table tbody';
            loadModal(sinapps_modal, row, 'insert', _parentrow);
        } else {
            loadModal(sinapps_modal, row, 'insert');
        }
        FormSubmit(sinapps_modal, form, urlvalidation, sinapps_btn, 'insert', 'modalinsert');
    });
}

function ModalCreate(modalname, id_form, urlvalidation, btn) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        var sinapps_btn = sinapps_modal + ' #' + btn;
        var form = '#' + id_form;
        loadModal(sinapps_modal);
        FormSubmit(sinapps_modal, form, urlvalidation, sinapps_btn, 'insert');
    });
}
/// Submodal insert with row update 
function SubModalInsert(modalname, id_form, urlvalidation, modal_parent, btn) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        var sinapps_btn = sinapps_modal + ' #' + btn;
        var form = '#' + id_form;
        var row = '#' + modal_parent + ' .table tbody';
        var parent = '#' + modal_parent;
        loadModal(sinapps_modal, row, 'subinsert', parent);
        FormSubmit(sinapps_modal, form, urlvalidation, sinapps_btn, 'insert', 'submodalinser');
    });
}
//----------------------------------------------------------EDIT  PROCESS--------------------------------------------------------------
// Inline Edit
function ModalEdit(modalname, id_form, urlvalidation, option, btn) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        var sinapps_btn = sinapps_modal + ' #' + btn;
        sinapps_control_submit = sinapps_btn;
        var form = '#' + id_form;
        var row = '.table tbody';
        switch (option) {
            case 'update':
                loadModal(sinapps_modal, row, 'edit');
                break;
            default:
                loadModal(sinapps_modal);
        }
        FormSubmit(sinapps_modal, form, urlvalidation, sinapps_btn, 'update', 'modalupdate');
    });
}
//Sub model Edit with row update
function SubModalEdit(modalname, id_form, urlvalidation, modal_parent, btn) {
    $(function() {
        var sinapps_modal = '#' + modalname;
        var sinapps_btn = sinapps_modal + ' #' + btn;
        var form = '#' + id_form;
        var row = '#' + modal_parent + ' .table tbody';
        var parent = '#' + modal_parent;
        loadModal(sinapps_modal, row, 'subedit', parent);
        FormSubmit(sinapps_modal, form, urlvalidation, sinapps_btn, 'update');
    });
}
//----------------------------------------------------------DELETE  PROCESS--------------------------------------------------------------
function AjaxDelete(urlvalidation, datapost, row) {
    var dialog;
    $.ajax({
        type: "POST",
        url: urlvalidation,
        data: datapost,
        beforeSend: function() {
            //initialize(sinapps_modal,sinapps_btn);
            dialog = bootbox.dialog({
                message: '<p class="text-center">Patientez suppression en cours ...</p>',
                title: 'Suppression',
                closeButton: false
            });
        },
        success: function(data) {
            /*dialog.find('.bootbox-body').html('I was loaded after the dialog was shown!');

              setTimeout(function(){
                  dialog.modal('hide');
              }, 3000);*/
            parseDelete(data, dialog, row);
        },
        error: function() {
            alert("failure");
        }
    });
}

function sinappsDeleteConfirmation(parent, itemclass, boxtitle, msg, url) {
    $(function() {
        $(document).on('click', 'a.' + itemclass, function(event) {
            // $('.'+itemclass).on("click", function (event){
            event.preventDefault();
            var row_item = $(this).attr('sinappsdata-id');
            //var row = $(this).attr('data-row');
            if (parent != '') {
                var row = '#' + parent + ' .table tbody #sintr_';
            } else {
                var row = '.table tbody #sintr_';
            }
            var postdata = '_sinappshoneypot=' + row_item;
            bootbox.confirm({
                message: msg,
                title: boxtitle,
                closeButton: false,
                buttons: {
                    cancel: {
                        label: "Annuller",
                        className: "btn btn-default btn-sm"
                    },
                    confirm: {
                        label: "Confirmer",
                        className: "btn btn-primary btn-sm"
                    }
                },
                callback: function(result) {
                    if (result == true) {
                        AjaxDelete(url, postdata, row);
                    }
                }
            });
        });
    });
}
//----------------------------------------Sinapps Ajax Redirect ------------------------------------------------------
function sinappsRedirect(itemclass, url) {
    $(function() {
        $(document).on('click', 'a.' + itemclass, function(event) {
            event.preventDefault();
            var row_item = $(this).attr('sinappsdata-id');
            var postdata = '_sinappshoneypot=' + row_item;
            AjaxRedirect(url, postdata);
        });
    });
}

function AjaxRedirect(urlvalidation, datapost) {
    var dialog;
    $.ajax({
        type: "POST",
        url: urlvalidation,
        data: datapost,
        beforeSend: function() {
            dialog = bootbox.dialog({
                message: '<p class="text-center">Patientez redirection  en cours ...</p>',
                title: 'Redirection',
                closeButton: false
            });
        },
        success: function(data) {
            parseRedirect(data, dialog);
        },
        error: function() {
            alert("failure");
        }
    });
}

function parseRedirect(data, dialog) {
    var response = jQuery.parseJSON(data);
    var isvalid = response.id;
    var msg = response.msg;
    var redirect_url = response.row;
    dialog.find('.bootbox-body').html(msg);
    if (isvalid > 0) {
        setTimeout(function() {
            dialog.modal('hide');
        }, 2000);
        document.location.href = redirect_url;
        return false;
    }
    setTimeout(function() {
        dialog.modal('hide');
    }, 3000);
}
//----------------------------------------------------AJAX PROCESS AFTER CONFIRMATION -----------------------------------------------------------------
function AjaxConfirmation(urlvalidation, datapost, boxtitle, msg) {
    var dialog;
    $.ajax({
        type: "POST",
        url: urlvalidation,
        data: datapost,
        beforeSend: function() {
            //initialize(sinapps_modal,sinapps_btn);
            dialog = bootbox.dialog({
                message: '<p class="text-center">' + msg + '</p>',
                title: boxtitle,
                closeButton: false
            });
        },
        success: function(data) {
            parseConfirmation(data, dialog);
        },
        error: function() {
            dialog.modal('hide');
            alert("Une erreur inattendue est survenue");
        }
    });
}

function sinappsDialogConfirmation(itemclass, boxtitle, msg, url) {
    $(function() {
        $(document).on('click', 'a.' + itemclass, function(event) {
            event.preventDefault();
            var row_item = $(this).attr('sinappsdata-id');
            var postdata = '_sinappshoneypot=' + row_item;
            _currentrow = '.table tbody #' + $(this).attr('data-row');
            /*if(parent !='') {

                 var row = '#' + parent + ' .table tbody #sintr_';
            }
            else{

               var row =  '.table tbody #sintr_';
            }*/
            bootbox.confirm({
                message: msg,
                title: boxtitle,
                closeButton: false,
                buttons: {
                    cancel: {
                        label: "Annuller",
                        className: "btn btn-default btn-sm"
                    },
                    confirm: {
                        label: "Confirmer",
                        className: "btn btn-primary btn-sm"
                    }
                },
                callback: function(result) {
                    if (result == true) {
                        AjaxConfirmation(url, postdata, boxtitle, msg);
                    }
                }
            });
        });
    });
}
// Parse Ajax response 
function parseConfirmation(data, dialog) {
    var response = jQuery.parseJSON(data);
    var isvalid = response.id;
    var msg = response.msg;
    var row = response.row;
    var irow = response.irow;
    // alert(sinapps_row);
    if (isvalid > 0) {
        if (sinapps_table_row) {
            sdtUpdate(irow);
        } else {
            if (_currentrow != '') {
                if (row != '') {
                    $(_currentrow + ' .tblfield').remove();
                    $(_currentrow).prepend(row);
                }
            }
        }
        _currentrow = '';
        switch (isvalid) {
            case 1:
                dialog.find('.bootbox-body').html(msg);
                setTimeout(function() {
                    dialog.modal('hide');
                }, 2000);
                break;
            case 2:
                var boxtitle = dialog.find('.modal-title').html();
                bootbox.alert({
                    message: '<p class="text-center">' + msg + '</p>',
                    title: boxtitle,
                    closeButton: false
                });
                setTimeout(function() {
                    dialog.modal('hide');
                }, 1000);
                break;
        }
    } else {
        var boxtitle = dialog.find('.modal-title').html();
        bootbox.alert({
            message: '<p class="text-center">' + msg + '</p>',
            title: boxtitle,
            closeButton: false
        });
        setTimeout(function() {
            dialog.modal('hide');
        }, 1000);
    }
}
//----------------------------------------------------------SUCCESS AND  FAIL  PROCESS--------------------------------------------------------------
// Form sucess processing
function modalSuccess(sinapps_modal, isvalid, msg, redirect) {
    var sinapps_btn_reset = sinapps_modal + ' #btncancel';
    var sinapps_ok_msg = sinapps_modal + ' #smsg';
    switch (isvalid) {
        /**insertion contiue */
        case 1:
            $(sinapps_btn_reset).click();
            $(sinapps_modal + ' #pgbar').hide();
            $(sinapps_modal + ' #opsmsg').html(msg);
            $(sinapps_ok_msg).show("slow");
            setTimeout(function() {
                $(sinapps_ok_msg).hide("slow");
            }, 2000);
            break;
            /**insertion unique */
        case 2:
            $(sinapps_btn_reset).click();
            $(sinapps_modal + ' .modal-body').html(msg);
            setTimeout(function() {
                $(sinapps_modal).modal("hide");
            }, 2000);
            break;
            /** Mise à jour  */
        case 3:
            $(sinapps_modal + ' #pgbar').hide();
            $(sinapps_modal + ' #opsmsg').html(msg);
            $(sinapps_ok_msg).show("slow");
            break;
            /** Password Reset */
        case 4:
            $(sinapps_btn_reset).click();
            $(sinapps_modal + ' #pgbar').hide();
            $(sinapps_modal + ' #opsmsg').html(msg);
            $(sinapps_ok_msg).show("slow");
            break;
        default:
            alert('Une erreur inattendue est survenue');
            break;
    }
    if (typeof(redirect) == 'undefined') return;
    if (redirect != '') {
        $(sinapps_modal).on('hidden.bs.modal', function(e) {
            e.preventDefault();
            // window.location.reload();
            document.location.href = redirect;
        });
    }
}

function modalFail(sinapps_modal, msg) {
    var sinapps_btn_reset = sinapps_modal + ' #btncancel';
    var sinapps_nok_msg = sinapps_modal + ' #dmsg';
    $(sinapps_modal).on('hidden.bs.modal', function(e) {
        e.preventDefault();
        $(sinapps_btn_reset).click();
        $(sinapps_modal + " #opdmsg").html('');
        $(sinapps_nok_msg).hide();
    });
    $(sinapps_modal + " #pgbar").hide();
    $(sinapps_modal + " #opdmsg").html(msg);
    $(sinapps_nok_msg).show("slow");
}
//----------------------------------------------------------PARSER--------------------------------------------------------------
function parseInsert(data, sinapps_modal, source) {
    var response = jQuery.parseJSON(data);
    //alert(_currentrow);
    var isvalid = response.id;
    var msg = response.msg;
    var row_op = response.row;
    if (isvalid > 0) {
        modalSuccess(sinapps_modal, isvalid, msg);
        sdtInsert(row_op, source);
        /*if (sinapps_table) {
            sinapps_table.row.add($(row_op)[0]).order([
                [0, 'desc']
            ]).draw();
        } else {
            if (_currentrow != '') {
                $(_currentrow).append(row_op);
            }
        }*/
        //alert(row_op);
    } else {
        modalFail(sinapps_modal, msg);
    }
}

function parseDelete(data, dialog, sinapps_row) {
    var response = jQuery.parseJSON(data);
    var isvalid = response.id;
    var msg = response.msg;
    var row = response.row;
    var table = sinapps_row + row;
    dialog.find('.bootbox-body').html(msg);
    if (isvalid > 0) {
        // $(table).remove();
        //  sinapps_table.draw('page');
        sdtDelete(table);
    }
    setTimeout(function() {
        dialog.modal('hide');
    }, 3000);
}

function TrToData(row) {
    return $(row).find('td').map(function(i, el) {
        return el.innerHTML;
    }).get();
}

function sdtUpdate(uRow) {
    //    sinapps_table.row(sinapps_table_row).draw('page');
    var newRowDataArray = TrToData(uRow);
    var l = newRowDataArray.length;
    if (sinapps_submodal_table) {
        //  alert('sub edit');
        var mytr = sinapps_submodal_table.row(sinapps_table_row).data();
        newRowDataArray[l] = mytr[mytr.length - 1];
        sinapps_submodal_table.row(sinapps_table_row).data(newRowDataArray).draw('page');
    } else {
        if (sinapps_modal_table) {
            //   alert('modal update');
            var mytr = sinapps_modal_table.row(sinapps_table_row).data();
            newRowDataArray[l] = mytr[mytr.length - 1];
            sinapps_modal_table.row(sinapps_table_row).data(newRowDataArray).draw('page');
        } else {
            if (sinapps_table) {
                var mytr = sinapps_table.row(sinapps_table_row).data();
                newRowDataArray[l] = mytr[mytr.length - 1];
                sinapps_table.row(sinapps_table_row).data(newRowDataArray).draw('page');
            }
        }
    }
}

function sdtInsert(irow, source) {
    switch (source) {
        case 'default':
            if (sinapps_table) {
                //   alert('hacker');
                sinapps_table.row.add($(irow)[0]).order([
                    [0, 'desc']
                ]).draw();
            } else {
                if (_currentrow != '') {
                    $(_currentrow).append(irow);
                }
            }
            break;
        default:
            if (sinapps_submodal_table) {
                sinapps_submodal_table.row.add($(irow)[0]).order([
                    [0, 'desc']
                ]).draw();
            } else {
                if (sinapps_modal_table) {
                    //   alert('ici');
                    sinapps_modal_table.row.add($(irow)[0]).order([
                        [0, 'desc']
                    ]).draw();
                } else {
                    if (_currentrow != '') {
                        $(_currentrow).append(irow);
                    }
                }
            }
            break;
    }
}

function sdtDelete(table) {
    if (sinapps_table_row) {
        if (sinapps_submodal_table) {
            sinapps_submodal_table.row(sinapps_table_row).remove().draw();
        } else {
            if (sinapps_modal_table) {
                sinapps_modal_table.row(sinapps_table_row).remove().draw();
            } else {
                if (sinapps_table) {
                    sinapps_table.row(sinapps_table_row).remove().draw();
                }
            }
        }
    } else {
        $(table).remove();
    }
}
// Parse Ajax update 
function parseUpdate(data, sinapps_modal) {
    var response = jQuery.parseJSON(data);
    var isvalid = response.id;
    var msg = response.msg;
    var row = response.row;
    var irow = response.irow;
    if (isvalid > 0) {
        modalSuccess(sinapps_modal, isvalid, msg);
        if (sinapps_table_row) {
            sdtUpdate(irow);
        } else {
            if (_currentrow != '') {
                if (row != '') {
                    $(_currentrow + ' .tblfield').remove();
                    $(_currentrow).prepend(row);
                }
            }
        }
    } else {
        modalFail(sinapps_modal, msg);
    }
}
//----------------------------------------------------------BOX ACTIONS--------------------------------------------------------------
function sinappsBoxAction(id, urlform, msg) {
    $(function() {
        $('#' + id).on("click", function(event) {
            event.preventDefault();
            var n = $("input:checked").length;
            if (n > 0) {
                bootbox.confirm({
                    message: msg,
                    title: "Remove User",
                    buttons: {
                        cancel: {
                            label: "Annuller",
                            className: "btn btn-default"
                        },
                        confirm: {
                            label: "Continuer",
                            className: "btn btn-primary"
                        }
                    },
                    callback: function(result) {
                        if (result == true) {
                            var $form = $('#scboxForm');
                            $form.attr('action', urlform);
                            $form.submit();
                        }
                    }
                });
            }
        })
    });
}