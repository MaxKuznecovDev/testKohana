<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Common {


    public $template = 'main';
    public function action_index()
    {
        $content = View::factory('/index');
        $this->template->title = 'Тест kohana';
        $this->template->scripts = array('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js','https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
        $this->template->boostrapLink = array("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css","sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u");
        $this->template->content = $content;
    }

    public function action_cssLayout()
    {
        $content = View::factory('/cssLayout/index');
        $this->template->title = 'Верстка HTML CSS';
        $this->template->styles = array('public/csslayout/style');
        $this->template->fonts = array('http://fonts.googleapis.com/css?family=Arvo:400,700|Cookie');
        $this->template->content = $content;
    }

    public function action_bootstraplayout(){
        $content = View::factory('/bootstraplayout/index');
        View::set_global('imgSrc', 'public/bootstraplayout/img');
        $this->template->title = 'Верстка bootstrap 3';
        $this->template->styles = array('public/bootstraplayout/style');
        $this->template->scripts = array('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js','https://oss.maxcdn.com/respond/1.4.2/respond.min.js');
        $this->template->fonts = array('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700');
        $this->template->boostrapLink = array("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css","sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u");
        $this->template->content = $content;
    }
    public function action_surfacing(){
        $content = View::factory('/surfacing/index');
        $this->template->title = 'Высплытие, делигирование';
        $this->template->styles = array('public/surfacing/style');
        $this->template->scripts = array(URL::base().'public/surfacing/script.js');
        $this->template->content = $content;
    }

}
