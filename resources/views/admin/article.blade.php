@extends('admin')

@section('body')
@if (Route::is('admin.article.index')) {{-- 列表页面 --}}
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{!! route('admin.article.create') !!}" class="btn btn-sm btn-primary pull-right" >添加文章</a>
                    <h3 class="panel-title">文章管理</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>文章标题</th>
                                <th>分类</th>
                                <th>发布时间</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{!! $item->id !!}</td>
                                    <td>{!! $item->name !!}</td>
                                    <td>{!! $item->category_id !!}</td>
                                    <td>{!! $item->created_at->format('Y年m月d日') !!}</td>
                                    <td class="text-right">
                                        <ul class="list-inline mb-0">
                                            <li><a href="" target="preview">查看</a></li>
                                            <li><a href="{!! route('admin.article.edit', $item->id) !!}">编辑</a></li>
                                            <li><a href="{!! route('admin.article.destroy', $item->id) !!}" class="ujs-destroy" data-method='delete' data-confirm='确认删除此记录？' rel="nofollow">删除</a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">{!! $items->render() !!}</div>
            </div>
        </div>
    </div>
@else {{-- 添加/编辑页面 --}}
    <div class="row">
        @if (isset($item))
            {!! BootForm::open()->action(route('admin.article.update', $item->id))->put() !!}
            {!! BootForm::bind($item) !!}
        @else
            {!! BootForm::open()->action(route('admin.article.store')) !!}
        @endif
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">文章管理</h3>
                </div>
                <div class="panel-body">
                    {!! BootForm::token() !!}
                    {!! BootForm::select('文章分类', 'category_id') !!}
                    {!! BootForm::text('文章标题', 'name') !!}
                    {!! BootForm::text('作者', 'author') !!}
                    {!! BootForm::text('来源', 'source') !!}
                    {!! BootForm::text('发布时间', 'created_at')->defaultValue(now()) !!}
                    {!! BootForm::textarea('文章内容', 'content')->rows(5)->addClass('simditor') !!}
                    {!! BootForm::submit('保存')->class('btn btn-primary')->data('disable-with',"保存中 ...") !!}
                    <a href="{!! URL::previous() !!}" class="btn btn-default">返回</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('admin.uploader', compact('item'))
        </div>
        {!! BootForm::close() !!}
    </div>
@endif
@stop
