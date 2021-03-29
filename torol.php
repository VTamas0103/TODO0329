<?php

function torol($tablaNeve, $szuro) {
    $this->kapcsolat();
    $sql = "DELETE FROM " . $tablaNeve . " WHERE " . $szuro;
    $sql = $this->kapcs->query($sql);
    if ($sql == true) {
        return true;
    } else {
        return false;
    }
}
