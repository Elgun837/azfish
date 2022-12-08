<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait ApiResponser
{

    protected function successResponse($data, $code) {
		return response()->json([
			'status' => 'ok',
			'data' => $data
		], $code);
	}

	protected function errorResponse($message, $code) {
		return response()->json([
			'status' => 'error',
			'data' => [
				'code' => $code,
				'message' => $message,
			],
		], $code);
	}

}