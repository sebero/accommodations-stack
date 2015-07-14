<?php

namespace Stack;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\TerminableInterface;

class ReleaseMap implements HttpKernelInterface, TerminableInterface
{
    /**
     * @var HttpKernelInterface
     */
    protected $app;

    /**
     * @param HttpKernelInterface $app
     * @param array $map
     */
    public function __construct(HttpKernelInterface $app, array $map = array())
    {
        $this->app = $app;
        if ($map) {
            $this->setMap($map);
        }
    }


    /**
     * Handles a Request to convert it to a Response.
     *
     * When $catch is true, the implementation must catch all exceptions
     * and do its best to convert them to a Response instance.
     *
     * @param Request $request A Request instance
     * @param int $type The type of the request
     *                         (one of HttpKernelInterface::MASTER_REQUEST or HttpKernelInterface::SUB_REQUEST)
     * @param bool $catch Whether to catch exceptions or not
     *
     * @return Response A Response instance
     *
     * @throws \Exception When an Exception occurs during processing
     *
     * @api
     */
    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
        // TODO: Implement handle() method.
    }

    /**
     * Terminates a request/response cycle.
     *
     * Should be called after sending the response and before shutting down the kernel.
     *
     * @param Request $request A Request instance
     * @param Response $response A Response instance
     *
     * @api
     */
    public function terminate(Request $request, Response $response)
    {
        // TODO: Implement terminate() method.
    }


}