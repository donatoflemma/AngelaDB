/*Inserire dati nel DB.

INSERT
$stmt = $conn->prepare("INSERT INTO utenti (nome, email) VALUES (?, ?)");
$stmt->bind_param("ss", $nome, $email); ss == str,str
$stmt->execute(); esegue la query*/