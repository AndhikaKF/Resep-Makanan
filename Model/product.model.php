<?php
class ResepModel extends Connection
{
    protected $table = "resep";

    
    public function getAllNama()
    {
        $sql = "SELECT nama FROM {$this->table} ORDER BY created_at DESC";
        $result = $this->connect()->query($sql);

        $reseps = [];
        if ($result && $result->num_rows > 0) {
            while ($data = $result->fetch_assoc()) {
                $reseps[] = $data['nama'];
            }
        }
        return $reseps;
    }
}
