<?php
include_once 'book.php';

class model {

    public function getData () {
        return array (
            new book ('Pembunuhan di Orient Express', 'Agatha Christie', 'Collins Crime Club', '1934'),
            new book ('Pembunuhan di Sungai Nil', 'Agatha Christie', 'Collins Crime Club', '1937'),
            new book ('Pembunuhan ABC ', 'Agatha Christie', 'Collins Crime Club', '1936'),
            new book ('Misteri di Styles', 'Agatha Christie', 'Collins Crime Club', '1920'),
        );
    }
}
?>