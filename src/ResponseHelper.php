<?php

namespace Intec\ResponseHelper;

use Illuminate\Http\Response;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author KelvinAmancio
*/
class ResponseHelper{
   /**
     * Format success responses
     *
     * @param string|array $data
     * @param int $code
     * @return \Illuminate\Http\Response
     */
    public function successResponse($data = 'ok', int $code = Response::HTTP_OK)
    {
        return response(['data' => $data], $code);
    }

    /**
     * Build error responses
     * @param  string|array $message
     * @param  int $code
     * @return \Illuminate\Http\Response
     */
    public function errorResponse($message, int $code)
    {
        return response(['error' => $message, 'code' => $code], $code);
    }
}