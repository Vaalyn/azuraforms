<?php
namespace AzuraForms\Field;

class MultipleSelect extends MultipleOptions
{
    protected function _getField($form_name, $name, $value = '')
    {
        $field = sprintf('<select name="%1$s[]" id="%2$s_%1$s" multiple="multiple">', $name, $form_name);
        foreach ($this->options as $key => $val) {
            $attributes = $this->_getAttributeString($val);
            $field .= sprintf('<option value="%s" %s>%s</option>', $key, (is_array($value) && in_array((string) $key, $value) ? 'selected="selected"' : '') . $attributes['string'], $attributes['val']);
        }
        $field .= '</select>';

        return $field;
    }
}