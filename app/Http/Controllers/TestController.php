<?php

namespace App\Http\Controllers;

use Explicador\E2PaymentsPhpSdk\Mpesa;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testPackage(Request $request) {

        $mpesa = new Mpesa([
            'client_secret' => 'vaoB8MLT7PmtpqpqTiOPKHIOJDeqMLRZJPnSSVdU',
            'client_id'     => '962a48fc-7398-45d6-911d-ee298eb70c49',
            'wallet_id'     => '943818',
        ]);

        $responseObject = $mpesa->c2b('841234567', '100', 'TestPagamento');

        dd('Teste de c2b', $responseObject);

    }
}
