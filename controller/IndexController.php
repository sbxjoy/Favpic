<?php
class IndexController extends Controller
{
    public function IndexAction()
    {/*{{{*/
        var_dump($this->getParam('test', 'asf'));
        $this->assign('test', 'test');
        var_dump('hi index');
    }/*}}}*/
}
