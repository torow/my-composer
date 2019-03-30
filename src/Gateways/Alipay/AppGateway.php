<?php 
namespace Torow\Pay\Gateways\Alipay;

use Torow\Pay\Contracts\GatewayInterface;

// app支付
class AppGateway extends GatewayInterface
{
	use SignGateWay;

	public function pay()
	{
		// 发起支付
	}

	public function notify()
	{
		// 回调处理
	}
} 