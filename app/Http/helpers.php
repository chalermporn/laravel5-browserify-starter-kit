<?php

// 截取摘要
if (! function_exists('excerpt')) {
    function excerpt($text, $count)
    {
        $excerpt = trim(preg_replace('/\s/', '', strip_tags($text)));
        return str_limit($excerpt, $count);
    }
}

// 生成七牛地址
if (! function_exists('qn')) {
    function qn($file, $param = null, $filename = null)
    {
        if (is_string($param)) {
            return env('QN_URL').$file.'?imageView2'.$param;
        } elseif ($param === 1) {
            return env('QN_URL').$file.'?attname='.$filename;
        } else {
            return env('QN_URL').$file;
        }
    }
}

// 当前时间
if (! function_exists('now')) {
    function now()
    {
        return \Carbon\Carbon::now();
    }
}
