<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarcodeValidationController extends Controller
{
    /**
     * Validate a barcode and return operator/machine information.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function validateBarcode(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'barcode' => 'required|string|max:255',
        ]);

        try {
            // Call the stored procedure using SQL Server syntax
            $results = DB::connection('SP_Connection')->select("EXEC [dbo].[GT_Data] ?",[
                $validated['barcode']
            ]);
            //dd($results);
            // Process results - stored procedure returns a single row
            if (count($results) > 0) {
                $result = $results[0];

                // Check if barcode exists
                if ($result->TRC_BARCODE) {
                    return response()->json([
                        'success' => true,
                        'exists' => true,
                        'data' => [
                            'machine' => $result->MCH_CODE,
                            'operator_name' => $result->WM_NAME,
                            'operator_code' => $result->WM_CODE
                        ]
                    ]);
                } else {
                    // Barcode doesn't exist
                    return response()->json([
                        'success' => true,
                        'exists' => false,
                        'message' => 'Barcode not found'
                    ]);
                }
            } 
            // else {
            //     // No results returned from stored procedure
            //     return response()->json([
            //         'success' => false,
            //         'message' => $e->getMessage()
            //     ], 500);
            // }
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Barcode validation error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
