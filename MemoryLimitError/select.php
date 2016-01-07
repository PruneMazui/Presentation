<?php
$db = new PDO('mysql:host=localhost;dbname=sample_database', 'root', '');

$fetchAll = function ($sql) use ($db) {
    $limit = 1000;
    $offset = 0;

    $db->beginTransaction();
    try {
        while (true) {
            $stmt = $db->query("{$sql} LIMIT {$limit} OFFSET {$offset}");

            $rowset = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(! $rowset) {
                break;
            }

            foreach($rowset as $row) {
                yield $row;
            }

            // 次回のクエリは1001件目からスタート
            $offset += $limit;
        }

        $db->commit();
    } catch (Exception $ex) {
        $db->rollBack();
        throw $ex;
    }
};


foreach($fetchAll("SELECT * FROM sample_table") as $row) {
    // ～～～ 何らかの処理 ～～～
}

