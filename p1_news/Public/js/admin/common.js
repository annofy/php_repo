/**
 * 添加按钮操作
 */
$('#button_add').click(function() {
    window.location.href = SCOPE.add_url;
});

/**
 * 提交表单操作
 */
$('#menu_submit').click(function () {
    var data = $('#menu_add_form').serializeArray();
    var postData = {};
    $(data).each(function(i) {
       postData[this.name] = this.value;
    });
    console.log(postData);
    // 将获取到的数据post给服务器
    var url = SCOPE.save_url;
    $.post(url, postData, function(result) {
        if(result.status === 1) {
            // 成功
            return dialog.success(result.message, SCOPE.jump_url);
        } else if(result.status === 0) {
            // 失败
            return dialog.error(result.message);
        }
    }, 'JSON');
});
$('.menu-item-delete').on('click', function() {
    var id = $(this).attr('attr-id');
    var a = $(this).attr('attr-a');
    var message = $(this).attr('attr-message');
    var url = SCOPE.set_status_url;

    data = {};
    data['id'] = id;
    data['status'] = -1;

    layer.open({
        type: 0,
        title: '是否提交?',
        btn: ['确定', '取消'],
        icon: 3,
        closeBtn: 2,
        content: '是否确定' + message,
        scrollbar: true,
        确定: function() {
            // 执行相关跳转
            toDelete(url, data);
        }
    });

});
function toDelete(url, data) {
    $.post(url, data, function(result) {
        if(result.status === 1) {
            return dialog.success(result.message, '');
        } else {
            return dialog.error(result.message);
        }
    })
}
/**
 * 编辑模式
 */
$('.menu-item-edit').on('click', function () {
    var id = $(this).attr('attr-id');
    window.location.href = SCOPE.edit_url + '&id=' + id;
});
