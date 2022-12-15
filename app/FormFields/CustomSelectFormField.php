<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;
use App\Models\Catalog\Category;

class CustomSelectFormField extends AbstractHandler
{
    protected $codename = 'category_select';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        $category = [];
        
        foreach (Category::all() as $value) {
           $category[$value['id']] = $value['name'];
        }
        $options = $category;
        
        return view('formfields.custom_select', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}