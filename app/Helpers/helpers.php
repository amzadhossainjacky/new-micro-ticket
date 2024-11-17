<?php

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

/**
 * _icons function returns necessary icons
 * @param string $icon_name The name of icon
 * @param bool $all To return all icons pass boolean value true, default is false
 * @return array <array|string>
 * @author Md. Amzad Hossain Jacky <amzadhossainjacky@gmail.com>
 */
if (!function_exists('_icons')) {
    function _icons(string $icon_name = 'user', bool $all = false)
    {
        $icon_list = [
            'about' => 'bi bi-person-badge',
            'activity_log' => 'bi bi-clock-history',
            'address' => 'bi bi-house-heart',
            'add' => 'bi bi-plus-lg',
            'age' => 'bi bi-calendar-heart',
            'api' => 'bi bi-database',
            'attachments' => 'bi bi-folder-symlink',
            'arrow_right' => 'bi bi-arrow-right',
            'arrow_right_1' => 'bi bi-arrow-right-short',
            'arrow_right_2' => 'bi bi-caret-right',
            'arrow_right_3' => 'bi bi-chevron-right',
            'arrow_left' => 'bi bi-arrow-left',
            'arrow_left1' => 'bi bi-arrow-left-short',
            'arrow_left_2' => 'bi bi-caret-left',
            'arrow_left_3' => 'bi bi-chevron-left',
            'arrow_up' => 'bi bi-arrow-up',
            'arrow_down' => 'bi bi-arrow-down',
            'arrow_right_square' => 'bi bi-arrow-right-square',
            'blog' => 'bi bi-newspaper',
            'bell' => 'bi bi-bell',
            'bin' => 'bi bi-trash2',
            'business' => 'bi bi-building',
            'buildings' => 'bi bi-buildings',
            'bucket' => 'bi bi-bucket-fill',
            'book' => 'bi bi-book',
            'hints' => 'bi bi-lightbulb',
            'box_arrow_up' => 'bi bi-box-arrow-up',
            'check' => 'bi bi-check',
            'circle' => 'bi bi-circle',
            'client' => 'bi bi-universal-access-circle',
            'client_projects' => 'bi bi-suit-spade',
            'clients' => 'bi bi-universal-access-circle',
            'close' => 'bi bi-x',
            'cog' => 'bi bi-gear',
            'customers' => 'bi bi-person-lines-fill',
            'contact' => 'bi bi-envelope-open',
            'conversations' => 'bi bi-person',
            'chat' => 'bi bi-chat-square-dots',
            'creator' => 'bi bi-person-workspace',
            'checkmark' => 'bi bi-check-all',
            'category' => 'bi bi-puzzle',
            'category_patient' => 'bi bi-recycle',
            'dashboard' => 'bi bi-speedometer2',
            'date' => 'bi bi-calendar3',
            'daily_task' => 'bi bi-pencil-square',
            'dark' => 'bi bi-lightbulb',
            'dial' => 'bi bi-telephone-outbound',
            'default' => 'bi bi-info-circle',
            'delete' => 'bi bi-trash3',
            'delete_all' => 'bi bi-trash2',
            'download' => 'bi bi-cloud-arrow-down',
            'distribution' => 'bi bi-people',
            'email' => 'bi bi-envelope-at',
            'exclamation_triangle' => 'bi bi-exclamation-triangle',
            'exclamation_shield' => 'bi bi-shield-exclamation',
            'right_double' => 'bi bi-chevron-double-right',
            'edit' => 'bi bi-pen',
            'example' => 'bi bi-example',
            'facebook' => 'bi bi-facebook',
            'flag' => 'bi bi-flag',
            'file' => 'bi bi-file-earmark-arrow-up',
            'files' => 'bi bi-files',
            'fullscreen' => 'bi bi-fullscreen',
            'follow_up' => 'bi bi-arrow-left-right',
            'fullscreen2' => 'bi bi-arrows-fullscreen',
            'bars' => 'bi bi-grid',
            'globe' => 'bi bi-globe2',
            'group' => 'bi bi-people-fill',
            'heart' => 'bi bi-heart',
            'hangup' => 'bi bi-telephone-x',
            'home' => 'bi bi-house-door',
            'history' => 'bi bi-clock-history',
            'image' => 'bi bi-card-image',
            'images' => 'bi bi-images',
            'id' => 'bi bi-person-vcard',
            'industry_type' => 'bi bi-bank',
            'lead' => 'bi bi-person-gear',
            'left_double' => 'bi bi-chevron-double-left',
            'light' => 'bi bi-lightbulb',
            'linkedin' => 'bi bi-linkedin',
            'link' => 'bi bi-link',
            'link45' => 'bi bi-link-45deg',
            'logout' => 'bi bi-box-arrow-right',
            'lock' => 'bi bi-lock',
            'list' => 'bi bi-list',
            'list2' => 'bi bi-list-nested',
            'location' => 'bi bi-house-gear',
            'messages' => 'bi bi-chat-dots',
            'minus' => 'bi bi-dash',
            'moon' => 'bi bi-moon',
            'mobile' => 'bi bi-phone-flip',
            'mapping' => 'bi bi-diagram-2',
            'note' => 'bi bi-pen',
            'name_first' => 'bi bi-person-add',
            'name_middle' => 'bi bi-person-check',
            'name_last' => 'bi bi-person-dash',
            'order_by' => 'bi bi-sort-alpha-down',
            'order_by_type' => 'bi bi-sort-down',
            'option' => 'bi bi-0-circle',
            'pdf' => 'bi bi-file-pdf',
            'per_page' => 'bi bi-sort-numeric-down',
            'portfolio' => 'bi bi-briefcase',
            'products' => 'bi bi-boxes',
            'projects' => 'bi bi-minecart-loaded',
            'project' => 'bi bi-balloon',
            'plus' => 'bi bi-plus',
            'password' => 'bi bi-lock',
            'password_file' => 'bi bi-file-lock',
            'password_unlock' => 'bi bi-unlock',
            'permission' => 'bi bi-key',
            'question' => 'bi bi-question-circle',
            'reboot' => 'bi bi-bootstrap-reboot',
            'resume' => 'bi bi-file-diff',
            'reset' => 'bi bi-arrow-repeat',
            'remove' => 'bi bi-x-lg',
            'reports' => 'bi bi-graph-up-arrow',
            'role' => 'bi bi-person-rolodex',
            'remarks' => 'bi bi-mic',
            'save' => 'bi bi-save2',
            'save2' => 'bi bi-check2-circle',
            'save3' => 'bi bi-check-lg',
            'save4' => 'bi bi-check2',
            'sales' => 'bi bi-cart3',
            'search' => 'bi bi-search',
            'sections' => 'bi bi-puzzle',
            'services' => 'bi bi-tools',
            'service' => 'bi bi-hammer',
            'server' => 'bi bi-database',
            'setting' => 'bi bi-wrench-adjustable',
            'settings' => 'bi bi-wrench-adjustable-circle',
            'settings_gear' => 'bi bi-gear',
            'slash_shield' => 'bi bi-shield-slash',
            'support' => 'bi bi-megaphone',
            'skill' => 'bi bi-mortarboard',
            'status' => 'bi bi-gem',
            'star' => 'bi bi-star',
            'source' => 'bi bi-binoculars',
            'script' => 'bi bi-code',
            'sms' => 'bi bi-chat-text',
            'sms_group' => 'bi bi-chat-square-dots',
            'twitter' => 'bi bi-twitter',
            'tags' => 'bi bi-tags',
            'tag' => 'bi bi-tag',
            'template' => 'bi bi-code-slash',
            'testimonials' => 'bi bi-vector-pen',
            'task' => 'bi bi-list-check',
            'tasks' => 'bi bi-list-check',
            'trash' => 'bi bi-trash3',
            'telephone' => 'bi bi-telephone',
            'tools' => 'bi bi-tools',
            'time' => 'bi bi-clock',
            'task_types' => 'bi bi-signpost-split',
            'upload' => 'bi bi-cloud-upload',
            'user' => 'bi bi-person',
            'users' => 'bi bi-people',
            'view' => 'bi bi-eye',
            'website' => 'bi bi-globe-asia-australia',
            'welcome' => 'bi bi-megaphone',
            'youtube' => 'bi bi-youtube',
            'role' => 'bi bi-person-rolodex',
            'permission' => 'bi bi-key',
            'bucket' => 'bi bi-bucket-fill',
            'box_arrow_up' => 'bi bi-box-arrow-up',
            'check' => 'bi bi-check',
            'follow_up' => 'bi bi-arrow-left-right',
            'group' => 'bi bi-people-fill',
            'arrow_up' => 'bi bi-arrow-up',
            'arrow_caret_down' => 'bi bi-caret-down-fill',
            'dash_square' => 'bi bi-dash-square',
            'url' => 'bi bi-browser-edge',
            'person_fill_up' => 'bi bi-person-fill-up',
            'tutorial' => 'bi bi-marker-tip',
            'assign_user' => "bi bi-person-fill-add",
            'reassign' => "bi bi-arrow-repeat",
            'question' => "bi bi-question-square",
            'idea' => "bi bi-lightbulb",
            'operation' => "bi bi-record-circle",
            'product' => "bi bi-box-seam",
            'department' => "bi bi-shop-window",
            'expense' => "bi bi-cash-coin",
        ];
        if ($all) {
            return $icon_list;
        } elseif (array_key_exists($icon_name, $icon_list)) {
            return $icon_list["$icon_name"];
        } else {
            return $icon_list["default"];
        }
    }
}

