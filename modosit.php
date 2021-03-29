<?php

function frissit($tablaNeve, $ujErtekek, $where) {
    $this->kapcsolat();
    $sql = "UPDATE " . $tablaNeve . " SET " . $ujErtekek . " WHERE " . $where;

    echo $sql;
    $sql = $this->kapcs->query($sql);
    if ($sql == true) {
        return true;
    } else {
        return false;
    }
}
