<<?php
class BmiController {
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }

    public function calculateBmi($name, $weight, $height) {
        $bmi = $weight / (($height / 100) * ($height / 100));
        $status = $this->getBmiStatus($bmi);

        $this->model->saveBmiRecord($name, $weight, $height, $bmi, $status);
        $bmiData = [
            'name' => $name,
            'weight' => $weight,
            'height' => $height,
            'bmi' => $bmi,
            'status' => $status
        ];
        include '../app/views/bmi_result.php';
    }

    private function getBmiStatus($bmi) {
        if ($bmi < 18.5) return "Underweight";
        elseif ($bmi < 25) return "Normal weight";
        elseif ($bmi < 30) return "Overweight";
        else return "Obese";
    }
}
?>