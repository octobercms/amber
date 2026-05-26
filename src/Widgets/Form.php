<?php namespace October\Amber\Widgets;

use Lang;
use Form as FormHelper;
use Backend\Classes\FormTabs;
use Backend\Classes\FormField;
use October\Amber\Classes\WidgetBase;
use October\Rain\Element\ElementHolder;
use October\Contracts\Element\FormElement;
use October\Rain\Database\Model;
use October\Rain\Html\Helper as HtmlHelper;
use SystemException;
use BackedEnum;
use UnitEnum;

/**
 * Form Widget is used for building back end forms and renders a form
 */
class Form extends WidgetBase implements FormElement
{
}
