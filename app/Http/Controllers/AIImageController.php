<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AIImageController extends Controller
{
    //
    private $apiKey = '7c5f24c609e14a23a5adf81627dc2188';
    //private $apiKey = 'ef52357583914138a6bb36e4b2a2c26a';
    public function generateImage(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        $client = new Client();

        try {
            $response = $client->post('https://www.cutout.pro/api/v1/text2imageAsync', [
                'headers' => [
                    'Accept' => 'application/json',
                    'APIKEY' => $this->apiKey,
                ],
                'json' => [
                    'prompt' => $request->input('text'),
                    'style' => 'realistic',
                    'width' => '512',
                    'height' => '512'
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            if (isset($data['code']) && $data['code'] === 0 && isset($data['data'])) {
                return response()->json(['taskId' => $data['data']]);
            } else {
                return response()->json(['error' => 'Error al generar la tarea de imagen.'], 500);
            }

        } catch (\Exception $e) {
            return response()->json(['error' => 'Error en la solicitud: ' . $e->getMessage()], 500);
        }
    }

    public function getImageResult(Request $request)
    {
        $request->validate([
            'taskId' => 'required|string',
        ]);

        $client = new Client();

        try {
            $response = $client->get('https://www.cutout.pro/api/v1/getText2imageResult', [
                'headers' => [
                    'Accept' => 'application/json',
                    'APIKEY' => $this->apiKey,
                ],
                'query' => [
                    'taskId' => $request->input('taskId'),
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            if (isset($data['code']) && $data['code'] === 0 && isset($data['data'])) {
                if ($data['data']['status'] === 1) {
                    return response()->json(['imageUrl' => $data['data']['resultUrl']]);
                } elseif ($data['data']['status'] === 0 || $data['data']['status'] === 3) {
                    return response()->json(['status' => 'processing', 'percentage' => $data['data']['percentage']]);
                } else {
                    return response()->json(['error' => 'La generación de la imagen falló.'], 500);
                }
            } else {
                return response()->json(['error' => 'No se pudo obtener el resultado.'], 500);
            }

        } catch (\Exception $e) {
            return response()->json(['error' => 'Error en la solicitud: ' . $e->getMessage()], 500);
        }
    }


}
