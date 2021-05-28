<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControllador extends Controller
{
    public function produtos() {
        echo '
        <h1>Band</h1>
        <ul>
            <li>Bass</li>
            <li>Guitar</li>
            <li>Drumms</li>
            <li>Mic</li>
            <li>Keyboard</li>
        </ul>';
    }

    public function getNome() {
        return 'José da Silva';
    }

    public function getIdade() {
        return '35';
    }

    public function multiplicar($n1, $n2) {
        return $n1 * $n2;
    }
}
