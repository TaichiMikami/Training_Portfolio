<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

Class ContactForm extends Form
{

    // スキーマの定義
    public function _buildSchema(Schema $schema = null): Schema
    {
        $schema
            ->addField("name",["type" => "string"])
            ->addField("email",["type" => "string"])
            ->addField("body",["type" => "text"]);

        return $schema;
    }

    // バリデーションの定義

    // バリデーション後の処理
    public function _execute(array $data, array $options = []): bool
    {
        return true;
    }

}

?>
