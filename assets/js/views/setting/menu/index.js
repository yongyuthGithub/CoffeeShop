$(function () {
    var form_menu = $('#form_menu');

    form_menu.find('#intro').mypages({
        htmlRender: function (d) {
            var _html = '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 panel-group">';
            _html += '<div class="panel panel-default">';
            _html += '<div class="panel-body"><span>Panel Content ' + d.id + '</span>';
            _html += '<div class="text-right"><div class="m-btn blue-stripe btn-ok">ทดสอบระบบ <i class="icon-headphones"></i></div></div>';
            _html += '</div>';
            _html += '</div>';
            _html += '</div>';
            return _html;
        },
        data: {
            type: 'json', //json,ajax
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
            url: '',
            data: new Object()
        },
        itemsOnPage: 20,
        funHtmlRender: function (t, d) {
            t.find('.btn-ok').on({
                click: function () {
                    $.bPopup({
                        url: mvcPatch('Menu/edit'),
                        title: 'รายการที่ '.concat(d.id),
                        closable: false,
                        size: BootstrapDialog.SIZE_WIDE,
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


