<?php
class Login {
    
    private $id;
    private $key;

    // This is for the Login Model where the necessary credentials are taken and stored.
    // We can add more methods if necessary.
    public function __construct($id, $key) {
        $this->id = $id;
        $this->key = $key;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of key
     */ 
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of key
     *
     * @return  self
     */ 
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}