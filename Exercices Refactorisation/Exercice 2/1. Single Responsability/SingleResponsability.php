<?php

namespace SRPViolation;

interface ConnectionInterface
{
    public function dial($pno);
    public function hangup();
}

interface DataChannelInterface
{
    public function send($c);
    public function receive();
}

class Connection implements ConnectionInterface
{
    public function dial($pno)
    {
        // Implementing dial($pno) method.
    }

    public function hangup()
    {
        // Implementing hangup() method.
    }
}

class DataChannel implements DataChannelInterface
{
    public function send($c)
    {
        // Implementing send($c) method.
    }

    public function receive()
    {
        // Implementing receive() method.
    }
}

class Modem
{
    private $connection;
    private $dataChannel;

    public function __construct(ConnectionInterface $connection, DataChannelInterface $dataChannel)
    {
        $this->connection = $connection;
        $this->dataChannel = $dataChannel;
    }

    public function dial($pno)
    {
        $this->connection->dial($pno);
    }

    public function hangup()
    {
        $this->connection->hangup();
    }

    public function send($c)
    {
        $this->dataChannel->send($c);
    }

    public function receive()
    {
        $this->dataChannel->receive();
    }
}