<?php
require_once '../connMysql.php'; //�s����Ʈw
$sql = "SELECT * FROM `students` ORDER BY `cID`"; //�d�߸�Ʈw���e�y�k
if($result = mysqli_query($conn, $sql)){ //�P�_�O�_���s�����Ʈw
    //echo "ok";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ //�@�C�@�C���X���
        $json_arr[] = $row; //�@�C��Ʀs�J�@���}�C
    }
    //print_r($json_arr); //�ˬd���S�����X��ƥ�
    $json_result = json_encode($json_arr); //�N��ƽs�X��json�榡,�H�Q�ǰe(�Ҧp�ǰe�����)
    print $json_result; //�L�X��Ʈw�s�X�᪺json code
}else{
    print "��ƮwŪ�����~....!";
}
mysqli_close($conn); //������Ʈw
?>