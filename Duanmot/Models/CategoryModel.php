<?php 
 class CategoryModel extends BaseModel
 {
    const TABLE = 'category';

    public function getAll($select = ['*'],$orderBy =[], $limit =10)
    {
        return $this->all(self::TABLE,$select,$orderBy,$limit);
    }
    public function get_by_id($id)
    {
        return $this->find(self::TABLE,$id);
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

?>