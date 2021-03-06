<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: automation.proto
//   Date: 2016-01-22 01:34:21

namespace Vitess\Proto\Automation {

  class ClusterOperation extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $id = null;
    
    /**  @var \Vitess\Proto\Automation\TaskContainer[]  */
    public $serial_tasks = array();
    
    /**  @var int - \Vitess\Proto\Automation\ClusterOperationState */
    public $state = null;
    
    /**  @var string */
    public $error = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'automation.ClusterOperation');

      // OPTIONAL STRING id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE serial_tasks = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "serial_tasks";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\Vitess\Proto\Automation\TaskContainer';
      $descriptor->addField($f);

      // OPTIONAL ENUM state = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "state";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Automation\ClusterOperationState';
      $descriptor->addField($f);

      // OPTIONAL STRING error = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "error";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return string
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param string $value
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <serial_tasks> has a value
     *
     * @return boolean
     */
    public function hasSerialTasks(){
      return $this->_has(2);
    }
    
    /**
     * Clear <serial_tasks> value
     *
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function clearSerialTasks(){
      return $this->_clear(2);
    }
    
    /**
     * Get <serial_tasks> value
     *
     * @param int $idx
     * @return \Vitess\Proto\Automation\TaskContainer
     */
    public function getSerialTasks($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <serial_tasks> value
     *
     * @param \Vitess\Proto\Automation\TaskContainer $value
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function setSerialTasks(\Vitess\Proto\Automation\TaskContainer $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <serial_tasks>
     *
     * @return \Vitess\Proto\Automation\TaskContainer[]
     */
    public function getSerialTasksList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <serial_tasks>
     *
     * @param \Vitess\Proto\Automation\TaskContainer $value
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function addSerialTasks(\Vitess\Proto\Automation\TaskContainer $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <state> has a value
     *
     * @return boolean
     */
    public function hasState(){
      return $this->_has(3);
    }
    
    /**
     * Clear <state> value
     *
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function clearState(){
      return $this->_clear(3);
    }
    
    /**
     * Get <state> value
     *
     * @return int - \Vitess\Proto\Automation\ClusterOperationState
     */
    public function getState(){
      return $this->_get(3);
    }
    
    /**
     * Set <state> value
     *
     * @param int - \Vitess\Proto\Automation\ClusterOperationState $value
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function setState( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <error> has a value
     *
     * @return boolean
     */
    public function hasError(){
      return $this->_has(4);
    }
    
    /**
     * Clear <error> value
     *
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function clearError(){
      return $this->_clear(4);
    }
    
    /**
     * Get <error> value
     *
     * @return string
     */
    public function getError(){
      return $this->_get(4);
    }
    
    /**
     * Set <error> value
     *
     * @param string $value
     * @return \Vitess\Proto\Automation\ClusterOperation
     */
    public function setError( $value){
      return $this->_set(4, $value);
    }
  }
}

