/*Select funktion

SELECT
$sql = "SELECT id, nome, email FROM utenti";
$result = $conn->query($sql); esegue la query

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) { legge ogni riga come array associativo ($row['nome'])
echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . " - Email: " . $row["email"] . "<br>";
}
} else {
echo "0 risultati";
}*/