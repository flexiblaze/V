<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Stap 2: Controle op .nl extensie
    $domain = $_POST['domain'];
    if (!str_ends_with($domain, '.nl')) {
        echo "Fout: Domeinnaam moet eindigen op .nl";
        exit;
    }

    // Stap 3: Controle op alleen letters, cijfers of liggend streepje
    $domainCharacters = str_split($domain);
    foreach ($domainCharacters as $char) {
        if (!ctype_alnum($char) && $char !== '-') {
            echo "Fout: Domeinnaam mag alleen letters, cijfers of een liggend streepje bevatten";
            exit;
        }
    }

    // Stap 4: Controle op lengte
    $length = strlen($domain);
    if ($length < 2 || $length > 63) {
        echo "Fout: Domeinnaam moet tussen 2 en 63 tekens lang zijn";
        exit;
    }

    // Stap 5: Controle op openbare orde of goede zeden
    $filteredDomain = str_replace(['kwaad', 'slecht'], '*', $domain);
    if ($filteredDomain !== $domain) {
        echo "Fout: Domeinnaam mag niet in strijd zijn met openbare orde of goede zeden";
        exit;
    }

    // Stap 6 (optioneel): Controle op beschikbaarheid
    $whoisResult = file_get_contents('https://www.sidn.nl/whois?q=' . $domain);
    if (strpos($whoisResult, 'is free') === false) {
        echo "Fout: Domeinnaam is al in gebruik";
        exit;
    }

    echo "Domeinnaam is geldig en beschikbaar!";
} else {
    header("Location: index.html");
}
?>
