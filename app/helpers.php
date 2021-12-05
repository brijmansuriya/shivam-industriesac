<?php

function prx($data)
{
    echo "<pre>";
    print_r($data);
    exit;
}

function pr($data)
{
    echo "<pre>";
    print_r($data);
}

function prm($data)
{
    $cat = json_decode(json_encode($data), true);
    echo "<pre>";
    print_r($cat);
}

function textareabox($colname,$label,$fieldname,$placeholder,$value,$script=''){
    $isrequired=strpos($script,"required");
    if(is_numeric($isrequired))
    {
        $label.=" <b class='text-danger'>*</b>";
    }
    echo '<div class="col-lg-'.$colname.'">
            <fieldset class="form-group">
                <label class="form-label semibold">'.$label.'</label>
            <textarea name="'.$fieldname.'"  id="'.$fieldname.'" placeholder="'.$placeholder.'" class="form-control" style="height:100px;" '.$script.' >'.$value.'</textarea>
            </fieldset>
            </div>';
}
function uplodes($colname, $label, $fieldname, $script = '')
{
    $isrequired = strpos($script, "required");
    if (is_numeric($isrequired)) {
        $label .= " <b class='text-danger'>*</b>";
    }
    echo ' <div class="col-md-' . $colname . '">
                <fieldset class="form-group">
                <label class="form-label semibold">' . $label . '</label>
                <input  type="file" class="form-control" accept="image/*" name="' . $fieldname . '">
                </fieldset>
            </div>';
}

function editbox($colname, $label, $fieldname, $placeholder, $value, $script = "")
{
    $isrequired = strpos($script, "required");
    if (is_numeric($isrequired)) {
        $label .= " <b class='text-danger'>*</b>";
    }
    echo '<div class="col-md-' . $colname . '">
              <fieldset class="form-group">
              <label class="form-label semibold">' . $label . '</label>
              <input type="text" ' . $script . ' name="' . $fieldname . '" value="' . $value . '" id="' . $fieldname . '" placeholder ="' . $placeholder . '" class="form-control">
              </fieldset>
            </div>';
}

