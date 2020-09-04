<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class View_lib{
    
    public function __construct()
    {
        
    }
    
    function render($page,$data = '')
    {
        $CI =&get_instance();
        //$CI->output->enable_profiler(TRUE);
        $data = (array)$data;
        if (!isset($data['title'])) $data['title'] = $CI->config->item('default_title');
        $data['content'] = $page;
        $data['data'] = $data;
        $CI->load->view('rezume',$data);
    }
    function render_investicion($page,$data = '')
    {
		$CI =&get_instance();
        $data = (array)$data;
        if (!isset($data['title'])) $data['title'] = $CI->config->item('default_title');
        $data['content'] = $page;
        $data['data'] = $data;
        $CI->load->view('/investicion/show',$data);
    }
    function render_news($page,$data = '')
    {
		$CI =&get_instance();
        $data = (array)$data;
        if (!isset($data['title'])) $data['title'] = $CI->config->item('default_title');
        $data['content'] = $page;
        $data['data'] = $data;
        $CI->load->view('/news/show',$data);
    }
}