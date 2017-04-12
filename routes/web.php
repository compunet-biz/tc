<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $app->get('/', function () use ($app) {
//     return $app->version();
// });

$app->get('/', function () use ($app) {
    return '';
});

$app->get('/aws/accept/{company}', function ($company) {
    return view('aws-accept', ['company' => $company]);
});

$app->post('/accept', function (\Illuminate\Http\Request $request)
{
    $company = $request->input('company');
    $platform = $request->input('platform');
    $stamp = date("D M j G:i:s T Y");

    $subject = "{$platform} terms accepted by {$company}";
    $message = "{$company} has accepted the documents for {$platform} at {$stamp}";

    Log::info($message);

    $headers = 'From: jguice@compunet.biz' . "\r\n" .
               'Reply-To: jguice@compunet.biz' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail('cloudsolutions@compunet.biz', $subject, $message, $headers);

    return view('aws-thanks', ['company' => $company]);
});