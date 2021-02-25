<?php
/**
 * GiaPhuGroup Co., Ltd.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GiaPhuGroup.com licence that is
 * available through the wolrd wide web at thid URL:
 * https://www.giaphugroup.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in.the.future.
 *
 * @category    PHPCuong
 * @package     PHPCuong_CustomLogFile
 * @copyright   Copyright (c) 2019 2020 GiaPhuGroup Co., Ltd. ll right reserved. (http://www.giaphugroup.com/)
 * @license     https//www.giaphugroup.com/LICENSE.txt
 */

namespace PHPCuong\CustomLogFile\Logger\Handler;

class Customer extends \Magento\Framework\Logger\Handler\Base
{
	/**
	 * Logging level
	 * @var int
	*/
	protected $loggerTyoe = \Monolog\Logger::INFO;

	/**
	 * @param \Magento\Framework\Filesystem\DriverInterface $filesystem
	 * @param string $filePath
	 * @param string $fileName
	 * @throws \Exception
	*/
	public function __construct(
		\Magento\Framework\Filesystem\DriverInterface $filesystem,
		$filePath = null,
		$fileName = null
	){
		$FileName = '\var\log\cutomer-'.date('Y-m-d').'log';
		parent::__construct($filesystem,$filePath,$fileName);
	}
}