<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Country;
use App\Models\Product;
use App\Models\ProductCode;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSpreadsheetController extends Controller
{
    public function index()
    {
        $rows = Sheets::spreadsheet('1WZ8N3Xuhn7CixQ6JzMpPoMEhJsTj7z0auiNyK5WBXe8')->sheetById('287644306')->get();
        $header = $rows->pull(0);
        $products = Sheets::collection(header: $header, rows: $rows);
        $products->toArray();
        foreach ($products as $row) {
            DB::transaction(function () use ($row) {
                Country::firstOrCreate(['name' => $row['country']]);
                $product = Product::firstOrCreate(
                    ['product_name' => $row['product_name']],
                    ['description' => $row['description']]
                );

                ProductCode::firstOrCreate(
                    ['code' => $row['product_code']],
                    ['product_id' => $product->id]
                );
            });
        }

        $rows = Sheets::spreadsheet('1WZ8N3Xuhn7CixQ6JzMpPoMEhJsTj7z0auiNyK5WBXe8')->sheetById('354123828')->get();
        $header = $rows->pull(0);
        $orders = Sheets::collection(header: $header, rows: $rows);
        $orders->toArray();

        foreach ($orders as $row) {
            $product = Product::where('id', $row['product_number'])->first();
            if (!$product) {
                continue;
            }

            $order = Order::create([
                'client_name' => $row['client_name'],
                'total_amount' => $row['final_price'],
            ]);

            OrderDetails::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'price' => $row['final_price'],
                'quantity' => $row['quantity'],
            ]);
        }
    }
}