/**
 * _get_genders method return list of task steppers
 * @param int $index index of genders, default is -1
 * @return mixed <string|array>
 * @author Md. Amzad Hossain Jacky <amzadhossainjacky@gmail.com>
 */
if (!function_exists('_get_genders')) {
    function _get_genders(int $index = -1)
    {
        $genders = [
            '1' => 'male',
            '2' => 'female',
            '3' => 'others',
        ];
        if (array_key_exists($index, $genders)) {
            return $genders[$index];
        }
        return $genders;
    }
}

/**
 * _str_conversion function convert string as required
 * @param string $string null
 * @param string $type ucfirst
 * @param bool $remove_dash false
 * @param bool $is_file false
 * @return string
 * @author Md. Amzad Hossain Jacky <amzadhossainjacky@gmail.com>
 */
if (!function_exists('_str_conversion')) {
    function _str_conversion(string $string = null, string $type = 'ucfirst', bool $remove_dash = false, bool $is_file = false, $is_url = false)
    {
        $string = $string;
        $string = str_replace(' ', '', $string);

        ## Remove (-, _) from text, and replaced by single space
        if ($remove_dash) {
            $string = str_replace('_', ' ', $string);
            $string = str_replace('-', ' ', $string);
        }

        ## Concat text by underscore(_), snake case
        if ($is_file) {
            $string = str_ireplace(" ", "_", $string);
            $string = str_replace('-', '_', $string);
        }
        ## Concat text by hyphen(-)
        if ($is_url) {
            $string = str_ireplace(" ", "-", $string);
            $string = str_replace('_', '-', $string);
        }

        $string = str_replace(' ', '', $string);
        return $string;
    }
}


