<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     20/02/2018
// Time:     14:46
// Project:  HtmlTemplates
//
namespace CodeInc\HtmlTemplates;


/**
 * Interface TemplateInterface
 *
 * @package CodeInc\Templates
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
interface TemplateInterface {
	/**
	 * Returns the template header HTML code
	 *
	 * @throws
	 */
	public function renderHeader():void;

	/**
	 * Returns the template footer HTML code
	 *
	 * @throws
	 */
	public function renderFooter():void;
}