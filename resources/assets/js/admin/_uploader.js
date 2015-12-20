var $ = window.jQuery = require('jquery'),
    Sortable = require('sortablejs'),
    uploader = require('simple-uploader');

$(function(){
    $('.list-uploader').each(function(index, el) {
        Sortable.create(el, {
            group: index,
        });
    });

    if($('.uploader').length) {
        $('.uploader').each(function(index, el) {
            var opts = {
                container: $('.list-uploader', this),
                qn: $('meta[name=qn-url]').attr('content'),
                column: $(this).data('column'),
            };

            var uploadInst = new uploader({
                container: this,
                url: 'http://upload.qiniu.com/',
                params: {
                    token: $('meta[name=qn-uptkn]').attr('content')
                },
                fileKey: 'file',
                connectionCount: 20
            })

            $('.select-file', this).on('change', function(e) {
                uploadInst.upload(this.files);
            });

            uploadInst.on('uploadsuccess', function(e, file, result) {
                if (opts.column == 'attach') {
                    var template = '<li class="list-item list-group-item"><i class="fa fa-trash"></i><a href="' + opts.qn + result.key +'?attname='+ file.name +'">'+ file.name +'</a><input type="hidden" name="' + opts.column + '['+ result.key +']" value="'+ file.name +'"></li>';
                } else {
                    var template = '<div class="list-item"><i class="fa fa-trash"></i><a href="' + opts.qn + result.key +'?imageView2/2/w/750" target="_blank"><img class="img-responsive" src="'+ opts.qn + result.key +'?imageView2/1/w/150"></a><input type="hidden" name="' + opts.column + '[]" value="'+ result.key +'"></div>';
                }
                var preview = $(template);
                preview.appendTo(opts.container);
            });
        });
    }

    $('.list-uploader').on('click', '.fa-trash', function(event){
        event.preventDefault();
        $(this).closest('.list-item').remove();
    });

});
