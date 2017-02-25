<?php
use Jenssegers\Blade\Blade;


class My_blade extends Blade{

    function __construct($module_name)
    {
        $path_custome = APPPATH."modules/".strtolower($module_name)."/views";
        $viewPaths = [$path_custome,APPPATH."views"];
        $cachePath = APPPATH."cache";
        $container = null;
        parent::__construct($viewPaths, $cachePath, $container);
    }


    public function view($path, $vars = [])
    {
        echo parent::make($path, $vars);
    }

    public function exists($path)
    {
        return parent::exists($path);
    }

    public function share($params)
    {
        parent::share($params);
    }

    public function render($view, $data = [], $mergeData = [])
    {
        return $this->container['view']->make($view, $data, $mergeData)->render();
    }


    /**
     * @param $name_method
     * @throws Exception
     */
    public function set_custome_js($name_method)
    {
        preg_match("/modules\\\(.+)\\\Controllers\\\(.+).php/",$name_method,$match);
        $array[0] = $match[1];
        $array[1] = $match[2];
        $module_js_data['functions'] = "/public/assets/js/modules/".strtolower($array[0])."/".strtolower($array[1])."/".strtolower($array[1])."_functions.js";
        $module_js_data['events'] = "/public/assets/js/modules/".strtolower($array[0])."/".strtolower($array[1])."/".strtolower($array[1])."_events.js";

        foreach ($module_js_data as $module_js) {
            if(!file_exists(FCPATH.$module_js)){
                // Todo: Confirm là trả lỗi hay tự tạo file ?
                if(file_put_contents(FCPATH.$module_js,"")){
                    throw new Exception("File JS wasnt created: ".FCPATH.$module_js);
                }
            }
        }
        $this->share(["module_js"=>$module_js]);
    }
}