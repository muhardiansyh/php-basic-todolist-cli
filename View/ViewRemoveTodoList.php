<?php 

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
function viewRemoveTodoList(){
    echo "Menghapus TODO" . PHP_EOL;

    $pilihan = input("Nomer (x) untuk batal");
    if($pilihan == "x"){
        echo "Batal menghapus todo";
    } else {
        $success = removeTodoList($pilihan);

        if($success){
            echo "Berhasil menghapus todo nomor: $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor: $pilihan" . PHP_EOL;
        }
    }
}

?>