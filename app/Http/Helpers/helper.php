<?php

use App\Exceptions\CustomException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


if (!function_exists('exists')) {
    /**
     * @param $item
     * @return bool
     */
    function exists($item): bool
    {
        return isset($item) && $item != null && $item != '';
    }
}
if (!function_exists('filterData')) {
    /**
     * @param array $data
     * @return array
     * @throws CustomException
     */
    function filterData(array $data): array
    {
        foreach ($data as $key => $value) {
            if (!exists($value)) {
                unset($data[$key]);
            }
        }
        if (empty($data)) {
            throw new CustomException('بدنه درخواست نمیتواند خالی باشد.');
        }
        return $data;
    }
}
if (!function_exists('successResponse')) {
    /**
     * @param $data
     * @param int $statusCode
     * @return JsonResponse
     */
    function successResponse($data, int $statusCode = 200): JsonResponse
    {
        return response()->json($data, $statusCode);
    }
}

if (!function_exists('handleFile')) {
    function handleFile($file, string $path = ''): string
    {
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '_' . Str::random(8) . '.' . $extension;
        Storage::putFileAs($path, $file, $filename);
        return $path . '/' . $filename;
    }
}
