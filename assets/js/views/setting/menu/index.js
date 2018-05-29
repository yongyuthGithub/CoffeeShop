$(function () {
    var form_menu = $('#form_menu');

    form_menu.find('#intro').mypages({
        htmlRender: function (d) {
            var _html = '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 panel-group">';
            _html += '<div class="panel panel-default">';
            _html += '<div class="panel-body">';
            _html += '<h4>' + d.Menu + '</h4>';
            _html += '<hr style="margin: 0px;">';
            _html += '<div class="text-left" style="font-size:80%;min-height:120px;max-height:120px;overflow: hidden;text-overflow: ellipsis;"><span style="opacity: .5;">รายละเอียด :</span> ' + d.Description + '<br>';
            _html += '<span style="opacity: .5;">url :</span>  ' + (checkNull(d.Url) ? '-' : d.Url);
            _html += '</div>';

            _html += '<hr style="margin: 0px;">';
            _html += '<div class="text-right">';
            _html += '<div class="m-btn-group">';
            _html += '<a class="m-btn dropdown-toggle" data-toggle="dropdown" href="#">';
            _html += '<i class="fa fa-bars"></i> <span class="caret"></span>';
            _html += '</a>';
            _html += '<ul class="m-dropdown-menu" style="min-width:0px;">';
            _html += '<li class="text-left"><a href="#" style="padding-right:20px;" class="btn-ok">Edit</a></li>';
            _html += '<li class="text-left"><a href="#" style="padding-right:20px;" class="btn-delete">Delete</a></li>';
            _html += '</ul>';
            _html += '</div>';
            _html += '</div>';

            _html += '</div>';
            _html += '</div>';
            _html += '</div>';
            return _html;
        },
        data: {
            type: 'ajax', //json,ajax
            jsonData: new Array(
                    {id: 1},
                    {id: 2},
                    {id: 3},
                    {id: 4},
                    {id: 5},
                    {id: 6},
                    {id: 7},
                    {id: 8},
                    {id: 9},
                    {id: 10},
                    {id: 11},
                    {id: 12},
                    {id: 1},
                    {id: 2},
                    {id: 3},
                    {id: 4},
                    {id: 5},
                    {id: 6},
                    {id: 7},
                    {id: 8},
                    {id: 9},
                    {id: 10},
                    {id: 11},
                    {id: 12}, ),
            url: mvcPatch('Menu/findMenu'),
            data: new Object()
        },
        itemsOnPage: 20,
        funHtmlRender: function (t, d) {
            t.find('.btn-ok').on({
                click: function () {
                    $.bPopup({
                        url: mvcPatch('Menu/edit'),
                        title: 'เมนู '.concat(d.Menu),
                        closable: false,
                        size: BootstrapDialog.SIZE_NORMAL,
                        onshow: function (k) {
                            k.getModal().data({
                                data: new Object({key: Guid}),
                                fun: function (_f) {
                                }
                            });
                        },
                        buttons: [
                            {
                                id: 'btn-ok',
                                icon: 'fa fa-check',
                                label: '&nbsp;Save',
                                action: function (k) {
                                    //javascript code
                                }
                            }
                        ]
                    });
                }
            });
        }
    });
});


