<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Array or Json Debugging code
|--------------------------------------------------------------------------
*/

if (!function_exists('debug'))
{
    function debug($value,$die = 0)
    {
        echo '<pre>';
        if(is_array($value))
            print_r($value);
        elseif(is_object($value))
            print_r($value);
        else
            echo $value;
        echo '</pre>';
        if($die!=0)
            die();
    }
}

if (!function_exists('split_name'))
{
    function split_name($name) {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
        return array($first_name, $last_name);
    }
}


// UI HELPER
if (!function_exists('button'))
{
    function button($args = []) {
        
        // Default values
        $defaults = [
            "text"      => "Click",
            "id"        => "",
            "class"     => "",
            "type"      => "button",
            "style"     => "",
            "onclick"   => "",
            "size"      => "sm",
            "varient"   => "primary",
        ];
    
        // Merge user arguments with defaults
        $args = array_merge($defaults, $args);
        
        $sizes = [
            "sm" => "px-10 py-0.5 text-sm",
            "md" => "px-10 py-0.5 text-sm",
            "lg" => "px-10 py-0.5 text-md",
            "xl" => "px-10 py-0.5 text-md",
        ];

        $varients = [
            "primary"   => "bg-ao-blue hover:bg-rg-orange text-white",
            "danger"    => "bg-red hover:bg-red-700 text-white",
            "dark"      => "bg-grey-600 hover:bg-grey-700 text-white",
        ];
    
        // Create button HTML
        return 
        '<button ' 
            .(!empty($args['id']) ? 'id="' . htmlspecialchars($args['id']) . '" ' : '') .
            'class="' 
                . htmlspecialchars($args['class']) . ' ' 
                . htmlspecialchars($sizes[$defaults['size']]) . ' '  
                . htmlspecialchars($varients[$defaults['varient']]) . ' transition duration-150 " ' .
            'type="' . htmlspecialchars($args['type']) . '" ' 
            . (!empty($args['style']) ? 'style="' . htmlspecialchars($args['style']) . '" ' : '') 
            . (!empty($args['onclick']) ? 'onclick="' . htmlspecialchars($args['onclick']) . '" ' : '') .
        '>' 
            . htmlspecialchars($args['text']) . 
        '</button>';
    }
}


if (!function_exists('section_title'))
{
    function section_title($title = "Hello") {
        
        return '<h2 class="border-b border-dotted border-gray-500 text-lg font-semibold leading-none pb-3 mb-5">'.$title.'</h2>';
    }
}