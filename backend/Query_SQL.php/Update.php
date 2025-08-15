/*Update

UPDATE nome_tabella
SET colonna1 = nuovo_valore1,
colonna2 = nuovo_valore2
WHERE condizione;



$stmt = $conn->prepare("UPDATE utenti SET email = ? WHERE id = ?");
$stmt->bind_param("si", $nuovaEmail, $id); si == str,int
$stmt->execute();
*/