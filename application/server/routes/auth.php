<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('sign_up', [RegisteredUserController::class, 'create'])
        ->name('sign_up');

    Route::post('sign_up', [RegisteredUserController::class, 'store']);

    Route::get('sign_in', [AuthenticatedSessionController::class, 'create'])
        ->name('sign_in');

    Route::post('sign_in', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot_password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot_password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset_password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset_password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify_email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify_email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm_password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm_password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('sign_out', [AuthenticatedSessionController::class, 'destroy'])
        ->name('sign_out');
});
