<?php
/**
 * CodeIgniter Skeleton
 *
 * A ready-to-use CodeIgniter skeleton  with tons of new features
 * and a whole new concept of hooks (actions and filters) as well
 * as a ready-to-use and application-free theme and plugins system.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018, Kader Bouyakoub <bkader[at]mail[dot]com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package 	CodeIgniter
 * @author 		Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright	Copyright (c) 2003, 2005, 2006, 2009 Danilo Segan <danilo@kvota.net>.
 * @license 	http://opensource.org/licenses/MIT	MIT License
 * @link 		https://goo.gl/wGXHO9
 * @since 		2.1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class File_reader
{
	private $_pos;
	private $_fd;
	private $_length;
	
	function __construct($filename)
	{
		if (file_exists($filename))
		{
			
			$this->_length = filesize($filename);
			$this->_pos    = 0;
			$this->_fd     = fopen($filename, 'rb');
			
			if ( ! $this->_fd)
			{
				$this->error = 3;
				return false;
			}
			
		}
		else
		{
			$this->error = 2;
			return false;
		}
	}
	
	function read($bytes)
	{
		if ($bytes)
		{
			fseek($this->_fd, $this->_pos);
			
			$data = '';

			while ($bytes > 0)
			{
				$chunk = fread($this->_fd, $bytes);
				$data .= $chunk;
				$bytes -= strlen($chunk);
			}

			$this->_pos = ftell($this->_fd);
			
			return $data;
		}
		else
		{
			return '';
		}
	}
	
	function seekto($pos)
	{
		fseek($this->_fd, $pos);
		$this->_pos = ftell($this->_fd);
		return $this->_pos;
	}
	
	function currentpos()
	{
		return $this->_pos;
	}
	
	function length()
	{
		return $this->_length;
	}
	
	function close()
	{
		fclose($this->_fd);
	}
	
}
