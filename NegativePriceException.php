<?php

class NegativePriceException extends Exception {
    public function errorMessage() {
        return 'Prezzo non può essere negativo';
    }
}

?>
