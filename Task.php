<?php
Class Task {

    private $task;
    private $completed;

    /**
     * Task constructor.
     * @param $task
     */
    public function __construct($task)
    {
        $this->task = $task;
        $this->completed = false;
    }

    /**
     * @return string
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @return bool
     */
    public function isComplete()
    {
        return $this->completed;
    }

    /**
     * @param bool $isComplete
     */
    public function complete(): void
    {
        $this->completed = true;
    }

}
