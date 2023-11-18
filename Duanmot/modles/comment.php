<?php
class Comment
{
    public $id_comment;
    public $id_userser;
    public $id_product;
    public $content;
    public $create_at;
    public $rate;

    public function __construct($id_comment, $id_userser, $id_product, $content, $create_at, $rate)
    {
        $this->id_comment = $id_comment;
        $this->id_userser = $id_userser;
        $this->id_product = $id_product;
        $this->content = $content;
        $this->create_at = $create_at;
        $this->rate = $rate;
    }
}

class CommentShow
{
    public $name_user;
    public $content;
    public $create_at;

    public function __construct($name_user, $content, $create_at)
    {
        $this->name_user = $name_user;
        $this->content = $content;
        $this->create_at = $create_at;
    }
}