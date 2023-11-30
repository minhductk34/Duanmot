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

    public function getIdComment()
    {
        return $this->id_comment;
    }

    public function getIdUser()
    {
        return $this->id_userser;
    }

    public function getIdProduct()
    {
        return $this->id_product;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getCreatedAt()
    {
        return $this->create_at;
    }

    public function getRate()
    {
        return $this->rate;
    }
}

class CommentShow
{
    public $name_user;
    public $content;
    public $create_at;
    public $image;

    public function __construct($name_user, $content, $create_at,$image)
    {
        $this->name_user = $name_user;
        $this->content = $content;
        $this->create_at = $create_at;
        $this->image = $image;
    }

    public function getNameUser()
    {
        return $this->name_user;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getCreatedAt()
    {
        return $this->create_at;
    }
    public function getImage()
    {
        return $this->image;
    }
}