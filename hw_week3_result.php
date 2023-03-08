<meta charset="utf8">

<?php
if (isset($_GET["name"])) {
    $name = $_GET["name"];
    $student_id = $_GET["student_id"];
    $dietary_habits = $_GET["dietary_habits"];

    echo "姓名:" . $name . "<br>";
    echo "學號:" . $student_id . "<br>";

    if ($dietary_habits == "素食者") {
        echo "素食者<br>";
    } else {
        echo "雜食者<br>";
    }
} 
else {
    echo "資料輸入錯誤";
}
?>