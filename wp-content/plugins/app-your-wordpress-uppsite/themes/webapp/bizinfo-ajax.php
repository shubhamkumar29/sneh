<?php
function uppsite_fix_biz_images(&$images) {
    if (!is_array($images)) {
        return;
    }
    for ($i = 0; $i < count($images); $i++) {
        $image = $images[$i];
        if (strpos($image, '"') === 0) {
            $images[$i] = substr($image, 1, -1);
        }
    }
}
$businessData = get_option(MYSITEAPP_OPTIONS_BUSINESS);
$data = array();
if (is_array($businessData)) {
    foreach ($businessData as $key=>$val) {
        $order = 100;
        $label = null;
        switch ($key) {
            case "title":
                $label = "title";
                $order = -3;
                break;
            case "description":
                $label = "tagline";
                $order = -3;
                break;
            case "contact_phone":
                $label = "phone";
                $order = 1;
                break;
            case "contact_address":
                $label = "address";
                $order = 2;
                break;
            case "email":
                $label = "email";
                $order = 3;
                break;
            case "featured":
                $label = "featured";
                $order = -1;
                uppsite_fix_biz_images($val);
                break;
            case "selected_images":
                $label = "photos";
                $order = -2;
                uppsite_fix_biz_images($val);
                break;
            case "facebook":
                $order = 50;
                $label = $key;
                break;
            case "twitter":
                $order = 50;
                $label = $key;
                $val = (strlen($val) > 0 && substr($val, 0, 1) != "@" ? "@" : "" ). $val;
                break;
            case "navbar_display":
                $order = -100;
                $label = $key;
                break;
            case "navbar_bg":
                $order = -100;
                $label = $key;
                break;
        }
        if (is_null($label) || (!is_array($val) && strlen($val) == 0)) {
            continue;
        }
        $data[] = array(
            "label" => $label,
            "data" => is_string($val) ? nl2br($val) : $val,
            "position" => $order
        );
    }
}
print json_encode($data);
