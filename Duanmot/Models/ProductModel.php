<?php

class ProductModel extends BaseModel
{
    const TABLE = 'product';

    public function getAll($select = ['*'],$orderBy =[], $limit =10)
    {
        return $this->all(self::TABLE,$select,$orderBy,$limit);
    }
    public function find_by_id($id)
    {
        return $this->find(self::TABLE,$id);
    }

    public function _create($data)
    {
        $this->create(self::TABLE, $data);
    }
    public function _update($id,$data)
    {
        $this->update(self::TABLE, $id, $data);
    }
    public function _delete($id)
    {
       $this->delete(self::TABLE,$id);
    }
}
