<?php include_once("conexao.php");
if (!isset($_SESSION)) {
	session_start();
}
$id_categoria = $_SESSION['id'];
echo $id_categoria;

echo $id_categoria;

$result_sub_cat = "SELECT * FROM item WHERE id_categoria = $id_categoria ORDER BY id";
$resultado_sub_cat = mysqli_query($conexao, $result_sub_cat);

while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat)) {
	$sub_categorias_post[] = array(
		'id'	=> $row_sub_cat['id'],
		'tamanho_item' => utf8_encode($row_sub_cat['tamanho']),
	);
}

echo (json_encode($sub_categorias_post));
