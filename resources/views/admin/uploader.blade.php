<div class="panel panel-default uploader" data-column="photo">
    <div class="panel-heading">
        <span class="btn btn-default btn-sm btn-file pull-right">
            上传图片 <input type="file" class="select-file" multiple>
        </span>
        <h3 class="panel-title">图片</h3>
    </div>
    <div class="panel-body list-uploader">
        @if (isset($item) AND $item->photo)
            @foreach ($item->photo as $photo)
                <div class="list-item">
                    <i class="fa fa-trash"></i>
                    <a href="{!! qn($photo, '/2/w/750') !!}" target="_blank"><img class="img-responsive" src="{!! qn($photo, '/1/w/150') !!}"></a>
                    {!! BootForm::hidden('photo[]')->value($photo) !!}
                </div>
            @endforeach
        @endif
    </div>
</div>

<div class="panel panel-default uploader" data-column="attach">
    <div class="panel-heading">
        <span class="btn btn-default btn-sm btn-file pull-right">
            上传附件 <input type="file" class="select-file" multiple>
        </span>
        <h3 class="panel-title">附件</h3>
    </div>
    <ul class="list-group list-uploader">
        @if (isset($item) AND $item->attach)
            @foreach ($item->attach as $key => $attname)
                <li class="list-item list-group-item">
                    <i class="fa fa-trash"></i>
                    <a href="{!! qn($key, 1, $attname) !!}">{!! $attname !!}</a>
                    {!! BootForm::hidden('attach['.$key.']')->value($attname) !!}
                </li>
            @endforeach
        @endif
    </ul>
</div>
