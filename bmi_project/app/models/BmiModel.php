<?php
class BmiModel {
    private $db;
    public function __construct($database) {
        $this->db = $database;
    }

    public function saveBmiRecord($name, $weight, $height, $bmi, $status) {
        $stmt = $this->db->prepare("INSERT INTO bmi_records (name, weight, height, bmi, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $weight, $height, $bmi, $status]);
    }

    public function getBmiHistory() {
        $stmt = $this->db->query("SELECT * FROM bmi_records ORDER BY timestamp DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>