/**
 * _get_date_from_datetime method return date from datetime
 * @return mixed <string|array>
 * @author Md. Amzad Hossain Jacky <amzadhossainajacky@gmail.com>
 */
if (!function_exists('_get_date_from_datetime')) {
    function _get_date_from_datetime(string $dateTime = null)
    {
        if (is_null($dateTime)) {
            return ''; 
        }

        try {
            $dateTimeObject = Carbon::parse($dateTime);
            return $dateTimeObject->format('Y-m-d h:i:s A');  
        } catch (Throwable $e) {
            return $dateTime; 
        }
    }
}


/**
 * generateSlug method return name of slug formate
 * @return mixed <string|array>
 * @author Md. Amzad Hossain Jacky <amzadhossainjacky@gmail.com>
 */
if (!function_exists('generateSlug')) {
    function generateSlug(string $name)
    {
        // Remove leading and trailing spaces
        $name = trim($name);

        // Convert the name to lowercase
        $slug = strtolower($name);

        // Replace spaces with dashes
        $slug = str_replace(' ', '-', $slug);

        // Remove special characters
        $slug = preg_replace('/[^A-Za-z0-9\-]/', '', $slug);

        return $slug;
    }
}

/**
 * generateSlug method return name of slug formate
 * @return mixed <string|array>
 * @author Md. Amzad Hossain Jacky <amzadhossainjacky@gmail.com>
 */
if (!function_exists('generateInvoiceNumber')) {
    function generateInvoiceNumber() {
        // Get the current date and time
        $dateTime = new DateTime();
        
        // Format the date and time as YYYYMMDDHHMMSSmmm (where mmm is milliseconds)
        $formattedDateTime = $dateTime->format('YmdHis') . str_pad($dateTime->format('u'), 3, '0', STR_PAD_LEFT);
        
        // Optionally, add a prefix
        $invoiceNumber = 'INV-' . $formattedDateTime;
        
        return $invoiceNumber;
    }
    
}

/**
 * _get_current_date method return date from datetime
 * @return mixed <string|array>
 * @author Md. Amzad Hossain Jacky <amzadhossainajacky@gmail.com>
 */
if (!function_exists('_get_current_date')) {
    function _get_current_date(string $dateTime = null)
    {
        try {
            $dateTime = new DateTime();
            $dateTimeObject = Carbon::parse($dateTime);
            return $dateTimeObject->format('M, Y');   
        } catch (Throwable $e) {
            return $dateTime; 
        }
    }
}



