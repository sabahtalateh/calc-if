<?php
namespace Sabahtalateh\Calc;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


final class Operation {
  const PLUS = 1;
  const MINUS = 2;
  const MULTIPLE = 3;
  const DEVIDE = 4;
  static public $__names = array(
    1 => 'PLUS',
    2 => 'MINUS',
    3 => 'MULTIPLE',
    4 => 'DEVIDE',
  );
}

class CalcRequest extends TBase {
  static $_TSPEC;

  /**
   * @var double
   */
  public $num1 = null;
  /**
   * @var double
   */
  public $num2 = null;
  /**
   * @var int
   */
  public $op = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'num1',
          'type' => TType::DOUBLE,
          ),
        2 => array(
          'var' => 'num2',
          'type' => TType::DOUBLE,
          ),
        3 => array(
          'var' => 'op',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'CalcRequest';
  }

  public function read($input)
  {
    return $this->_read('CalcRequest', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('CalcRequest', self::$_TSPEC, $output);
  }

}

class CalculationException extends TException {
  static $_TSPEC;

  /**
   * @var int
   */
  public $code = null;
  /**
   * @var string
   */
  public $message = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::I64,
          ),
        2 => array(
          'var' => 'message',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'CalculationException';
  }

  public function read($input)
  {
    return $this->_read('CalculationException', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('CalculationException', self::$_TSPEC, $output);
  }

}


