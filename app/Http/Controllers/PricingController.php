<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function showPricing()
    {
        $pricingPlans = [
            [
                'name' => 'Lump Sum',
                'features' => [
                    'Design And Development',
                    '$25/mo Hosting',
                    '$100 fee Per Page after 5',
                    '+$50/mo Unlimited Edits Add-on',
                    '+$250 To Add A Blog',
                ],
                'price' => '$3800',
                'duration' => '+$25/mo Hosting',
            ],
            [
                'name' => 'Monthly',
                'features' => [
                    'Design And Development',
                    'Includes Hosting',
                    '$100 fee Per Page After 5',
                    '+$250 To Add A Blog',
                    'Unlimited Edits',
                ],
                'price' => '$175',
                'duration' => 'Per Month',
            ],
            [
                'name' => 'Ecommerce',
                'features' => [
                    'Custom Shopify Store',
                    'Configure Any And All Apps',
                    'Integrated Shipping',
                    'Shopify Tutorial Walkthrough',
                ],
                'price' => '$8k',
                'duration' => 'Starting',
            ],
        ];

        return view('pricing', compact('pricingPlans'));
    }
}
