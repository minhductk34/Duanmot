
<?php

class BaseController
{
    const VIEW_FOLDER_NAME = 'views';
    const MODEL_FOLDER_NAME = 'Models';

    /**
     * Hiển thị một view và truyền dữ liệu cho view đó.
     *
     * @param string $viewPath Đường dẫn tới view cần hiển thị.
     * @param array $data Mảng chứa dữ liệu truyền cho view. Key của mảng sẽ được sử dụng như biến trong view.
     * @return void
     */
    protected function view($viewPath, array $data = [])
    {
        // Extract các phần tử trong mảng $data thành các biến độc lập trong phạm vi hàm.
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        // Xây dựng đường dẫn tới file view dựa trên $viewPath và tổ chức thư mục.
        $viewFile = self::VIEW_FOLDER_NAME . '/' . str_replace(".", "/", $viewPath) . '.php';

        // Require file view để hiển thị nội dung.
        require($viewFile);
    }

    /**
     * Tải một model vào controller.
     *
     * @param string $modelsPath Đường dẫn tới file model cần tải.
     * @param array $data Mảng chứa dữ liệu truyền cho model. Key của mảng sẽ được sử dụng như biến trong model.
     * @return void
     */
    protected function loadModel($modelsPath, array $data = [])
    {
        // Xây dựng đường dẫn tới file model dựa trên $modelsPath và tổ chức thư mục.
        $modelFile = self::MODEL_FOLDER_NAME . '/' . $modelsPath . '.php';

        // Require file model để tải model vào controller.
        require_once($modelFile);
    }
}

?>