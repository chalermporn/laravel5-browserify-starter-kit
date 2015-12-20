var $ = window.jQuery = require('jquery'),
    Simditor = require('simditor');

$(function(){
    if($('.simditor').length) {
        var editor = new Simditor({
            toolbar: [
                'title', 'bold', 'italic', 'underline', 'strikethrough', 'color', 'ol', 'ul', 'blockquote', 'code', 'table', 'link', 'image', 'hr', 'alignment'
            ],
            textarea: $('.simditor'),
            upload: {
                // 'returnBody' => '{"success":true, "file_path":"http://7xlhuu.com1.z0.glb.clouddn.com/$(key)?imageView2/2/w/723/format/jpg"}'
                url: 'http://upload.qiniu.com/',
                params: {
                    token: $('meta[name=qn-edtkn]').attr('content')
                },
                fileKey: 'file',
                leaveConfirm: '正在上传文件，如果离开上传会自动取消'
            }
        });
    }
});
