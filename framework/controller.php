<?php
class Controller
{
    protected function preDispatch() { }
    protected function postDispatch() { }

    private function getParam($paramKey, $defVal)
    {/*{{{*/
        return isset($_REQUEST[$paramKey]) ? $_REQUEST[$paramKey] : $defVal;
    }/*}}}*/

    public function runMethod($methodName)
    {/*{{{*/
    }/*}}}*/

}
