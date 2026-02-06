<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $subscriber = NewsletterSubscriber::where('email', $validated['email'])->first();

        if ($subscriber) {
            if ($subscriber->is_active) {
                return response()->json([
                    'success' => true,
                    'message' => 'Email này đã được đăng ký nhận bản tin.',
                ]);
            }

            // Reactivate
            $subscriber->update([
                'is_active' => true,
                'unsubscribed_at' => null,
                'subscribed_at' => now(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Bạn đã đăng ký lại nhận bản tin thành công!',
            ]);
        }

        NewsletterSubscriber::create([
            'email' => $validated['email'],
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Đăng ký nhận bản tin thành công! Cảm ơn bạn.',
        ]);
    }
}
