<?php
namespace Torow\Pay\Contracts;

interface GatewayInterface
{
	public function pay();
	public function notify();
}