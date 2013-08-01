<?php
spl_autoload_register("myAutoLoad");
function myAutoLoad($classname)
{
    if(strpos($classname,"QFrame") === 0)
    {
        QFrameLoader::loadClass($classname);
    }else
    {
        $classpath = getClassPath();
        if (isset($classpath[$classname]))
        {
            include($classpath[$classname]);
        }
    }
}
function getClassPath()
{
    static $classpath=array();
    if (!empty($classpath)) return $classpath;
    if(function_exists("apc_fetch"))
    {
        $classpath = apc_fetch("fw:lvxiang:autoload:map:1375351014");
        if ($classpath) return $classpath;

        $classpath = getClassMapDef();
        apc_store("fw:lvxiang:autoload:map:1375351014",$classpath); 
    }
    else if(function_exists("eaccelerator_get"))
    {
        $classpath = eaccelerator_get("fw:lvxiang:autoload:map:1375351014");
        if ($classpath) return $classpath;

        $classpath = getClassMapDef();
        eaccelerator_put("fw:lvxiang:autoload:map:1375351014",$classpath); 
    }
    else
    {
        $classpath = getClassMapDef();
    }
    return $classpath;
}
function getClassMapDef()
{
    return array(
        			"IndexController" => 			"/home/lvxiang/Favpic/controller/IndexController.php",
			"Controller" => 			"/home/lvxiang/Favpic/framework/controller.php",
			"FrameWorkConstants" => 			"/home/lvxiang/Favpic/framework/frame_const.php",
			"View" => 			"/home/lvxiang/Favpic/framework/view.php",

    );
}
?>