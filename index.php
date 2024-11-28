<?php
// Rivedere la lezione


// Ripetere l’esercizio del controllo password visto a lezione (da soli o rivedendo il video)


// 		Verificare se la password inserita dall'utente è valida secondo i seguenti criteri:

// 1. deve essere lunga almeno 8 caratteri
// 2. deve contenere almeno un numero
// 3. deve contenere almeno una lettera in UPPERCASE
// 4. deve contenere almeno un carattere speciale


// EXTRA
// Visualizzare in console quale regola non è stata rispettata
// Implementare un metodo che faccia reinserire la password qualora anche una delle regole non fosse rispettata e che, invece, lo interrompa in caso di password accettata.


// Pushare su Github con nome php_02_nome_cognome e inserire il link nell'apposito canale su Discord


// Compilare il feedback settimanale

function checkpassword($password) {
    //^ Check se 
    if (empty($password)) {
        return "Non hai digitato niente, riprovare.";
    }
    // //^Check di  minimo 4 Caratteri
    if (strlen($password) < 4) {
        return "La Password deve essere lunga almeno 4 caratteri";
    }
    // //^Check di massimo 8 Caratteri
    if (strlen($password) > 8) {
        return "La Password deve essere lunga massimo 8 caratteri";
    }

    // //^Check di almeno un Numero
    if (!preg_match('/\d/', $password)) {
        return "La Password deve contenere almeno un numero.";
    }

    // //^Check di almeno una lettera in UPPERCASE
    if (!preg_match('/[A-Z]/', $password)) {
        return "La Password deve contenere una lettera maiuscola.";
    }

    // //^Check di almeno un Carattere Speciale
    if (!preg_match('/[\W]/', $password)) {
        return "La Password deve contenere almeno un carattere speciale.";
    }

// Fine calcoli, risultato:
return "Password valida.";

}


$password = readline('Inserire Password: ');

$result = checkpassword($password);
echo $result;

?>