<?php
class BaseModel extends Database
{
    protected $connect;
    //Hàm khởi tạo chạy đầu tiên
    public function __construct()
    {
        $this->connect = $this->connect();
    }
    //Hàm lấy bảng theo $table, seclect theo đối tượng, orderby theo đối tượng, litmit theo số lượng (Fix bên ProductController)
    /**
     * Truy vấn tất cả các bản ghi từ bảng được chỉ định với các điều kiện và giới hạn cho truy vấn.
     *
     * @param string $table Tên của bảng cần truy vấn.
     * @param array $select Một mảng chứa các cột cần lấy dữ liệu. Mặc định là ["*"] nghĩa là lấy tất cả các cột.
     * @param array $orderBy Một mảng chứa thông tin về cách sắp xếp kết quả. Mặc định là mảng rỗng.
     * @param int $limit Số lượng bản ghi tối đa cần lấy. Mặc định là 10.
     * @return array Một mảng chứa các bản ghi từ kết quả truy vấn.
     */
    public function all($table, $select = ["*"], $orderBy = [], $limit = 10)
    {
        // Chuyển mảng select thành chuỗi các cột.
        $columns = implode(",", $select);

        // Chuyển mảng orderBy thành chuỗi sắp xếp.
        $orderByStr = implode(" ", $orderBy);

        // Nếu có điều kiện sắp xếp, sử dụng điều kiện đó trong câu truy vấn.
        if ($orderByStr) {
            $sql = "SELECT $columns FROM {$table} ORDER BY {$orderByStr} LIMIT {$limit}";
        } else {
            // Nếu không có điều kiện sắp xếp, bỏ qua phần ORDER BY trong câu truy vấn.
            $sql = "SELECT $columns FROM {$table} LIMIT {$limit}";
        }

        // Thực hiện truy vấn SQL.
        $query = $this->_query($sql);

        // Khởi tạo một mảng để lưu trữ dữ liệu từ kết quả truy vấn.
        $data = [];

        // Lặp qua từng bản ghi và thêm vào mảng dữ liệu.
        while ($row = $query->fetch_assoc()) {
            array_push($data, $row);
        }

        // Trả về mảng dữ liệu.
        return $data;
    }
    // Tìm sản phẩm theo giá trị truyền vào $table: Bảng, $id: Id truyền vào
    public function find($table, $id)
    {
        $sql = "SELECT * FROM {$table} where id_category= $id limit 1";
        $query = $this->_query($sql);
        return $query->fetch_assoc();
    }

    // Thêm sản phẩm theo giá trị truyền vào $table: Bảng, $data dữ liệu truyền vào
    /**
     * Tạo một bản ghi mới trong bảng được chỉ định với dữ liệu cung cấp.
     *
     * @param string $table Tên của bảng cần tạo bản ghi.
     * @param array $data Một mảng kết hợp chứa các cặp khóa-giá trị của bản ghi mới.
     * @return void
     */
    public function create($table, $data = [])
    {
        // Tạo chuỗi chứa tên các cột trong bảng.
        $column = implode(', ', array_keys($data));

        // Hiển thị tên bảng và dữ liệu (cho mục đích gỡ lỗi và kiểm tra).
        echo $table;
        echo '<pre>';
        print_r($data);

        // Xây dựng một mảng mới chứa các giá trị được bao quanh bởi dấu nháy đơn.
        $newValues = array_map(function ($value) {
            return "'" . $value . "'";
        }, array_values($data));

        // Chuyển mảng giá trị mới thành một chuỗi phần tử được phân cách bằng dấu phẩy.
        $newValues = implode(', ', $newValues);

        // Xây dựng câu lệnh SQL để tạo bản ghi mới.
        $sql = "INSERT INTO {$table}($column) VALUES ({$newValues})";

        // Thực thi câu lệnh SQL.
        $this->_query($sql);
    }
    /**
     * Cập nhật một bản ghi trong bảng được chỉ định với dữ liệu mới.
     *
     * @param string $table Tên của bảng cần cập nhật.
     * @param int $id ID của bản ghi cần cập nhật.
     * @param array $data Một mảng kết hợp chứa tên cột là khóa và giá trị mới tương ứng.
     * @return void
     */
    public function update($table, $id, $data)
    {
        // Tạo một mảng rỗng để lưu trữ các cặp cột-giá trị.
        $dataSet = [];

        // Lặp qua mảng dữ liệu và định dạng từng cặp khóa-giá trị thành chuỗi.
        foreach ($data as $key => $value) {
            array_push($dataSet, "" . $key . " = '" . $value . "'");
        }

        // Tạo một chuỗi các cặp cột-giá trị được phân cách bằng dấu phẩy.
        $dataSetString = implode(", ", array_values($dataSet));

        // Xây dựng câu lệnh SQL để cập nhật dữ liệu.
        $sql = "UPDATE {$table} SET {$dataSetString} WHERE id = {$id}";

        // Xuất câu lệnh SQL (cho mục đích gỡ lỗi và kiểm tra).
        echo $sql;

        // Thực thi câu lệnh SQL.
        $this->_query($sql);
    }
    /**
     * Xóa một bản ghi từ bảng được chỉ định dựa trên ID.
     *
     * @param string $table Tên của bảng cần xóa bản ghi.
     * @param int $id ID của bản ghi cần xóa.
     * @return void
     */
    public function delete($table, $id)
    {
        // Xây dựng câu lệnh SQL để xóa bản ghi dựa trên ID.
        $sql = "DELETE FROM {$table} WHERE id = {$id}";

        // Thực hiện câu lệnh SQL.
        $this->_query($sql);
    }
    /**
     * Thực hiện một câu truy vấn SQL bằng cách sử dụng kết nối cơ sở dữ liệu hiện tại.
     *
     * @param string $sql Câu truy vấn SQL cần thực hiện.
     * @return mixed Kết quả của câu truy vấn.
     */
    private function _query($sql)
    {
        // Sử dụng hàm mysqli_query để thực hiện câu truy vấn SQL.
        // $this->connect là kết nối cơ sở dữ liệu hiện tại.
        $result = mysqli_query($this->connect, $sql);

        // Trả về kết quả của câu truy vấn.
        return $result;
    }
}
