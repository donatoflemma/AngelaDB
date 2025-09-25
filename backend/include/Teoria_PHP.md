una best practice sarebbe chiamare i fil econtenuti in include con 'Esempio.inc.php' per determinare che il file non ha codice da far partire da solo

Ho visto molto spesso fare `<h1><?php   echo 'Ciao'; ?>``</h1>`    quando io ho sempre fatto `<?php echo' <h1> Cioa <h1>'; ?>`
Non ho ancora capito la differenza ma funzionano uguale

Quando fa include non mette i tag Html nell´eco , capire anche questo !!!!

#################### ANNOTAZIONE INTERESSANTE ''''################################

Feci un´inlude dove avevo l´header , in questo file ho fatto una funzione per richiedere il parametro title che dovesse avere l´header.
Cosa molto piu interessante é stato vedere che si puo benissimo mettere una variabile php nel Tag title e poi direttamente nel file della pagina
dichiarare questa variabile con un valore diverso  e farlo acnhe per l´immagini !!!!!! Tenere a mente !!!!!!!!!!

Piccolo appunto : `<?php echo ' I'm a string'; ?>`  ora per come ragiona il linguaggio mi darebbe errore perche  " I'm " ha comunque un single Quot
per non avere problemi si puo usareil back slash  '\' che fa capire al linguaggio che il single Quot perde di valore sintattico ed é solo Str  .  QUINDI :  `<?php echo ' I\'m a string'; ?>`    -->  FORMATTAZIONE GIUSTA !!!

############################################################################## STRING ###########################################################################################################

![1758792256449](image/Teoria_PHP/1758792256449.png)![1758792256449](image/Teoria_PHP/1758792256449.png)

NOTARE come il dot ' . ' in php viene usato per concatenare piu stringhe , come il ' + ' in PYthon o altri linguaggi

con i Doble Quot questo problema non ci sta ed é best practise racchiudere  { $esenpio } le variabili o ogni cosa che metti attaccato alla variabile puottrebbe dare problema

\n  e `<br> anche se anno la stessa fiunzione , lo fanno in modo diverso . La prima viene interpretata come parte della formattazione nel codice e non nel browser che legge i tag , quindi capire quando usare una o l´altra`

\t simbolo per il tab che aggiunge spazio

la vera differenza tra single or double Quot sta nel fatto che se voglio solo stampare del testo uso il single perche sono sicuro che il computer non ha delle incomprensioni con parte del testo che sembra variabile o altri comandi . Per tutto il resto usa il double con le { } per le variabli

![1758794336513](image/Teoria_PHP/1758794336513.png)

##########################################################  NUMBERS  #############################################################

Cosa fa `round(3.33, 1)`

* **Funzione round** ( *Rundungsfunktion* ): serve ad  **arrotondare un numero** .
* **Primo argomento** : il numero → `3.33`.
* **Secondo argomento** : le cifre decimali → `1`

Si usa anche *=, /= , -= , += e cosi via

###################################################### VAR_DUMP #################################################################

`var_dump()` in PHP

* È una **funzione di debug** ( *Debug-Funktion* ).
* Mostra **tipo** ( *Typ* ) e **valore** ( *Wert* ) di una variabile.

| **echo** | Mostra solo il contenuto come stringa | `Array`(non mostra i valori) |
| -------------- | ------------------------------------- | ------------------------------ |

| **print_r()** | Mostra valore in modo leggibile (anche array/oggetti) | `Array ( [0] => 1 [1] => 2 [2] => 3 )` |
| ------------------- | ----------------------------------------------------- | ---------------------------------------- |

| **var_dump()** | Mostra tipo + lunghezza + valore (dettagliato) | `array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }` |
| -------------------- | ---------------------------------------------- | ------------------------------------------------------- |
