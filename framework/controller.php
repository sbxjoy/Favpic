<?php
class Controller
{
    private $_attr = array();
    protected function preDispatch() { }
    protected function postDispatch() { }

    protected final function getParam($paramKey, $defVal)
    {/*{{{*/
        return isset($_REQUEST[$paramKey]) ? $_REQUEST[$paramKey] : $defVal;
    }/*}}}*/

    public final function runMethod($action)
    {/*{{{*/
        if (!method_exists($this, $action))
        {
            echo FrameWorkConstants::FILE_NOT_EXISTS;
            exit;
        }
        $this->preDispatch();
        $this->$action();
        $this->postDispatch();
    }/*}}}*/

    protected final function assign($key, $val)
    {/*{{{*/
        $this->_attr[$key] = $val;
    }/*}}}*/

    protected final function render()
    {/*{{{*/
    }/*}}}*/ }
