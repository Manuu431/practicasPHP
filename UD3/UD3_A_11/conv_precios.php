<?php
    function pesetas_a_euros($pesetas){
        $euros = $pesetas / 166368;
        return $euros;
    }

    function euros_a_pesetas($euros){
        $pesetas = $euros * 166368;
        return $pesetas;
    }
?>