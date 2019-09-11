<?php

namespace common\components\cart\storage;

use yii\web\Session;

class SessionsStorage implements StorageInterface
{
    /**
     * @var Session
     */
    private $session;
    private $key;

    public function __construct(Session $session, $key)
    {
        $this->key = $key;
        $this->session = $session;
    }

    public function load()
    {
        return $this->session->get($this->key, []);
    }

    public function save(array $items)
    {
        return $this->session->set($this->key, $items);
    }
}