<?php

namespace DIPViolation;

interface IWorker
{
    public function work();
}

class Worker implements IWorker
{
    public function work()
    {
        // ....working
    }
}

class SuperWorker implements IWorker
{
    public function work()
    {
        //.... working much more
    }
}

class Manager
{
    /** @var IWorker */
    private $worker;

    /**
     * @param IWorker $worker
     */
    public function setWorker(IWorker $worker)
    {
        $this->worker = $worker;
    }

    public function manage()
    {	
        $this->worker->work();
    }
}

$manager = new Manager();

// Will work with SuperWorker
$manager->setWorker(new SuperWorker());
$manager->manage();

// Will work with Worker
$manager->setWorker(new Worker());
$manager->manage();