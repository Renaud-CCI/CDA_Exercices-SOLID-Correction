<?php

namespace ISPViolation;

interface IWorkable
{
    public function work();
}

interface IEatable
{
    public function eat();
}

class Worker implements IWorkable, IEatable
{
    public function work()
    {
        // working
    }

    public function eat()
    {
        // eating in launch break
    }
}


class Robot implements IWorkable
{

    public function work()
    {
        // working 24 hours per day
    }
}