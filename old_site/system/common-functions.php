<?php

function printR($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function logData($message, $fileName = '') {

    if (!file_exists('logs')) {
        mkdir('logs', 0777, true);
    }
    $date = gmdate('Y-m-d');
    file_put_contents('logs/' . ($fileName ? $fileName : 'log') . '-' . $date . '.txt', $message . "\r\n", FILE_APPEND);
}

function financialNumber($number){
    return number_format((float)$number, 2, '.', '');
}

function getCurrentDateTime(){
    return date('Y-m-d H:i:s');
}

function formatDateTime($dateTime, $format = 'Y-m-d'){
    return date($format, strtotime($dateTime));
}

function productImageUrl($imageName){
    return $imageName;
}

function getProductUrl($productId){
    return '';
}

function renderCheckBox($name, $value, $label, $checked = FALSE, $class = '',$attr){
    
    $checkedAttr = $checked ? 'checked="checked"' : '';
    return "<label><input type='checkbox' name='$name' value='$value' $attr class='$class' $checkedAttr /> $label</label>";
}