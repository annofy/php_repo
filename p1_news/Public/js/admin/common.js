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