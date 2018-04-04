<?php
Class Task {

    private $task;
    private $completed;

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
