<?php
class Product extends ProductCore
{

    public $custom_dispo;
    public $custom_field_lang;
    public $custom_field_lang_wysiwyg;

    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, \Context $context = null)
    {
        //Définition des nouveaux champs
        self::$definition['fields']['custom_dispo'] = [
            'type' => self::TYPE_STRING,
            'required' => false, 'size' => 255
        ];
        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);
    }
}